@extends('layouts.app')


@section('title')
    {{ config('app.name') }}
@endsection

@section('content')
    <div class="container-fluid px-md-5">
        <div class="row px-md-5 mx-md-5">
            <div class="col px-md-5">
                <h1 class="h5 text-main pt-4">{{ strtoupper(__('app.transfer.monitoring_title')) }}</h1>
                <p class="text-muted small">{{ __('app.transfer.monitoring_subtitle') }}</p>

                <div class="card bg-light mt-5 mb-3">
                    <div class="card-header text-muted small py-1">{{ strtoupper(__('app.search')) }}</div>
                    <div class="card-body">
                        <form class="form-horizontal" action="" autocomplete="off">
                            @csrf
                            <div class="form-group form-row my-3">
                                <label class="control-label col-md-3 text-right" for="type">{{__('app.account')}}:</label>
                                <div class="col">
                                    <select id="inputState" class="form-control form-control-sm">
                                        <option>{{ __('app.all') }}</option>
                                    </select>
                                    <a href="#"><span class="float-right small">{{ __('app.advance_search') }}</span></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card bg-light mt-4 mb-3">
                    <div class="card-header text-muted small py-1">{{ strtoupper(__('app.transfer.list_title')) }}</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="thead-light" style="font-size: 10px">
                                <tr>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.transfer.ref')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.type')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.sender_account')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.transfer.rib_beneficiary')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.transfer.name_beneficiary')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.transfer.amount_dh')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.jibi.pattern')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.create_date')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.op_date')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.status')) }}</th>
                                <th class="py-1" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="small text-muted">
                                    <td class="px-0">00000010</td>
                                    <td class="px-1">Normal</td>
                                    <td class="px-1">000111Z000111222</td>
                                    <td class="px-1">000111Z000...</td>
                                    <td class="px-1">M John Doe</td>
                                    <td class="px-1">5 000,00</td>
                                    <td class="px-1">épargne</td>
                                    <td class="px-1">14.02.2019</td>
                                    <td class="px-1">14.02.2019</td>
                                    <td class="px-1">Exécuté</td>
                                    <td class="px-1"><i class="fas fa-cog text-muted"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection