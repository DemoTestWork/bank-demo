@extends('layouts.app')


@section('title')
    {{ config('app.name') }}
@endsection

@section('content')
    <div class="container-fluid px-md-5">
        <div class="row px-md-5 mx-md-5">
            <div class="col px-md-5">
                <h1 class="h5 text-main pt-4 text-uppercase">{{ strtoupper(__('app.transfer.add_beneficiary_title')) }}</h1>
                <p class="text-muted small">{{ __('app.transfer.add_beneficiary_subtitle') }}</p>

                <div class="card bg-light mt-5 mb-3">
                    <div class="card-header text-muted small py-1 text-uppercase">{!! __('app.transfer.add_beneficiary_formtitle') !!}</div>
                    <div class="card-body">
                        @if(Session::has('message'))
                            <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show" role="alert">
                                <p>{{ __(Session::get('message')) }}</p>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        {!! Form::open(['route' => 'operation.transfer.add_beneficiary_post', 'id' => 'add_beneficiary', 'autocomplete' => 'off']) !!}
                        
                            <div class="form-group form-row">
                                <label class="control-label col-md-3 text-right" for="type">{{__('app.transfer.beneficiary_type')}} <abbr class="text-danger">*</abbr></label>
                                <div class="col">
                                    <select id="type" name="type" class="form-control form-control-sm">
                                        <option value="physical" selected>{{ __('Personne Physique') }}</option>
                                        <option value="moral">{{ __('Personne Morale') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-row form-type" data-form-type="physical">
                                <label class="control-label col-md-3 text-right" for="lastname">{{__('app.setting.name')}} <abbr class="text-danger">*</abbr></label>
                                <div class="col">
                                    <input type="text" class="form-control form-control-sm" id="lastname" name="lastname" placeholder="">
                                </div>
                            </div>
                            <div class="form-group form-row form-type" data-form-type="physical">
                                <label class="control-label col-md-3 text-right" for="firstname">{{__('app.setting.firstname')}} <abbr class="text-danger">*</abbr></label>
                                <div class="col">
                                    <input type="text" class="form-control form-control-sm" id="firstname" name="firstname" placeholder="">
                                </div>
                            </div>
                            <div class="form-group form-row form-type" data-form-type="moral" style="display: none;">
                                <label class="control-label col-md-3 text-right" for="social_reason">{{__('app.transfer.social_reason')}} <abbr class="text-danger">*</abbr></label>
                                <div class="col">
                                    <input type="text" class="form-control form-control-sm" id="social_reason" name="social_reason" placeholder="">
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label class="control-label col-md-3 text-right" for="rib_prefix">{{__('app.rib')}} <abbr class="text-danger">*</abbr></label>
                                <div class="col-md-1">
                                    <input type="text" class="form-control form-control-sm"  id="rib_prefix" name="rib_prefix" minlength="3" maxlength="3" placeholder="">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control form-control-sm" id="rib" name="rib" minlength="24" maxlength="24" placeholder="">
                                </div>
                            </div>
                            <small><abbr class="text-danger">*</abbr> : {{__('app.form.required_field')}}</small>
                            <hr>
                            <div class="text-muted d-flex">
                                <i class="fas fa-exclamation-circle mr-3 mt-1"></i>
                                <p class="small inline-block text-justify">{{__('app.personnal_data_info')}}</p>
                            </div>
                        <!-- </form> -->
                        {!! Form::close() !!}
                    </div>
                    <div class="card-footer bg-light">
                        <button type="submit" class="btn bg-light text-uppercase float-left" style="font-size: 10px" onclick="window.history.back()"><i class="fas fa-undo"></i> {{ __('app.back') }}</button>
                        <button id="submit_form" type="submit" class="btn bg-light text-uppercase float-right" style="font-size: 10px" disabled><i class="fas fa-check"></i> {{ __('app.valid') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(function(){
        $('#type').on('change', function(e){
            $('.form-type').hide();
            $(`.form-type[data-form-type='${$(this).val()}']`).show();
            $('#rib_prefix-error').text('');
            $('#rib-error').text('');
        });

        $("form#add_beneficiary").validate({
            rules: {
                type: "required",
                lastname: {
                    required: {
                        depends: function(element) {
                            // console.log($("#type").val() == 'physical')
                            return $("#type").val() == 'physical'
                        }
                    }
                },
                firstname: {
                    required: {
                        depends: function(element) {
                            // console.log($("#type").val() == 'physical')
                            return $("#type").val() == 'physical'
                        }
                    }
                },
                social_reason: {
                    required: {
                        depends: function(element) {
                            return $("#type").val() == 'moral'
                        }
                    }
                },
                rib_prefix: {
                    required: {
                        required: true,
                        number: true
                        // depends: function(element) {
                        //     return element.val().length == 3
                        // }
                    }
                },
                rib: "required"
            },
            messages: {
                // firstname: "{{ __('app.valid') }}",
                // lastname: "Please enter your lastname",
                // social_reason: "Please enter your lastname",
                // social_reason: "Please enter your lastname",
                // rib_prefix: "Please enter your lastname",
                // rib: "Please enter your lastname",
            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function(form) {
                form.submit();
            }
        });

        $('.form-control ').on('input', function() { 
            if($("form#add_beneficiary").valid()) $('button#submit_form').removeClass('bg-light').addClass('bg-warning text-light').prop('disabled', false);
            else $('button#submit_form').addClass('bg-light').removeClass('bg-warning text-light').prop('disabled', true);
        });

        $('#submit_form').click(function(e){
            e.preventDefault();
            $('form#add_beneficiary').submit();
        })
        

        // $('#type').trigger('change');
    });
</script>
@endsection