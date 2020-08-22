@extends('layouts.app')


@section('title')
    {{ config('app.name') }}
@endsection

@section('content')
    <div class="container-fluid px-5">
        <div class="row px-5 mx-5">
            <div class="col px-5">
                <h1 class="h5 text-main pt-4">{{ strtoupper(__('app.transfer.management_title')) }}</h1>
                <p class="text-muted small">{{ __('app.transfer.management_subtitle') }}</p>

                <div class="card bg-light mt-5 mb-3">
                    <div class="card-header text-muted small py-1">{{ strtoupper(__('app.search')) }}</div>
                    <div class="card-body">
                        <form class="form-horizontal" action="" autocomplete="off">
                            @csrf
                            <div class="form-group form-row my-3">
                                <div class="col">
                                    <label class="control-label text-right" for="type">{{__('app.transfer.beneficiary')}}:</label>
                                    <input type="text" class="form-control form-control-sm" id="beneficiary" name="beneficiary" placeholder="" autocomplete="off">
                                </div>
                                <div class="col">
                                    <label class="control-label text-right" for="type">{{__('app.transfer.type')}}:</label>
                                    <select id="inputState" class="form-control form-control-sm">
                                        <option>{{ __('app.all') }}</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label class="control-label text-right" for="type">{{__('app.rib')}}:</label>
                                    <input type="text" class="form-control form-control-sm" id="rib" name="rib" placeholder="" autocomplete="off">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card bg-light mt-4 mb-3">
                    <div class="card-header text-muted small py-1">{{ strtoupper(__('app.transfer.beneficiary_list_title')) }}</div>
                    <div class="card-body">
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
                                <tr class="small text-muted">
                                    <td class="px-1"></td>
                                    <td class="px-1">Dora Julie</td>
                                    <td class="px-1">Personne physique</td>
                                    <td class="px-1">FR7630001007941234567890185</td>
                                    <td class="px-1">Compte Chèque</td>
                                    <td class="px-1">M John Doe</td>
                                    <td class="px-1">12.05.2018</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer bg-light">
                        <button style="font-size: 10px" type="submit" class="btn bg-light float-left"><i class="fas fa-trash-alt"></i> {{ strtoupper(__('app.remove')) }}</button>
                        <button style="font-size: 10px" type="submit" class="btn bg-main float-right"><i class="fas fa-plus text-light"></i> {{ strtoupper(__('app.transfer.add_beneficiary')) }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection