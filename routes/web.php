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
    return view('home/index');
});
Route::post('/sendFormToEmail', 'App\Http\Controllers\HomeController@sendformToEmail');

Route::get('/getAjaXCall', 'App\Http\Controllers\TestController@getAjaXCall');
Route::post('/postAjaxCall', 'App\Http\Controllers\HomeController@postAjaxCall');
