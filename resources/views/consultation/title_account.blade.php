@extends('layouts.app')


@section('title')

@endsection

@section('content')
<div class="container-fluid px-md-5">
    <div class="row px-md-5 mx-md-5">
        <div class="col px-md-5">
            <h1 class="h5 text-main pt-4">{{ strtoupper(__('test.my_securities_portfolio')) }}</h1>
            <p class="text-muted small">{{ __('test.View_your_portfolio_of_securities') }}</p>

            <div class="card bg-light mt-5 mb-3">
                <div class="card-header text-muted py-1 text-uppercase">{{ __('test.title_portfolio') }}</div>
                <div class="card-body">
                    <div class="container-fluid  justify-content-end">
                        <div class="row justify-content-lg-around text-uppercase">
                            <div class="col">
                                {{ __('test.title_account_number') }}
                            </div>
                            <div class="col-4">
                                {{ __('test.associated_species_account_number') }}

                            </div>
                            <div class="col">
                                {{ __('test.entitled') }}

                            </div>
                            <div class="col">
                                {{ __('test.valuation') }}

                            </div>
                            <div class="col">
                                {{ __('test.percentage') }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 offset-md-4 ">
                                <div class="col m-4 ">
                                    <p> aucune donnée disponible dans ce tableau</p>
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
