@extends('layouts.app')


@section('title')
    {{ config('app.name') }}
@endsection

@section('content')
    <div class="container-fluid px-5">
        <div class="row px-5 mx-5">
            <div class="col px-5">
                <h1 class="h5 text-main pt-4 text-uppercase">{{ strtoupper(__('app.transfer.add_beneficiary_title')) }}</h1>
                <p class="text-muted small">{{ __('app.transfer.add_beneficiary_subtitle') }}</p>

                <div class="card bg-light mt-5 mb-3">
                    <div class="card-header text-muted small py-1 text-uppercase">{!! __('app.transfer.add_beneficiary_formtitle') !!}</div>
                    <div class="card-body">
                        <form class="form-horizontal" action="" autocomplete="off">
                            @csrf
                            <div class="form-group form-row">
                                <label class="control-label col-md-3 text-right" for="type">{{__('app.transfer.beneficiary_type')}} <abbr class="text-danger">*</abbr></label>
                                <div class="col">
                                    <select id="inputState" class="form-control form-control-sm">
                                        <option selected>{{ __('Personne Physique') }}</option>
                                        <option >{{ __('Personne Morale') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label class="control-label col-md-3 text-right" for="type">{{__('app.setting.name')}} <abbr class="text-danger">*</abbr></label>
                                <div class="col">
                                    <input type="text" class="form-control form-control-sm" id="pattern" name="pattern" placeholder="">
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label class="control-label col-md-3 text-right" for="type">{{__('app.setting.firstname')}} <abbr class="text-danger">*</abbr></label>
                                <div class="col">
                                    <input type="text" class="form-control form-control-sm" id="pattern" name="pattern" placeholder="">
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label class="control-label col-md-3 text-right" for="type">{{__('app.rib')}} <abbr class="text-danger">*</abbr></label>
                                <div class="col-md-1">
                                    <input type="text" class="form-control form-control-sm" id="pattern" name="pattern" placeholder="">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control form-control-sm" id="pattern" name="pattern" placeholder="">
                                </div>
                            </div>
                            <small><abbr class="text-danger">*</abbr> : {{__('app.form.required_field')}}</small>
                            <hr>
                            <div class="text-muted d-flex">
                                <i class="fas fa-exclamation-circle mr-3 mt-1"></i>
                                <p class="small inline-block">{{__('app.transfer.add_beneficiary_info')}}</p>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-light">
                        <button type="submit" class="btn bg-light float-left" style="font-size: 10px" onclick="window.history.back()"><i class="fas fa-undo"></i> {{ strtoupper(__('app.back')) }}</button>
                        <button type="submit" class="btn bg-light float-right" style="font-size: 10px" disabled><i class="fas fa-check"></i> {{ strtoupper(__('app.valid')) }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection