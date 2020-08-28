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

    Route::get('/example', function () {
        return view('example');
    });

Route::get('/sample', function () {
    return view('sample');
});

Route::get('/todo', 'TodoController@index');

Route::get('sales', 'SaleController@index');
Route::get('ajax/sales', 'Ajax\SaleController@index');
Route::get('ajax/sales/years', 'Ajax\SaleController@years');

Route::get('radar', 'ChartController@index');
Route::get('ajax/sales', 'Ajax\ChartAjaxController@index');
Route::get('ajax/sales/years', 'Ajax\ChartAjaxController@years');
Route::get('ajax/sales/companies', 'Ajax\ChartAjaxController@companies');