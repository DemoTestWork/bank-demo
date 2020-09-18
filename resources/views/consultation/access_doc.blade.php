@extends('layouts.app')


@section('title')
{{ __('app.cash_press.monitoring_title') }}
@endsection

@section('content')
<div class="container-fluid px-5">
    <div class="row px-5 mx-5">
        <div class="col px-5">
            <h1 class="h5 text-main pt-4">{{ strtoupper(__('test.access_to_docoments')) }}</h1>
            <p class="text-muted small">{{ __('test.statements_and _transaction') }}</p>

            <div class="card bg-light mt-5 mb-3">
                <div class="card-header text-muted small py-1">{{ strtoupper(__('test.search')) }}</div>
                <div class="card-body">
                    <form class="form-horizontal" action="" autocomplete="off">
                        @csrf
                        <div class="form-group form-row my-3">
                            <label class="control-label col-md-3 text-right" for="type">{{strtoupper(__('test.account_number'))}}:</label>
                            <div class="col">
                                <select id="inputState" class="form-control form-control-sm">
                                    <option>{{ strtoupper(__('test.account_select')) }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-row my-3">
                            <label class="control-label col-md-3 text-right" for="type">{{strtoupper(__('test.document_type'))}}:</label>
                            <div class="col">
                                <select id="inputState" class="form-control form-control-sm">
                                    <option>{{ strtoupper(__('test.document_select')) }}</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card bg-light mt-4 mb-3">
                <div class="card-header text-muted small py-1">{{ strtoupper(__('test.access_to_docoments')) }}</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="thead-light m-2" style="font-size: 10px">
                            <tr>
                                <th class="py-1" scope="col">{{ strtoupper(__('test.documents')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('test.date')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('test.action')) }}</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="small text-muted">

                            </tr>
                            <tr>
                                <td colspan="8" class="small bg-white text-center text-muted">{{ __('aucune donnée disponible dans ce tableau')}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
