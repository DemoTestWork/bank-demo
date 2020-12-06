@extends('layouts.app')


@section('title')
    {{ __('app.cash_press.monitoring_title') }}
@endsection

@section('content')
    <div class="container-fluid px-md-5">
        <div class="row px-md-5 mx-md-5">
            <div class="col px-md-5">
                <h1 class="h5 text-main text-uppercase pt-4">{{ __('app.setting.profile_title') }}</h1>

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
                                    <td>{{ $user->civility }} {{ $user->firstname }} <span class="text-uppercase">{{ $user->name }}</span></td>
                                    <td>{{ $account->account_type->name }}</td>
                                    <td>CONSULTATION ET TRANSACTION</td>
                                    <td></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer bg-light">
                        <button type="submit" class="btn bg-light float-left text-uppercase" style="font-size: 10px">{{ __('app.back') }}</button>
                        <button type="submit" class="btn bg-main float-right text-uppercase" style="font-size: 10px"><i class="fas fa-plus"></i> {{ __('app.setting.add_account') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(function(){
        $('.setting-link ').click(function(e){
            e.preventDefault();
            window.location.href = $(this).data('url');
        })
    });
</script>
@endsection