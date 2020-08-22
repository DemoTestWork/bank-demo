@extends('layouts.app')


@section('title')
    {{ __('app.jibi.monitoring_title') }}
@endsection

@section('content')
    <div class="container-fluid px-5">
        <div class="row px-5 mx-5">
            <div class="col px-5">
                <h1 class="h5 text-main pt-4">{{ strtoupper(__('app.jibi.monitoring_title')) }}</h1>
                <p class="text-muted small">{{ __('app.jibi.monitoring_subtitle') }}</p>

                <div class="card bg-light mt-5 mb-3">
                    <div class="card-header text-muted small py-1">{{ strtoupper(__('app.jibi.recharge_title')) }}</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="thead-light" style="font-size: 10px">
                                <tr>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.sender_account')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.beneficiary')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.transfer.amount_dh')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.transfer.first_execution_date')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.transfer.completion_date')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.transfer.frequency')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.jibi.pattern')) }}</th>
                                <th class="py-1" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="8" class="text-center small bg-white text-muted">{{ __('app.table.empty_data') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-right bg-light">
                            <button class="btn bg-main" style="font-size: 10px"><i class="fas fa-plus text-light"></i> {{ strtoupper(__('app.transfer.add_permanent_transfer')) }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection