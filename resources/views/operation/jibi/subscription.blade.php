@extends('layouts.app')


@section('title')
    {{ config('app.name') }}
@endsection

@section('content')
    <div class="container-fluid px-5">
        <div class="card bg-dark text-white mb-3" style="height: 18rem">
            <img class="card-img" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image">
            <div class="card-img-overlay">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text">Last updated 3 mins ago</p>
            </div>
        </div>
        <div class="bottom-shad mb-5"></div>
        <div class="row px-5 mx-5">
            <div class="col px-5">
                <!-- <div class="container px-0"> -->
                    <div class="card bg-light mb-3">
                        <div class="card-body">
                            <form class="form-horizontal" action="" autocomplete="off">
                                @csrf
                                <div class="form-group form-row">
                                    <label class="control-label col-md-3 text-right" for="type">{{__('app.account_type')}}:</label>
                                    <div class="col-md-6">
                                        <select id="type" name="type" class="form-control form-control-sm">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-row">
                                    <label class="control-label col-md-3 text-right" for="phone">{{__('app.phone')}}:</label>
                                    <div class="col-md-1">
                                        <input type="text" class="form-control form-control-sm" id="prefix" placeholder="+212" readonly>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control form-control-sm" id="phone" name="phone" placeholder="06 00 00 00 00">
                                    </div>
                                </div>
                                <div class="form-group form-row">
                                    <label class="control-label col-md-3 text-right" for="operator">{{__('app.operator')}}:</label>
                                    <div class="col-md-6">
                                        <select id="operator" name="operator" class="form-control form-control-sm">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-row">
                                    <label class="control-label col-md-3 text-right" for="email">{{__('app.email')}}:</label>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group form-row">
                                    <label class="control-label col-md-3 text-right" for="alias">{{__('app.alias')}}:</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control form-control-sm" id="alias" name="alias" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group form-row text-center">
                                    <div class="col-md-3"></div>

                                    <div class="col-md-6">
                                        <input class="form-check-input" type="checkbox" value="" id="condition" name="condition">
                                        <label class="form-check-label font-italic" for="condition" style="font-size: 10px">{{__('app.accept_condition')}}</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer bg-light">
                            <button type="submit" class="btn bg-light float-left" style="font-size: 10px">{{ strtoupper(__('app.back')) }}</button>
                            <button type="submit" class="btn bg-main float-right" style="font-size: 10px">{{ strtoupper(__('app.subscribe')) }}</button>
                        </div>
                    </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
@endsection