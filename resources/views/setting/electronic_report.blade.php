@extends('layouts.app')


@section('title')
    {{ __('app.cash_press.monitoring_title') }}
@endsection

@section('content')
<style> 
    h1 { 
        color: green; 
    } 
            
    /* toggle in label designing */
    .toggle { 
        position : relative ; 
        display : inline-block; 
        width : 100px; 
        height : 52px; 
        background-color: red; 
        border-radius: 30px; 
        border: 2px solid gray; 
    } 
            
    /* After slide changes */
    .toggle:after { 
        content: ''; 
        position: absolute; 
        width: 50px; 
        height: 50px; 
        border-radius: 50%; 
        background-color: gray; 
        top: 1px;  
        left: 1px; 
        transition:  all 0.5s; 
    } 
            
    /* Toggle text */
    p { 
        font-family: Arial, Helvetica, sans-serif; 
        font-weight: bold; 
    } 
            
    /* Checkbox cheked effect */
    .checkbox:checked + .toggle::after { 
        left : 49px;  
    } 
            
    /* Checkbox cheked toggle label bg color */
    .checkbox:checked + .toggle { 
        background-color: green; 
    } 
            
    /* Checkbox vanished */
    .checkbox {  
        display : none; 
    } 
</style> 

    <div class="container-fluid px-md-5">
        <div class="row px-md-5 mx-md-5">
            <div class="col px-md-5">
                <h1 class="h5 text-main pt-4">{{ strtoupper(__('app.setting.profile_title')) }}</h1>

				{{ Html::setting_menu() }}

                <div class="card bg-light mt-4 mb-3">
                    <div class="card-body">
                        <form class="form-horizontal" action="" autocomplete="off">
                            @csrf
                            <div class="row">
                                <label class="col-md-4 text-right text-muted small" for="type">{{__('app.setting.bank_statement')}}:</label>
                                <div class="col-md-4 pl-0">
                                    <input type="checkbox" id="bank-statement" name="bank-statement" class="checkbox checkbox-toggle" />
                                    <label for="bank-statement" class="switch"></label>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-4 text-right text-muted small" for="type">{{__('app.setting.electronic_readout')}}:</label>
                                <div class="col-md-4 pl-0">
                                    <input type="checkbox" id="toggle" class="checkbox checkbox-toggle" checked/>
                                    <label for="toggle" class="switch"></label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-light">
                        <button type="submit" class="btn bg-main float-right" style="font-size: 10px">{{ strtoupper(__('app.valid')) }}</button>
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