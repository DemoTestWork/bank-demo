@extends('layouts.app')


@section('title')
    {{ __('app.cash_press.monitoring_title') }}
@endsection

@section('content')
    <div class="container-fluid px-5">
        <div class="row px-5 mx-5">
            <div class="col px-5">
                <h1 class="h5 text-main pt-4">{{ strtoupper(__('app.setting.profile_title')) }}</h1>

                {{ Html::setting_menu() }}

                <div class="card bg-light mt-4 mb-3">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="thead-light" style="font-size: 10px">
                                <tr>
                                <th class="py-1 text-uppercase" scope="col">{{ __('app.setting.account_number') }}</th>
                                <th class="py-1 text-uppercase" scope="col">{{ __('app.setting.entitled') }}</th>
                                <th class="py-1 text-uppercase" scope="col">{{ __('app.setting.type') }}</th>
                                <th class="py-1 text-uppercase" scope="col">{{ __('app.setting.canal') }}</th>
                                <th class="py-1 text-uppercase" scope="col">{{ __('app.status') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <tr class="small text-muted">
                                    <td>000111A000111222</td>
                                    <td>M JOHN DOE</td>
                                    <td>COMPTE CHEQUE</td>
                                    <td>CONSULTATION ET TRANSACTION</td>
                                    <td></td>
                                </tr> -->
                                @foreach ( $user->accounts as $account )
                                <tr class="small text-muted">
                                    <td>{{ $account->number }}</td>
                                    <td>{{ $user->firstname }} <span class="text-uppercase">{{ $user->name }}</span></td>
                                    <td>COMPTE CARNET</td>
                                    <td>CONSULTATION ET TRANSACTION</td>
                                    <td></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer bg-light">
                        <button type="submit" class="btn bg-light float-left" style="font-size: 10px">{{ strtoupper(__('app.back')) }}</button>
                        <button type="submit" class="btn bg-main float-right" style="font-size: 10px"><i class="fas fa-plus"></i> {{ strtoupper(__('app.setting.add_account')) }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection