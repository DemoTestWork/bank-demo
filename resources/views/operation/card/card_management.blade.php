@extends('layouts.app')


@section('title')
    {{ __('app.card.management_title') }}
@endsection

@section('content')
    <div class="container-fluid px-md-5">
        <div class="row px-md-5 mx-md-5">
            <div class="col px-md-5">
                <h1 class="h5 text-main pt-4">{{ strtoupper(__('app.card.management_title')) }}</h1>
                <p class="text-muted small">{{ __('app.card.management_subtitle') }}</p>

                <div class="card bg-light mt-5 mb-3">
                    <div class="card-header text-muted small py-1">{{ strtoupper(__('app.search')) }}</div>
                    <div class="card-body">
                        <form class="form-horizontal" action="" autocomplete="off">
                            @csrf
                            <div class="form-group form-row my-3">
                                <div class="col-md-4">
                                    <label class="control-label text-right" for="type">{{__('app.card.card_beneficiary')}}:</label>
                                    <input type="text" class="form-control form-control-sm" id="beneficiary" name="beneficiary" placeholder="" autocomplete="off">
                                </div>
                                <div class="col-md-4">
                                    <label class="control-label text-right" for="type">{{__('app.card.number')}}:</label>
                                    <input type="text" class="form-control form-control-sm" id="card_number" name="card_number" placeholder="" autocomplete="off">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card bg-light mt-4 mb-3">
                    <div class="card-header text-muted small py-1">{{ strtoupper(__('app.card.rechargeable_cards_list')) }}</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="thead-light" style="font-size: 10px">
                                <tr>
                                <th class="" scope="col">
                                    
                                </th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.card.number')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.card.cardholder')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.add_date_hour')) }}</th>
                                <th class="py-1" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <tr class="small text-muted">
                                    <td class="px-1"></td>
                                    <td class="px-1">Dora Julie</td>
                                    <td class="px-1">Personne physique</td>
                                    <td class="px-1">FR7630001007941234567890185</td>
                                    <td class="px-1">Compte Chèque</td>
                                </tr> -->
                                <tr>
                                    <td colspan="5" class="text-center small bg-white text-muted">{{ __('app.table.empty_data') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer bg-light">
                        <button style="font-size: 10px" type="submit" class="btn bg-light float-left"><i class="fas fa-trash-alt"></i> {{ strtoupper(__('app.remove')) }}</button>
                        <button style="font-size: 10px" type="submit" class="btn bg-main float-right"><i class="fas fa-plus text-light"></i> {{ strtoupper(__('app.card.add_rechargeable')) }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection