@extends('layouts.app')


@section('title')

@endsection

@section('content')
<div class="container-fluid px-1">
    <div class="row px-5 mx-5">
        <div class="col px-5">
            <h1 class="h5 text-main pt-4">{{ strtoupper(__('test.consultation_of_my_contras')) }}</h1>
            <div class="card bg-light mt-5 mb-3">
                <div class="card-header text-muted py-4">{{ strtoupper(__('test.situation_at')) }}</div>
                <div class="card-body">
                    <div class="container-fluid justify-content-end">
                        <table class="table table-bordered">
                            <thead class="thead-light" style="font-size: 16px">
                                <tr>
                                    <th class="py-1" scope="col">{{ strtoupper(__('test.type')) }}</th>
                                    <th class="py-1" scope="col">{{ strtoupper(__('test.nature')) }}</th>
                                    <th class="py-1" scope="col">{{ strtoupper(__('test.account')) }}</th>
                                    <th class="py-1" scope="col">{{ strtoupper(__('test.feature')) }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ strtoupper(__('test.pack')) }}</td>
                                    <td>{{ strtoupper(__('test.pack_hissab_kafy')) }}</td>
                                    <td>{{ strtoupper(__('test.account_N')) }}</td>
                                    <td>{{ strtoupper(__('test.')) }}</td>
                                </tr>
                                <tr>
                                    <td>{{ strtoupper(__('test.damage_insurance')) }}</td>
                                    <td>{{ strtoupper(__('test.securicarte_insurance')) }}</td>
                                    <td>{{ strtoupper(__('test.account_N')) }}</td>
                                    <td>{{ strtoupper(__('test.')) }}</td>
                                </tr>
                            </tbody>
                        </table>
                            <div class="row py-4">
                                <div class="col">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
