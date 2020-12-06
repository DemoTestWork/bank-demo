@extends('layouts.app')


@section('title')
    {{ config('app.name') }}
@endsection

@section('content')
    <div class="container-fluid px-md-5">
        <div class="row px-md-5 mx-md-5">
            <div class="col px-md-5">
                <h1 class="h5 text-main pt-4">{{ strtoupper(__('app.jibi.recharge_title')) }}</h1>
                <p class="text-muted small">{{ __('app.jibi.recharge_subtitle') }}</p>

                <div class="card bg-light mt-5 mb-3">
                    <div class="card-header text-muted small py-1">{{ strtoupper(__('app.jibi.recharge_title')) }}</div>
                    <div class="card-body">
                        <form class="form-horizontal" action="" autocomplete="on">
                            @csrf
                            <div class="form-group form-row my-5">
                                <label class="control-label col-md-3 text-right" for="type">{{__('app.jibi.recharge_from')}}:</label>
                                <div class="col">
                                    <select id="inputState" class="form-control form-control-sm">
                                        <option selected>{{ strtoupper(__('app.jibi.select_account')) }}</option>
                                        <option>...</option>
                                    </select>
                                    <span class="float-right">{!! __('app.jibi.yesterday_sold', ['sold' => '0,00 DH']) !!}</span>
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label class="control-label col-md-3 text-right" for="type">{{__('app.jibi.title')}}:</label>
                                <div class="col-md-1">
                                    <input type="text" class="form-control form-control-sm" id="prefix" placeholder="+212" readonly>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control form-control-sm" id="phone" name="phone" placeholder="06 00 00 00 00">
                                </div>
                                <div class="col-md-2">Ex : 06 00 00 00 00</div>
                            </div>
                            <div class="form-group form-row">
                                <label class="control-label col-md-3 text-right" for="amount">{{__('app.amount')}}:</label>
                                <div class="col-md-5">
                                    <input type="number" class="form-control form-control-sm" id="amount" name="amount" placeholder="" autocomplete="off">
                                </div>
                                <div class="col-md-2">Ex : 800.00</div>
                            </div>
                            <div class="form-group form-row">
                                <label class="control-label col-md-3 text-right" for="date">{{__('app.jibi.date')}}:</label>
                                <div class="col-md-5">
                                    <input type="date" class="form-control form-control-sm" id="date" name="date" placeholder="" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label class="control-label col-md-3 text-right" for="type">{{__('app.jibi.pattern')}}:</label>
                                <div class="col-md-7">
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