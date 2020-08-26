@extends('layouts.app')


@section('title')
    {{ __('app.cash_press.monitoring_title') }}
@endsection

@section('content')
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
                        <div class="card-header small h-100 py-1 text-center text-main">
                            <div class="mt-3 mb-2">
                                <i class="fas fa-calculator fa-3x"></i>
                            </div>
                            <div class="mb-3">{{ strtoupper(__('app.setting.menu.accounts')) }}</div>
                            <div class="mb-2 small">{{ __('app.setting.menu.accounts_subtitle') }}</div>
                        </div>
                    </div>
                    <div class="card bg-highlight mt-5 mb-3 d-inline-flex mx-2">
                        <div class="card-header small h-100 py-1 text-center">
                            <div class="text-muted mt-3 mb-2">
                                <i class="far fa-file-alt fa-3x"></i>
                            </div>
                            <div class="text-muted mb-3">{{ strtoupper(__('app.setting.menu.profile')) }}</div>
                            <div class="text-muted mb-2 small">{{ __('app.setting.menu.profile_subtitle') }}</div>
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
                        <table class="table table-bordered">
                            <thead class="thead-light" style="font-size: 10px">
                                <tr>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.setting.account_number')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.setting.entitled')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.setting.type')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.setting.canal')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.status')) }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="small text-muted">
                                    <td>000111A000111222</td>
                                    <td>M JOHN DOE</td>
                                    <td>COMPTE CHEQUE</td>
                                    <td>CONSULTATION ET TRANSACTION</td>
                                    <td></td>
                                </tr>
                                <tr class="small text-muted">
                                    <td>000111A000111222</td>
                                    <td>M JOHN DOE</td>
                                    <td>COMPTE CARNET</td>
                                    <td>CONSULTATION ET TRANSACTION</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer bg-light">
                        <button type="submit" class="btn bg-light float-left" style="font-size: 10px">{{ strtoupper(__('app.back')) }}</button>
                        <button type="submit" class="btn bg-main float-right" style="font-size: 10px"><i class="fas fa-plus"></i> {{ strtoupper(__('app.setting.add_account')) }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection