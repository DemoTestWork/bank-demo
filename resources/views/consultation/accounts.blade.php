@extends('layouts.app')


@section('title')
    {{ __('app.my_account.title') }}
@endsection

@section('content')
    <div class="container-fluid px-md-5">
        <div class="row px-md-5 mx-md-5">
            <div class="col px-md-5">
                <h1 class="h6 text-main text-uppercase pt-4">{{ __('app.home.my_accounts') }}</h1>

                <div class="row mt-5">
                    <div class="col">
                        <table class="table">
                            <thead class="thead-light" style="font-size: 10px">
                                <tr>
                                <th class="py-1" scope="col">{{ __('app.sender_account') }}</th>
                                <th class="py-1" scope="col">{{ __('app.beneficiary') }}</th>
                                <th class="py-1" scope="col">{{ __('app.beneficiary') }}</th>
                                <th class="py-1" scope="col">{{ __('app.beneficiary') }}</th>
                                <th class="py-1" scope="col">{{ __('app.beneficiary') }}</th>
                                <th class="py-1" scope="col">{{ __('app.beneficiary') }}</th>
                                <th class="py-1" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $user->accounts as $account )
                                <tr class="small text-muted">
                                    <td class="text-uppercase">{{ $user->civility }} {{ $user->name }} {{ $user->firstname }}</td>
                                    <td>{{ $account->account_type->name }}</td>
                                    <td>{{ $account->number }}</td>
                                    <td class="float-right">{{ $account->balance }} {{ $account->currency->short_name }} <img class="img-fluid" src="{{ asset('images/flags/'.$account->currency->flag) }}" alt="{{ $account->currency->flag }}" width="16" > </td>
                                    <td>{{ $account->rib }}</td>
                                    <td>{{ $account->agency }}</td>
                                    <td class="dropdown">
                                        <a class="dropdown-toggle" id="dropdownMenuButton{{ $account->number }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-cog"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $account->number }}">
                                            <a class="dropdown-item small" href="#"><i class="fas fa-print text-main"></i> {{ __('app.home.edit_rib') }}</a>
                                            <a class="dropdown-item small" href="#"><i class="far fa-arrow-alt-circle-right text-main"></i> {{ __('app.home.make_transfer') }}</a>
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

                <div class="row text-center">
                    <div class="col">
                        <img class="img-fluid" src="https://dummyimage.com/580x180/e8e8e8/fff&text=Dummy+Image" alt="Dummy Image">
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection