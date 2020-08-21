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
                'redirect' => 'particular.session.create'
            ])->name('particular.session.destroy');

            Route::get('/home', 'ParticularController@home')->defaults('_config', ['view' => 'particular.home'])->name('particular.home.index');
        });
    });
});
