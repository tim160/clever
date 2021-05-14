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
    return view('home/index');
});

Route::post('/sendFormToEmail', 'HomeController@sendformToEmail');

Route::get('/getAjaXCall', 'TestController@getAjaXCall');
Route::post('/postAjaxCall', 'HomeController@postAjaxCall');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});