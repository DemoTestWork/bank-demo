@extends('layouts.app')


@section('title')
    {{ __('app.cash_press.monitoring_title') }}
@endsection

@section('content')
<style> 
    h1 { 
        color: green; 
    } 
            
    /* toggle in label designing */
    .toggle { 
        position : relative ; 
        display : inline-block; 
        width : 100px; 
        height : 52px; 
        background-color: red; 
        border-radius: 30px; 
        border: 2px solid gray; 
    } 
            
    /* After slide changes */
    .toggle:after { 
        content: ''; 
        position: absolute; 
        width: 50px; 
        height: 50px; 
        border-radius: 50%; 
        background-color: gray; 
        top: 1px;  
        left: 1px; 
        transition:  all 0.5s; 
    } 
            
    /* Toggle text */
    p { 
        font-family: Arial, Helvetica, sans-serif; 
        font-weight: bold; 
    } 
            
    /* Checkbox cheked effect */
    .checkbox:checked + .toggle::after { 
        left : 49px;  
    } 
            
    /* Checkbox cheked toggle label bg color */
    .checkbox:checked + .toggle { 
        background-color: green; 
    } 
            
    /* Checkbox vanished */
    .checkbox {  
        display : none; 
    } 
</style> 

    <div class="container-fluid px-5">
        <div class="row px-5 mx-5">
            <div class="col px-5">
                <h1 class="h5 text-main pt-4">{{ strtoupper(__('app.setting.profile_title')) }}</h1>

                <div class="d-flex">
                    <div class="card bg-highlight mt-5 mb-3 d-inline-flex mx-2">
                        <div class="card-header small h-100 py-1 text-center">
                            <div class="text-muted mt-3 mb-2">
                                <i class="fas fa-address-card fa-3x"></i>
                            </div>
                            <div class="text-muted mb-3">{{ strtoupper(__('app.setting.menu.profile')) }}</div>
                            <div class="text-muted mb-2 small">{{ __('app.setting.menu.profile_subtitle') }}</div>
                        </div>
                    </div>
                    <div class="card bg-highlight mt-5 mb-3 d-inline-flex mx-2">
                        <div class="card-header small h-100 py-1 text-center">
                            <div class="text-muted mt-3 mb-2">
                                <i class="fas fa-calculator fa-3x"></i>
                            </div>
                            <div class="text-muted mb-3">{{ strtoupper(__('app.setting.menu.accounts')) }}</div>
                            <div class="text-muted mb-2 small">{{ __('app.setting.menu.accounts_subtitle') }}</div>
                        </div>
                    </div>
                    <div class="card bg-highlight mt-5 mb-3 d-inline-flex mx-2">
                        <div class="card-header small h-100 py-1 text-center">
                            <div class="text-main mt-3 mb-2">
                                <i class="far fa-file-alt fa-3x"></i>
                            </div>
                            <div class="text-main mb-3">{{ strtoupper(__('app.setting.menu.electronic_report_title')) }}</div>
                            <div class="text-main mb-2 small">{{ __('app.setting.menu.accounts_subtitle') }}</div>
                        </div>
                    </div>
                    <div class="card bg-highlight mt-5 mb-3 d-inline-flex mx-2">
                        <div class="card-header small h-100 py-1 text-center">
                            <div class="text-muted mt-3 mb-2">
                                <i class="fas fa-bell fa-3x"></i>
                            </div>
                            <div class="text-muted mb-3">{{ strtoupper(__('app.setting.menu.profile')) }}</div>
                            <div class="text-muted mb-2 small">{{ __('app.setting.menu.profile_subtitle') }}</div>
                        </div>
                    </div>
                    <div class="card bg-highlight mt-5 mb-3 d-inline-flex mx-2">
                        <div class="card-header small h-100 py-1 text-center">
                            <div class="text-muted mt-3 mb-2">
                                <i class="fas fa-lock fa-3x"></i>
                            </div>
                            <div class="text-muted mb-3">{{ strtoupper(__('app.setting.menu.profile')) }}</div>
                            <div class="text-muted mb-2 small">{{ __('app.setting.menu.profile_subtitle') }}</div>
                        </div>
                    </div>
                </div>
                    

                <div class="card bg-light mt-4 mb-3">
                    <div class="card-body">
                        <form class="form-horizontal" action="" autocomplete="off">
                            @csrf
                            <div class="row">
                                <label class="col-md-4 text-right text-muted small" for="type">{{__('app.setting.bank_statement')}}:</label>
                                <div class="col-md-4 pl-0">
                                    <input type="checkbox" id="bank-statement" name="bank-statement" class="checkbox checkbox-toggle" />
                                    <label for="bank-statement" class="switch"></label>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-4 text-right text-muted small" for="type">{{__('app.setting.electronic_readout')}}:</label>
                                <div class="col-md-4 pl-0">
                                    <input type="checkbox" id="toggle" class="checkbox checkbox-toggle" checked/>
                                    <label for="toggle" class="switch"></label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-light">
                        <button type="submit" class="btn bg-main float-right" style="font-size: 10px">{{ strtoupper(__('app.valid')) }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection