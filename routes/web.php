<?php

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
    return view('main');
});

Auth::routes();

Route::get('/currencies', 'Currency\CurrencyController@index')->name('currencies');
Route::put('/api/currencies/{id}/rate','Currency\CurrencyController@updateRate')
    ->name('api_currency_rate_update');