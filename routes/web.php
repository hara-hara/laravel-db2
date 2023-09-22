<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bunbougus', 'App\Http\Controllers\BunbouguController@index')->name('bunbougus.index');

Route::get('/bunbougus/create', 'App\Http\Controllers\BunbouguController@create')->name('bunbougus.create');
Route::post('/bunbougus/store/', 'App\Http\Controllers\BunbouguController@store')->name('bunbougus.store');