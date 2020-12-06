@extends('layouts.app')


@section('title')
    {{ config('app.name') }}
@endsection

@section('content')
    <div class="container-fluid px-md-5">
        <div class="row px-md-5 mx-md-5">
            <div class="col px-md-5">
                <h1 class="h5 text-main pt-4">{{ strtoupper(__('app.jibi.accounts_title')) }}</h1>

                <div class="row bg-light mt-5 mb-3">
                    <table class="table table-bordered">
                        <thead class="thead-light" style="font-size: 10px">
                            <tr>
                            <th class="py-1" scope="col">{{ strtoupper(__('app.alias')) }}</th>
                            <th class="py-1" scope="col">{{ strtoupper(__('app.phone_number')) }}</th>
                            <th class="py-1" scope="col">{{ strtoupper(__('app.id_contact')) }}</th>
                            <th class="py-1" scope="col">{{ strtoupper(__('app.jibi.usage')) }}</th>
                            <th class="py-1" scope="col">{{ strtoupper(__('app.type')) }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr> -->
                        </tbody>
                    </table>
                    <div class="col">
                        <div class="float-right mb-3">
                            <button class="btn bg-light" style="font-size: 10px">{{ strtoupper(__('app.jibi.make_recharge')) }}</button>
                            <button class="btn bg-main" style="font-size: 10px">{{ strtoupper(__('app.jibi.add_account')) }}</button>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection