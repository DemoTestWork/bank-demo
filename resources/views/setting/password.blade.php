@extends('layouts.app')


@section('title')
    {{ __('app.setting.menu.password_title') }}
@endsection

@section('content')
    <div class="container-fluid px-5">
        <div class="row px-5 mx-5">
            <div class="col px-5">
                <h1 class="h5 text-main pt-4">{{ strtoupper(__('app.setting.profile_title')) }}</h1>

				{{ Html::setting_menu() }}
                    
                <div class="card bg-light mt-4 mb-3">
                    <div class="card-header text-muted small py-1">{{ strtoupper(__('app.setting.password_title')) }}</div>
                    <div class="card-body">
                        <form class="form-horizontal" action="" autocomplete="off">
                            @csrf
                            <div class="form-group form-row">
                                <label class="control-label col-md-3 text-right" for="password">{{__('app.setting.password')}}:</label>
                                <div class="col-md-5">
                                    <input type="password" class="form-control form-control-sm" id="password" name="password" placeholder="" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label class="control-label col-md-3 text-right" for="new-password">{{__('app.setting.new_password')}}:</label>
                                <div class="col-md-5">
                                    <input type="password" class="form-control form-control-sm" id="new-password" name="new-password" placeholder="" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group form-row mb-0">
                                <label class="control-label col-md-3 text-right" for="confirm-password">{{__('app.setting.new_password')}}:</label>
                                <div class="col-md-5">
                                    <input type="password" class="form-control form-control-sm" id="confirm-password" name="confirm-password" placeholder="">
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <div class="col-md-3"></div>

                                <div class="col-md-5 pl-4">
                                    <input class="form-check-input" type="checkbox" value="" id="condition" name="condition">
                                    <label class="form-check-label font-italic" for="condition" style="font-size: 10px">{{__('app.setting.display_password')}}</label>
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <div class="col-md-3"></div>

                                <div class="col-md-5 pl-4">
                                    <input class="form-check-input" type="checkbox" value="" id="condition" name="condition">
                                    <label class="form-check-label font-italic" for="condition" style="font-size: 10px">{{__('app.accept_condition')}}</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-light">
                        <button type="submit" class="btn bg-light float-left" style="font-size: 10px"><i class="fas fa-times text-muted fa-lg"></i> {{ strtoupper(__('app.cancel')) }}</button>
                        <button type="submit" class="btn bg-light float-right" style="font-size: 10px"><i class="fas fa-check-circle text-main fa-lg"></i> {{ strtoupper(__('app.setting.change_password')) }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection