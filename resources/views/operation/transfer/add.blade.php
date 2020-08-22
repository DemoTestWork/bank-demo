@extends('layouts.app')


@section('title')
    {{ config('app.name') }}
@endsection

@section('content')
    <div class="container-fluid px-5">
        <div class="row px-5 mx-5">
            <div class="col px-5">
                <h1 class="h5 text-main pt-4">{{ strtoupper(__('app.transfer.title')) }}</h1>
                <p class="text-muted small">{{ __('app.transfer.sub_title') }}</p>

                <div class="card bg-light mt-5 mb-3">
                    <div class="card-header text-muted small py-1">{{ strtoupper(__('app.transfer.title')) }}</div>
                    <div class="card-body">
                        <form class="form-horizontal" action="" autocomplete="off">
                            @csrf
                            <div class="form-group form-row my-5">
                                <label class="control-label col-md-3 text-right" for="type">{{__('app.transfer.from_account')}}:</label>
                                <div class="col">
                                    <select id="inputState" class="form-control form-control-sm">
                                        <option selected>{{ strtoupper(__('app.jibi.select_account')) }}</option>
                                        <option>{{ strtoupper(__('000111A000111222 | M Firstname Name | Account Type')) }}</option>
                                    </select>
                                    <span class="float-right small">{!! __('app.transfer.real_sold', ['sold' => '3.440,78', 'devise' => 'MAD']) !!}</span>
                                </div>
                            </div>

                            <div class="form-group form-row">
                                <label class="control-label col-md-3 text-right" for="type">{{__('app.transfer.to_account')}}:</label>
                                <div class="col">
                                    <select id="inputState" class="form-control form-control-sm">
                                        <option selected>{{ strtoupper(__('app.transfer.select_beneficiary')) }}</option>
                                    </select>
                                    <a href="#"><span class="float-right small"><i class="fas fa-plus text-main"></i> {{ __('app.transfer.add_beneficiary') }}</span></a>
                                </div>
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
                                <div class="col-md-5">
                                    <input type="text" class="form-control form-control-sm" id="pattern" name="pattern" placeholder="">
                                </div>
                            </div>

                            <div class="form-group form-row">
                                <div class="col-md-3"></div>

                                <div class="col-md-5">
                                    <input class="form-check-input" type="checkbox" value="" id="standing_order" name="standing_order">
                                    <label class="form-check-label" for="standing_order" style="font-size: 10px">{{__('app.transfer.standing_order')}}</label>
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