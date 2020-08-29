<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['web']], function () {
    /*
    |--------------------------------------------------------------------------
    | Particular Auth Pages
    |--------------------------------------------------------------------------
    |*/
    Route::get('/particular', 'ParticularController@loginForm')->defaults('_config', ['view' => 'particular.login'])->name('particular.session.login.get');
    Route::post('/particular', 'ParticularController@loginPost')->defaults('_config', ['redirect' => 'particular.home.index'])->name('particular.session.login.post');

    Route::get('/company', 'CompanyController@loginForm')->defaults('_config', ['view' => 'company.login'])->name('company.session.login.get');
    Route::post('/company', 'CompanyController@loginPost')->defaults('_config', ['redirect' => 'company.home.index'])->name('company.session.login.post');

    /*
    |--------------------------------------------------------------------------
    | END Particular Auth Pages
    |--------------------------------------------------------------------------
    |*/

    
    /*
    |--------------------------------------------------------------------------
    | Particular protected pages "auth.particular" middleware
    |--------------------------------------------------------------------------
    |*/
    Route::group(['middleware' => [/* 'auth.particular' */ ]], function () {
        Route::prefix('particular')->group(function () {
            Route::post('/logout', 'ParticularController@destroy')->defaults('_config', [
                'redirect' => 'particular.session.login.get'
            ])->name('particular.session.destroy');

            Route::get('/home', 'ParticularController@home')->defaults('_config', ['view' => 'particular.home'])->name('particular.home.index');

            /*
            |--------------------------------------------------------------------------
            | consultation protected pages "auth.particular" middleware
            |--------------------------------------------------------------------------
            |*/
            Route::get('/consultation/accounts', 'ConsultationController@accounts')->defaults('_config', ['view' => 'consultation.accounts'])->name('consultation.accounts');
            Route::get('/consultation/cards', 'ConsultationController@cards')->defaults('_config', ['view' => 'consultation.cards'])->name('consultation.cards');
            Route::get('/consultation/title_account', 'ConsultationController@titleAccount')->defaults('_config', ['view' => 'consultation.title_account'])->name('consultation.titleaccount');
            Route::get('/consultation/unpaid', 'ConsultationController@unpaid')->defaults('_config', ['view' => 'consultation.unpaid'])->name('consultation.unpaid');

            /*
            |--------------------------------------------------------------------------
            | Operation Group
            |--------------------------------------------------------------------------
            |*/
            Route::get('/operation/jibi/subscription', 'OperationController@jibiSubscription')->defaults('_config', ['view' => 'operation.jibi.subscription'])->name('operation.jibi.subscription');
            Route::get('/operation/jibi/recharge', 'OperationController@jibiRecharge')->defaults('_config', ['view' => 'operation.jibi.recharge'])->name('operation.jibi.recharge');
            Route::get('/operation/jibi/accounts', 'OperationController@jibiAccounts')->defaults('_config', ['view' => 'operation.jibi.accounts'])->name('operation.jibi.accounts');
            Route::get('/operation/jibi/monitoring', 'OperationController@jibiMonitoring')->defaults('_config', ['view' => 'operation.jibi.monitoring'])->name('operation.jibi.monitoring');

            Route::get('/operation/transfer/add-transfer', 'OperationController@addTransfer')->defaults('_config', ['view' => 'operation.transfer.add'])->name('operation.transfer.add');
            Route::get('/operation/transfer/monitoring', 'OperationController@transferMonitoring')->defaults('_config', ['view' => 'operation.transfer.monitoring'])->name('operation.transfer.monitoring');
            Route::get('/operation/transfer/permanent', 'OperationController@transferPermanent')->defaults('_config', ['view' => 'operation.transfer.permanent'])->name('operation.transfer.permanent');
            Route::get('/operation/transfer/beneficiary-management', 'OperationController@beneficiaryManagement')->defaults('_config', ['view' => 'operation.transfer.beneficiary_management'])->name('operation.transfer.beneficiary_management');

            Route::get('/operation/card/make-recharge', 'OperationController@makeRecharge')->defaults('_config', ['view' => 'operation.card.make_recharge'])->name('operation.card.make_recharge');
            Route::get('/operation/card/monitoring', 'OperationController@cardMonitoring')->defaults('_config', ['view' => 'operation.card.monitoring'])->name('operation.card.monitoring');
            Route::get('/operation/card/card-management', 'OperationController@cardManagement')->defaults('_config', ['view' => 'operation.card.card_management'])->name('operation.card.card_management');
            Route::get('/operation/card/add-rechargeable', 'OperationController@addRechargeable')->defaults('_config', ['view' => 'operation.card.add_rechargeable'])->name('operation.card.add_rechargeable');

            Route::get('/operation/cash-express/add-provision', 'OperationController@addProvision')->defaults('_config', ['view' => 'operation.cash_express.add_provision'])->name('operation.cash_express.add_provision');
            Route::get('/operation/cash-express/monitoring', 'OperationController@cashExpressMonitoring')->defaults('_config', ['view' => 'operation.cash_express.monitoring'])->name('operation.cash_express.monitoring');
           
            /*
            |--------------------------------------------------------------------------
            | Setting Group
            |--------------------------------------------------------------------------
            |*/
            Route::get('/setting/profile', 'SettingController@profile')->defaults('_config', ['view' => 'setting.profile'])->name('setting.profile');
            Route::get('/setting/accounts', 'SettingController@accounts')->defaults('_config', ['view' => 'setting.accounts'])->name('setting.accounts');
            Route::get('/setting/electronic-report', 'SettingController@electronicReport')->defaults('_config', ['view' => 'setting.electronic_report'])->name('setting.electronic_report');
            Route::get('/setting/notifications', 'SettingController@notifications')->defaults('_config', ['view' => 'setting.notifications'])->name('setting.notifications');
            Route::get('/setting/password', 'SettingController@password')->defaults('_config', ['view' => 'setting.password'])->name('setting.password');


        });
    });
});
