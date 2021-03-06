@extends('layouts.app')


@section('title')
    {{ __('app.setting.profile_title') }}
@endsection

@section('content')
    <div class="container-fluid px-md-5">
        <div class="row px-md-5 mx-md-5">
            <div class="col px-md-5">
                <h1 class="h5 text-main pt-4">{{ strtoupper(__('app.setting.profile_title')) }}</h1>

				{{ Html::setting_menu() }}
                
                <div class="card bg-light mt-4 mb-3">
                    <div class="card-header text-muted small py-1">{{ strtoupper(__('app.setting.notifications_list')) }}</div>
                    <div class="card-body">
                        <div class="row float-right flex-nowrap">
                            <label class="col text-right text-muted small" for="type">{{__('app.setting.disabled_all')}}</label>
                            <div class="col px-0">
                                <input type="checkbox" id="bank-statement" name="bank-statement" class="checkbox checkbox-toggle" />
                                <label for="bank-statement" class="switch switch-main"></label>
                            </div>
                        </div>
                        <table class="table">
                            <thead class="thead-light" style="font-size: 10px">
                                <tr>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.setting.events')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.setting.entitled')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.setting.type')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.setting.canal')) }}</th>
                                <th class="py-1" scope="col">{{ strtoupper(__('app.status')) }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="small text-muted">
                                    <td>Disponibilité d'une ...</td>
                                    <td>Paiement de facture</td>
                                    <td>Push mobile</td>
                                    <td>10h</td>
                                    <td>
                                        <div class="text-center">
                                            <input type="checkbox" id="item-statement-#" name="item-statement-#" class="checkbox checkbox-toggle" />
                                            <label for="item-statement-#" class="switch switch-main"></label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer bg-light">
                        <button type="submit" class="btn bg-light float-left" style="font-size: 10px">{{ strtoupper(__('app.cancel')) }}</button>
                        <button type="submit" class="btn bg-main float-right" style="font-size: 10px"><i class="fas fa-save"></i> {{ strtoupper(__('app.save')) }}</button>
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