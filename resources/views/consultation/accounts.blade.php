@extends('layouts.app')


@section('content')
<div class="container-fluid">
    <h1 class="h2 text-left text-main pt-4 m-2">{{ strtoupper(__('test.my_account')) }}</h1>
</div>

<div class="container">
    <div class="table-responsive-xl">

        <table class="table table-over">
            <thead>
                <th class="py-1" scope="col">{{ strtoupper( __('test.entitled')) }}</th>
                <th class="py-1" scope="col">{{ strtoupper(__('test.type')) }}</th>
                <th class="py-1" scope="col">{{ strtoupper(__('test.account_number')) }}</th>
                <th class="py-1" scope="col">{{ strtoupper(__('test.balance')) }}</th>
                <th class="py-1" scope="col">{{ strtoupper(__('test.rib')) }}</th>
                <th class="py-1" scope="col">{{ strtoupper(__('test.agency')) }}</th>
            </thead>
            <tbody>
                <tr>
                    <td>Cliente name</td>
                    <td>compte chèque</td>
                    <td>000734V469873289</td>
                    <td>1,900,315</td>
                    <td>000734V46987328965</td>
                    <td>CASA SIDI MARROUF</td>
                    <td>
                        <div class="cont">
                            </span><i class="fa fa-cog" aria-hidden="true"></i><span>
                                <br>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Cliente name</td>
                    <td>compte chèque</td>
                    <td>000734V469873289</td>
                    <td>1,900,315</td>
                    <td>000734V46987328965</td>
                    <td>CASA ANFA</td>
                    <td>
                        <div class="cont">
                            </span><i class="fa fa-cog" aria-hidden="true"></i><span>
                                <br>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container">
        <button type="button" class="btn btn-success float-lg-right"><i class="fa fa-plus" aria-hidden="true"></i>{{ __('test.add_account') }}</button>
    </div>
</div>
<div class="container">
</div>
@endsection
