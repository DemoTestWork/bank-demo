@extends('layouts.app')


@section('title')
    {{ __('app.home.title') }}
@endsection

@section('content')
    <div class="container-fluid px-md-5">
        <div class="row px-md-5 mx-md-5">
            <div class="col px-md-5">
                <h1 class="h6 text-main pt-4">{{ strtoupper(__('app.home.my_accounts')) }}</h1>
                <hr>

                <div class="row">
                    <div class="col col-md-4">
                        <table class="table">
                            <tbody>
                                @foreach ( $user->accounts as $account )
                                <tr class="small text-muted">
                                    <td>
                                        <span class="d-block text-info">{{ $account->number }}</span>
                                        <span class="text-muted text-uppercase text-nowrap d-block small">{{ $user->civility }} {{ $user->name }} {{ $user->firstname }}</span>
                                        <span class="text-muted d-block small">{{ $account->account_type->name }}</span>
                                    </td>
                                    <td class="@if($account->balance > 0) text-success @else text-warning @endif">{{ $account->balance }}</td>
                                    <td>{{ $account->currency->short_name }}</td>
                                    <td class="dropdown">
                                        <a class="dropdown-toggle" id="dropdownMenuButton{{ $account->number }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-cog"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $account->number }}">
                                            <a class="dropdown-item small" href="{{ route('service.rib') }}"><i class="fas fa-print text-main"></i> {{ __('app.home.edit_rib') }}</a>
                                            <a class="dropdown-item small" href="{{ route('operation.transfer.add') }}"><i class="far fa-arrow-alt-circle-right text-main"></i> {{ __('app.home.make_transfer') }}</a>
                                            <a class="dropdown-item small" href="#"><i class="far fa-clock text-main"></i> {{ __('app.home.real_time_operations') }}</a>
                                            <a class="dropdown-item small" href="#"><i class="fas fa-exchange-alt text-main"></i> {{ __('app.home.accounting_transactions') }}</a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

        <!-- Divider -->
        <div class="bottom-shad mb-5"></div>

        <div class="row px-5 mx-5">
            <div class="col px-5">

                <div class="row">
                    <div class="col col-md-7">
                        <img class="img-fluid" src="https://dummyimage.com/580x240/e8e8e8/fff&text=Dummy+Image" alt="Dummy Image">
                    </div>
                    <div class="col col-md-5">
                        <h2 class="h6 text-main text-uppercase small pt-4 pb-1 mb-3 border-bottom">{{ __('app.home.notifications') }}</h2>
                        <div class="accordion" id="accordionNotif">
                            <div class="card">
                                <div class="card-header py-1" id="collapse-unpaid">
                                    <a href="#" class="text-decoration-none text-muted" data-toggle="collapse" data-target="#collapse-unp" aria-expanded="true" aria-controls="collapse-unp">
                                    {{ __('app.home.unpaid') }} <span class="text-main">(0)</span>
                                    </a>
                                </div>

                                <div id="collapse-unp" class="collapse show" aria-labelledby="collapse-unpaid" data-parent="#accordionNotif">
                                    <div class="card-body py-2 text-muted">
                                        {{ __('app.home.empty_unpaid') }} 
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header py-1" id="collapse-transfers">
                                    <a href="#" class="text-decoration-none text-muted" data-toggle="collapse" data-target="#collapse-transf" aria-expanded="false" aria-controls="collapse-transf">
                                        {{ __('app.home.transfers') }} <span class="text-main">(0)</span>
                                    </a>
                                </div>
                                <div id="collapse-transf" class="collapse" aria-labelledby="collapse-transfers" data-parent="#accordionNotif">
                                    <div class="card-body py-2 text-muted">
                                        {{ __('app.home.empty_transfer') }}
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