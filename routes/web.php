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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'App\Http\Controllers\HomeController@index')->name('index');
    Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
    Route::get('/create', 'App\Http\Controllers\HomeController@create')->name('create');
    Route::post('/store', 'App\Http\Controllers\HomeController@store')->name('store');
    Route::get('/edit/{id}', 'App\Http\Controllers\HomeController@edit')->name('edit');
    Route::post('/update/{id}', 'App\Http\Controllers\HomeController@update')->name('update');
    Route::post('/delete/{id}', 'App\Http\Controllers\HomeController@delete')->name('delete');
});