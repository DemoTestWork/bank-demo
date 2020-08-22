@extends('layouts.app')


@section('title')
    {{ __('app.card.monitoring_title') }}
@endsection

@section('content')
    <div class="container-fluid px-5">
        <div class="row px-5 mx-5">
            <div class="col px-5">
                <h1 class="h5 text-main pt-4">{{ strtoupper(__('app.card.monitoring_title')) }}</h1>
                <p class="text-muted small">{{ __('app.card.monitoring_subtitle') }}</p>

                <div class="card bg-light mt-5 mb-3">
                    <div class="card-header text-muted small py-1">{{ strtoupper(__('app.search')) }}</div>
                    <div class="card-body">
                        <form class="form-horizontal" action="" autocomplete="off">
                            @csrf
                            <div class="form-group form-row my-3">
                                <label class="control-label col-md-3 text-right" for="type">{{__('app.card.card')}}:</label>
                                <div class="col">
                                    <select id="inputState" class="form-control form-control-sm">
                                        <option>{{ __('app.all_f') }}</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card bg-light mt-4 mb-3">
                    <div class="card-header text-muted small py-1">{{ strtoupper(__('app.card.cards_list_title')) }}</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="thead-light" style="font-size: 10px">
                                <tr>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.transfer.ref')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.card.number')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.card.beneficiary')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.sender_account')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.amount')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.jibi.pattern')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.op_date')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.status')) }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <tr class="small text-muted">
                                    <td class="px-0">00000010</td>
                                    <td class="px-1">Normal</td>
                                    <td class="px-1">M John Doe</td>
                                    <td class="px-1">5 000,00</td>
                                    <td class="px-1">épargne</td>
                                    <td class="px-1">14.02.2019</td>
                                    <td class="px-1">14.02.2019</td>
                                    <td class="px-1">Exécuté</td>
                                </tr> -->
                                <tr>
                                    <td colspan="8" class="small bg-white text-center text-muted">{{ __('app.table.empty_data')}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-right bg-light">
                        <button class="btn bg-light" style="font-size: 10px"><i class="fas fa-gas-pump text-main"></i> {{ strtoupper(__('app.card.make_recharge')) }}</button>
                        <button class="btn bg-light" style="font-size: 10px"><i class="far fa-credit-card text-main"></i> {{ strtoupper(__('app.card.add_card')) }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection