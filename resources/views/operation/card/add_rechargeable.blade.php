@extends('layouts.app')


@section('title')
    {{ config('app.name') }}
@endsection

@section('content')
    <div class="container-fluid px-md-5">
        <div class="row px-md-5 mx-md-5">
            <div class="col px-md-5">
                <h1 class="h5 text-main pt-4">{{ strtoupper(__('app.card.add_rechargeable_title')) }}</h1>
                <p class="text-muted small">{{ __('app.card.add_rechargeable_subtitle') }}</p>

                <div class="card bg-light mt-5 mb-3">
                    <div class="card-header text-muted small py-1">{{ strtoupper(__('app.card.add_rechargeable_title')) }}</div>
                    <div class="card-body">
                        <form class="form-horizontal" action="" autocomplete="off">
                            @csrf
                            
                            <div class="form-group form-row">
                                <label class="control-label col-md-3 text-right" for="type">{{__('app.card.rechargeable_holder_name')}}:</label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="">
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label class="control-label col-md-3 text-right" for="type">{{__('app.card.rechargeable_holder_firstname')}}:</label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="">
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label class="control-label col-md-3 text-right" for="type">{{__('app.card.rechargeable_number_card')}}:</label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-light">
                        <!-- <button type="submit" class="btn bg-light float-left" style="font-size: 10px">{{ strtoupper(__('app.cancel')) }}</button> -->
                        <button class="btn bg-light float-left" style="font-size: 10px"><i class="far fa-credit-card text-main"></i> {{ strtoupper(__('app.card.rechargeable_cards_list')) }}</button>

                        <button type="submit" class="btn bg-main float-right" style="font-size: 10px">{{ strtoupper(__('app.valid')) }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection