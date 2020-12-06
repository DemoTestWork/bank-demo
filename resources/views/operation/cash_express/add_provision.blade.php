@extends('layouts.app')


@section('title')
    {{ __('app.cash_press.provision_title') }}
@endsection

@section('content')
    <div class="container-fluid px-md-5">
        <div class="row px-md-5 mx-md-5">
            <div class="col px-md-5">
                <h1 class="h5 text-main pt-4">{{ strtoupper(__('app.cash_press.provision_title')) }}</h1>
                <p class="text-muted small">{{ __('app.cash_press.provision_subtitle') }}</p>

                <div class="card bg-light mt-5 mb-3">
                    <div class="card-header text-muted small py-1">{{ strtoupper(__('app.cash_press.provision_title')) }}</div>
                    <div class="card-body">
                        <form class="form-horizontal" action="" autocomplete="off">
                            @csrf
                            <div class="form-group form-row my-5">
                                <label class="control-label col-md-3 text-right" for="type">{{__('app.jibi.recharge_from')}}:</label>
                                <div class="col-md-5">
                                    <select id="inputState" class="form-control form-control-sm">
                                        <option selected>{{ __('app.cash_press.any_card') }}</option>
                                        <option>{{ strtoupper(__('xxxxxxxxxxxx0000 CONFIENCE')) }}</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <span class="float-right">{!! __('app.cash_press.max_amount', ['amount' => '0', 'devise' => 'DH']) !!}</span>
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label class="control-label col-md-3 text-right" for="type">{{__('app.cash_press.confidential_digit')}}:</label>
                                <div class="col-md-5">
                                    <input type="number" class="form-control form-control-sm" id="amount" name="amount" placeholder="" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label class="control-label col-md-3 text-right" for="amount">{{__('app.amount')}}:</label>
                                <div class="col-md-5">
                                    <input type="number" class="form-control form-control-sm" id="amount" name="amount" placeholder="100.00" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label class="control-label col-md-3 text-right" for="date">{{__('app.jibi.date')}}:</label>
                                <div class="col-md-5">
                                    <input type="date" class="form-control form-control-sm" id="date" name="date" placeholder="" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label class="control-label col-md-3 text-right" for="type">{{__('app.jibi.pattern')}}:</label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control form-control-sm" id="pattern" name="pattern" placeholder="">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-light">
                        <button type="submit" class="btn bg-light float-left" style="font-size: 10px">{{ strtoupper(__('app.cancel')) }}</button>
                        <button type="submit" class="btn bg-main float-right" style="font-size: 10px">{{ strtoupper(__('app.valid')) }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection