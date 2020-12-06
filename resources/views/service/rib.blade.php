@extends('layouts.app')


@section('title')
    {{ config('app.name') }}
@endsection

@section('content')
    <div class="container-fluid px-md-5">
        <div class="row px-md-5 mx-md-5">
            <div class="col px-md-5">
                <h1 class="h5 text-main pt-4 text-uppercase">{{ __('app.service.rib_edition_title') }}</h1>
                <p class="text-muted small">{{ __('app.service.rib_edition_subtitle') }}</p>

                <div class="card bg-light mt-5 mb-3">
                    <div class="card-header text-muted small py-1 text-uppercase">{{ __('app.service.rib_edition_title') }}</div>
                    <div class="card-body mb-3">
                        <form id="add_beneficiary" class="form-horizontal" action="" autocomplete="off">
                            @csrf
                            <p class="mt-3">{{__('app.service.description')}}</p>
                            <div class="form-group form-row">
                                <label class="control-label col-md-3 text-right" for="type">{{__('app.account')}} </label>
                                <div class="col">
                                    <select id="type" name="type" class="form-control form-control-sm">
                                        @foreach ( $user->accounts as $account )
                                            <option value="{{ $account->number }}">{{ $account->number }} | {{ $user->civility }} {{ $user->name }} {{ $user->firstname }} | {{ $account->account_type->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div id="rib" class="bg-white p-3" style="border-style: dotted; border-color: #e0e0e0;">
                                <table style="width:100%">
                                    <tbody>
                                        <tr>
                                            <td style="text-align:center">
                                                <!-- <img style="margin-bottom:15px" src="https://attijarinet.attijariwafa.com/particulier/resources/img/logo/logo-new.png?v=29121608"> -->
                                                <img style="margin-bottom:15px" src="https://dummyimage.com/153x45/e8e8e8/fff&text=Logo+Bank">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="30">
                                                <div style="background:#e5e5e5;margin:10px 0 10px 0;padding:3px 8px;font-weight:normal; text-align:center; border:1px solid #EEEEEE;border-width:1px 0 1px 0;">
                                                    Relevé d'Identité Bancaire
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center;">
                                                <b><span id="intituleCompte">Mme Soukaina Ab</span></b>
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td>
                                                <b><span id="agenceDomiciliation">CASA ENNASSIM</span></b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b><span id="adresseAgenceDomiciliation">LOT.ENNASSIM QUARTIER LISSASSFA</span></b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table class="table rib">
                                                    <tbody>
                                                    <tr class="thead-light"> 
                                                        <th>Code banque</th>
                                                        <th>Code ville</th>
                                                        <th>N° compte</th>
                                                        <th>Clé RIB</th>
                                                    </tr>
                                                    <tr>
                                                        <td><span id="codeBanque">007</span></td>
                                                        <td><span id="codeAgence">780</span></td>
                                                        <td><span id="numeroCompte">0001253000000000</span></td>
                                                        <td><span id="cleRib">00</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" style="border-top:1px solid #ddd;" class="text-center">
                                                            <b>CODE SWIFT:</b> BBBBBBBB
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-light d-flex justify-content-end">
                        <button type="submit" class="btn bg-light text-uppercase" style="font-size: 10px"><i class="fas fa-print"></i> {{ __('app.print') }}</button>
                        <button id="submit_form" type="submit" class="btn bg-light text-uppercase" style="font-size: 10px"><i class="fas fa-save"></i> {{ __('app.save_as_pdf') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script type="text/javascript">
    // $(function(){
        
    // });
</script>
@endsection