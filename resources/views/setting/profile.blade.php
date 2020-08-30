@extends('layouts.app')


@section('title')
    {{ __('app.cash_press.monitoring_title') }}
@endsection

@section('content')
    <div class="container-fluid px-5">
        <div class="row px-5 mx-5">
            <div class="col px-5">
                <h1 class="h5 text-main pt-4">{{ strtoupper(__('app.setting.profile_title')) }}</h1>

                {{ Html::setting_menu() }}

                <div class="card bg-light mt-4 mb-3">
                    <div class="card-header text-muted small py-1">{{ strtoupper(__('app.setting.menu.profile')) }}</div>
                    <div class="card-body">
                        <form class="form-horizontal" action="" autocomplete="on">
                            @csrf
                            <div class="row">
                                <label class="col-md-3 text-right" for="type">{{__('app.setting.civility')}}:</label>
                                <div class="col-md-5 pl-0">
                                    {{ $user->civility }}
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 text-right" for="type">{{__('app.setting.name')}}:</label>
                                <div class="col-md-5 pl-0">
                                    {{ $user->name }}
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 text-right" for="type">{{__('app.setting.firstname')}}:</label>
                                <div class="col-md-5 pl-0">
                                    {{ $user->firstname }}
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 text-right" for="type">{{__('app.setting.email')}}:</label>
                                <div class="col-md-5 pl-0">
                                    {{ $user->email }}
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 text-right" for="type">{{__('app.setting.phone')}}:</label>
                                <div class="col-md-5 pl-0">
                                    (+212) {{ $user->phoneHidden() }}
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 text-right" for="type">{{__('app.setting.operator')}}:</label>
                                <div class="col-md-5 pl-0">
                                    SFR <a href="#">Modifier</a>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 text-right" for="type">{{__('app.setting.language')}}:</label>
                                <div class="col-md-5 pl-0">
                                    Français
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection