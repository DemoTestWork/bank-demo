@extends('layouts.app')


@section('title')
    {{ __('app.cash_press.monitoring_title') }}
@endsection

@section('content')
    <div class="container-fluid px-5">
        <div class="row px-5 mx-5">
            <div class="col px-5">
                <h1 class="h5 text-main pt-4">{{ strtoupper(__('app.cash_press.monitoring_title')) }}</h1>
                <p class="text-muted small">{{ __('app.cash_press.monitoring_subtitle') }}</p>

                <div class="card bg-light mt-5 mb-3">
                    <div class="card-header text-muted small py-1">{{ strtoupper(__('app.search')) }}</div>
                    <div class="card-body">
                        <form class="form-horizontal" action="" autocomplete="off">
                            @csrf
                            <div class="form-group form-row my-3">
                                <label class="control-label col-md-3 text-right" for="type">{{__('app.cash_press.card')}}:</label>
                                <div class="col">
                                    <select id="inputState" class="form-control form-control-sm">
                                        <option>{{ __('app.cash_press.select_card') }}</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card bg-light mt-4 mb-3">
                    <div class="card-header text-muted small py-1">{{ strtoupper(__('app.cash_press.provision_list')) }}</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="thead-light" style="font-size: 10px">
                                <tr>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.transfer.ref')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.cash_press.card')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.amount')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.jibi.pattern')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.op_date')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.status')) }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="small text-muted">
                                    <td>000111222333</td>
                                    <td>XXXXXXXXXXXX0000</td>
                                    <td>400,00</td>
                                    <td>achat</td>
                                    <td>14.02.2019 11:25</td>
                                    <td>Exécuté</td>
                                </tr>
                                <tr>
                                    <td colspan="8" class="small bg-white text-center text-muted">{{ __('app.table.empty_data')}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection