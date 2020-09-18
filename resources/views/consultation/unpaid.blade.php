@extends('layouts.app')


@section('title')
{{ config('app.name') }}
@endsection

@section('content')
<div class="container-fluid px-5">
    <div class="row px-5 mx-5">
        <div class="col px-5">
            <h1 class="h5 text-main pt-4 text-uppercase">{{ __('test.unpaid') }}</h1>
            <p>{{ (__('test.unpaid_subtitle')) }}</p>

            <div class="card text-center">
                <div class="card-header">
                    <nav class=" rounded">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-link active" id="nav-unpaid-credit-tab" data-toggle="tab" href="#nav-unpaid-credit" role="tab" aria-controls="nav-unpaid-credit" aria-selected="true">{{ __('test.unpaid_credit') }}</a>
                            <a class="nav-link" id="nav-unpaid-check-issued-tab" data-toggle="tab" href="#nav-unpaid-check-issued" role="tab" aria-controls="nav-unpaid-check-issued" aria-selected="true">{{ __('test.unpaid_check_issued') }}</a>
                            <a class="nav-link" id="nav-unpaid-check-remitted-tab" data-toggle="tab" href="#nav-unpaid-check-remitted" role="tab" aria-controls="nav-unpaid-check-remitted" aria-selected="true">{{ __('test.unpaid_check_remitted') }}</a>
                            <a class="nav-link" id="nav-unpaid-debit-tab" data-toggle="tab" href="#nav-unpaid-debit" role="tab" aria-controls="nav-unpaid-debit" aria-selected="true">{{ __('test.unpaid_debit') }}</a>
                        </div>
                    </nav>
                    <div id="nav-tabContent" class="card-body tab-content">
                        <div class="tab-pane fade show active" id="nav-unpaid-credit" role="tabpanel" aria-labelledby="nav-unpaid-credit-tab">
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="py-1 text-uppercase" scope="col">{{ __('test.account_number') }}</th>
                                        <th class="py-1 text-uppercase" scope="col">{{ __('test.contract_number') }}</th>
                                        <th class="py-1 text-uppercase" scope="col">{{ __('test.type_of_credit') }}</th>
                                        <th class="py-1 text-uppercase" scope="col">{{ __('test.unlocked_capital') }}</th>
                                        <th class="py-1 text-uppercase" scope="col">{{ __('test.maturity_amount') }}</th>
                                        <th class="py-1 text-uppercase" scope="col">{{ __('test.date_of_unpaid') }}</th>
                                        <th class="py-1 text-uppercase" scope="col">{{ __('test.unpaid_amount') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            <span>aucun données disponible</span>
                        </div>

                        <div class="tab-pane fade show" id="nav-unpaid-check-issued" role="tabpanel" aria-labelledby="nav-unpaid-check-issued-tab">
                            <div class="text-left py-2"> consulter la liste des impayés chèque / LCN emis des 30 derniers jours.</div>
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="py-1 text-uppercase" scope="col">{{ __('test.account_number') }}</th>
                                        <th class="py-1 text-uppercase" scope="col">{{ __('test.type') }}</th>
                                        <th class="py-1 text-uppercase" scope="col">{{ __('test.date_of_unpaid') }}</th>
                                        <th class="py-1 text-uppercase" scope="col">{{ __('test.amount') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            <span>aucun données disponible</span>
                        </div>

                        <div class="tab-pane fade show" id="nav-unpaid-check-remitted" role="tabpanel" aria-labelledby="nav-unpaid-check-remitted-tab">
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="py-1 text-uppercase" scope="col">{{ __('test.account_number') }}</th>
                                        <th class="py-1 text-uppercase" scope="col">{{ __('test.type') }}</th>
                                        <th class="py-1 text-uppercase" scope="col">{{ __('test.date_of_unpaid') }}</th>
                                        <th class="py-1 text-uppercase" scope="col">{{ __('test.date_of_discount') }}</th>
                                        <th class="py-1 text-uppercase" scope="col">{{ __('test.type_of_discount') }}</th>
                                        <th class="py-1 text-uppercase" scope="col">{{ __('test.discount_number') }}</th>
                                        <th class="py-1 text-uppercase" scope="col">{{ __('test.unpaid_amount') }}</th>
                                        <th class="py-1 text-uppercase" scope="col">{{ __('test.title_name') }}</th>
                                        <th class="py-1 text-uppercase" scope="col">{{ __('test.unpaid_reason') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            <span>aucun données disponible</span>
                        </div>
                        <div class="tab-pane fade show" id="nav-unpaid-debit" role="tabpanel" aria-labelledby="nav-unpaid-debit-tab">
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="py-1 text-uppercase" scope="col">{{ __('test.account_number') }}</th>
                                        <th class="py-1 text-uppercase" scope="col">{{ __('test.contract_number') }}</th>
                                        <th class="py-1 text-uppercase" scope="col">{{ __('test.maturity_amount') }}</th>
                                        <th class="py-1 text-uppercase" scope="col">{{ __('test.unpaid_date') }}</th>
                                        <th class="py-1 text-uppercase" scope="col">{{ __('test.maturity_amount') }}</th>
                                        <th class="py-1 text-uppercase" scope="col">{{ __('test.discount_number') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            <span>aucun données disponible</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>

    </div>
</div>
</div>
@endsection
