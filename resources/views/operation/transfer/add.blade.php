@extends('layouts.app')


@section('title')
    {{ config('app.name') }}
@endsection

@section('content')
    <div class="container-fluid px-md-5">
        <div class="row px-md-5 mx-md-5">
            <div class="col px-md-5">
                <h1 class="h5 text-main pt-4 text-uppercase">{{ __('app.transfer.title') }}</h1>
                <p class="text-muted small">{{ __('app.transfer.sub_title') }}</p>

                <div class="card bg-light mt-5 mb-3">
                    <div class="card-header text-muted small py-1 text-uppercase">{{ __('app.transfer.title') }}</div>
                    <div class="card-body">
                        @if(Session::has('message'))
                            <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show" role="alert">
                                <p>{{ __(Session::get('message')) }}</p>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        @if(session()->has('errors'))
                            @php $errors = Session::get('errors') @endphp
                            <div class="alert alert-danger py-1">
                            @if($errors->transfer->first('transfer_account'))
                                <p class="my-1">{{ $errors->transfer->first('transfer_account') }}</p>
                            @endif
                            @if($errors->transfer->first('transfer_beneficiary'))
                                <p class="my-1">{{ $errors->transfer->first('transfer_beneficiary') }}</p>
                            @endif
                            @if($errors->transfer->first('amount'))
                                <p class="my-1">{{ $errors->transfer->first('amount') }}</p>
                            @endif
                            @if($errors->transfer->first('date'))
                                <p class="my-1">{{ $errors->transfer->first('date') }}</p>
                            @endif
                            </div>
                        @endif

                        {!! Form::open(['route' => 'operation.transfer.add_post', 'id' => 'make_transfer', 'autocomplete' => 'off']) !!}
                            <div class="form-group form-row my-5">
                                <label class="control-label col-md-3 text-right" for="type">{{__('app.transfer.from_account')}} <abbr class="text-danger">*</abbr> :</label>
                                <div class="col">
                                    @foreach ( $user->accounts as $account )
                                        <input type="hidden" id="{{ $account->number }}" name="{{ $account->number }}" placeholder="" value="{{ $account->balance }}" data-currency="{{ $account->currency->short_name }}">
                                    @endforeach

                                    <select id="transfer_account" name="transfer_account" class="form-control form-control-sm text-uppercase">
                                        @foreach ( $user->accounts as $account )
                                            <option value="{{ $account->number }}">{{ $account->number }} | {{ $user->civility }} {{ $user->name }} {{ $user->firstname }} | {{ $account->account_type->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="float-right small">{{ __('app.real_sold') }} : 
                                        <span id="account-balance" class="">--</span> 
                                        <span id="account-currency" class="">--</span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group form-row">
                                <label class="control-label col-md-3 text-right" for="type">{{__('app.transfer.to_account')}} <abbr class="text-danger">*</abbr> :</label>
                                <div class="col">
                                    <select id="transfer_beneficiary" name="transfer_beneficiary" class="form-control form-control-sm text-uppercase">
                                        <option value="" selected>{{ __('app.transfer.select_beneficiary') }}</option>

                                    @foreach ( $user->beneficiaries as $beneficiary )
                                        <option value="{{ $beneficiary->id }}">{{ $beneficiary->rib }} | {{ $beneficiary->social_reason ? $beneficiary->social_reason : $beneficiary->firstname.$beneficiary->lastname }}</option>
                                    @endforeach
                                    </select>
                                    <a href="{{ route('operation.transfer.add_beneficiary') }}"><span class="float-right small"><i class="fas fa-plus text-main"></i> {{ __('app.transfer.add_beneficiary') }}</span></a>
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label class="control-label col-md-3 text-right" for="amount">{{__('app.amount')}} <abbr class="text-danger">*</abbr> :</label>
                                <div class="col-md-5">
                                    <input type="number" class="form-control form-control-sm" id="amount" name="amount" autocomplete="off">
                                </div>
                                <div class="col-md-2">Ex : 800.00</div>
                            </div>
                            <div class="form-group form-row">
                                <label class="control-label col-md-3 text-right" for="date">{{__('app.jibi.date')}} <abbr class="text-danger">*</abbr> :</label>
                                <div class="col-md-5">
                                    <input type="date" class="form-control form-control-sm" id="date" name="date" placeholder=""  autocomplete="off" readonly>
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <div class="col-md-3"></div>

                                <div class="col-md-5">
                                    <input class="form-check-input" type="checkbox" id="permanent_order" name="permanent_order">
                                    <label class="form-check-label" for="permanent_order" style="font-size: 10px">{{__('app.transfer.standing_order')}}</label>
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label class="control-label col-md-3 text-right" for="type">{{__('app.jibi.pattern')}} :</label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control form-control-sm" id="pattern" name="pattern" placeholder="">
                                </div>
                            </div>
                            <small><abbr class="text-danger">*</abbr> : {{__('app.form.required_field')}}</small>
                        <!-- </form> -->
                        {!! Form::close() !!}
                    </div>
                    <div class="card-footer bg-light">
                        <button type="submit" class="btn bg-light float-left" style="font-size: 10px" onclick="window.history.back()"><i class="fas fa-undo text-uppercase"></i> {{ __('app.cancel') }}</button>
                        <button id="submit_form" type="submit" class="btn bg-light float-right" style="font-size: 10px" disabled><i class="fas fa-check text-uppercase"></i> {{ __('app.valid') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(function(){
        function checkForm($form) {
            if($form.valid()) $('button#submit_form').removeClass('bg-light').addClass('bg-warning text-light').prop('disabled', false);
            else $('button#submit_form').addClass('bg-light').removeClass('bg-warning text-light').prop('disabled', true);
        }
        $('#transfer_account').on('change', function(e){
            let accountNumber = $(this).val();
            let balance = $(`input[name="${accountNumber}"]`).val();
            let currencyShortname = $(`input[name="${accountNumber}"]`).data('currency');
            $('#account-balance').removeClass('text-success text-warning text-danger');
            $('#account-currency').removeClass('text-success text-warning text-danger');
            if(balance <= 0) { $('#account-balance').addClass('text-danger'); $('#account-currency').addClass('text-danger'); }
            else if(balance < 100) { $('#account-balance').addClass('text-warning');  $('#account-currency').addClass('text-warning'); }
            else if(balance > 100) { $('#account-balance').addClass('text-success');  $('#account-currency').addClass('text-success'); }
            $('#account-balance').text(`${balance}`);
            $('#account-currency').text(`${currencyShortname}`);
        });
        $('#transfer_account').trigger('change');

        $('input[type="date"]').attr('min', moment().add(1, 'days').format('YYYY-MM-DD'));

        $('#permanent_order').change(function(e){
            checkForm($("form#make_transfer"));
            if($(this).is(":checked")) $('#date').prop('readonly', false);
            else { $('#date').prop('readonly', true); $('#date-error').remove() }
        })


        $("form#make_transfer").validate({
            rules: {
                transfer_account:  {
                    required: {
                        depends: function(element) {
                            return parseInt(element.value) > 0 == true
                        }
                    }
                },
                transfer_beneficiary:  {
                    required: {
                        depends: function(element) {
                            return parseInt(element.value) > 0 == true
                        }
                    }
                },
                amount: {
                    currency: true,
                },
                date: {
                    required: {
                        depends: function(element) {
                            // console.log($('#permanent_order').is(":checked"));
                            return $('#permanent_order').is(":checked") == true
                        }
                    }
                }
            },
            messages: {
                // firstname: "{{ __('app.valid') }}",
                // lastname: "Please enter your lastname",
                // social_reason: "Please enter your lastname",
                // social_reason: "Please enter your lastname",
                // rib_prefix: "Please enter your lastname",
                amount: "Please enter valid amount",
            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function(form) {
                form.submit();
            }
        });
        $('.form-control ').on('input', function() { 
            checkForm($('form#make_transfer'));
            // if($("form#make_transfer").valid()) $('button#submit_form').removeClass('bg-light').addClass('bg-warning text-light').prop('disabled', false);
            // else $('button#submit_form').addClass('bg-light').removeClass('bg-warning text-light').prop('disabled', true);
        });

        $('#submit_form').click(function(e){
            e.preventDefault();
            // console.log($('form#make_transfer').valid()); return;
            if($('form#make_transfer').valid()) $('form#make_transfer').submit();
        })
    });
</script>
@endsection
