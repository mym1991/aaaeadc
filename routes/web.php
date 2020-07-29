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
Route::get('/','homeController@index');
/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/corporate', function () {
    return view('corporate');
});
Route::get('/student', function () {
    return view('student');
});
Route::get('/individual', function () {
    return view('individual');
});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
