@extends('layouts.app')


@section('title')
{{ config('app.name') }}
@endsection

@section('content')
<div class="container-fluid px-5">
    <div class="row px-5 mx-5">
        <div class="col px-5">
            <h1 class="h5 text-main pt-4">{{ strtoupper(__('test.')) }}</h1>

            <div class="card bg-light mt-5 mb-3">
                <!-- <div class="card-header text-muted small py-1">{{ strtoupper(__('app.cash_press.provision_title')) }}</div> -->
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="unpaid" data-toggle="tab" href="#unpaid-credit" role="tab" aria-controls="unpaid" aria-selected="true">{{ strtoupper(__('test.unpaid')) }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="unpaid-check-issued" data-toggle="tab" href="#unpaid-check-issued" role="tab" aria-controls="unpaid-check-issued" aria-selected="true">{{ strtoupper(__('test.unpaid_check_issued')) }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="unpaid-check-remitted-tab" data-toggle="tab" href="#unpaid-check-remitted" role="tab" aria-controls="unpaid-check-remitted" aria-selected="false">{{ strtoupper(__('test.unpaid check remitted')) }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="unpaid-debit-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="unpaid-debit" aria-selected="false">{{ strtoupper(__('test.unpaid_debit')) }}</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="unpaid" role="tabpanel" aria-labelledby="unpaid-tab">
                            <table class="table table-bordered">
                                <thead class="thead-light" style="font-size: 10px">
                                    <tr>
                                        <th class="" scope="col">
                                        </th>
                                        <th class="py-1" scope="col">{{ strtoupper(__('test.account_number')) }}</th>
                                        <th class="py-1" scope="col">{{ strtoupper(__('test.contract_number')) }}</th>
                                        <th class="py-1" scope="col">{{ strtoupper(__('test.')) }}</th>
                                        <th class="py-1" scope="col">{{ strtoupper(__('app.account_type')) }}</th>
                                        <th class="py-1" scope="col">{{ strtoupper(__('app.bank')) }}</th>
                                        <th class="py-1" scope="col">{{ strtoupper(__('app.add_date')) }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <table class="table table-bordered">
                                <thead class="thead-light" style="font-size: 10px">
                                    <tr>
                                        <th class="" scope="col">
                                        </th>
                                        <th class="py-1" scope="col">{{ strtoupper(__('app.beneficiary')) }}</th>
                                        <th class="py-1" scope="col">{{ strtoupper(__('app.transfer.beneficiary_type')) }}</th>
                                        <th class="py-1" scope="col">{{ strtoupper(__('app.rib')) }}</th>
                                        <th class="py-1" scope="col">{{ strtoupper(__('app.account_type')) }}</th>
                                        <th class="py-1" scope="col">{{ strtoupper(__('app.bank')) }}</th>
                                        <th class="py-1" scope="col">{{ strtoupper(__('app.add_date')) }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <p>aucune donnée disponible dans ce tableau</p>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                    </div>
                </div>
                <div class="card-footer bg-light">
                    <button type="submit" class="btn bg-light float-left" style="font-size: 10px">{{ strtoupper(__('app.cancel')) }}</button>
                    <button type="submit" class="btn bg-main float-right" style="font-size: 10px">{{ strtoupper(__('app.valid')) }}</button>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
