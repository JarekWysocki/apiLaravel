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

Route::get('/home', 'App\Http\Controllers\HomeController@getJSON');
Route::get('/', 'App\Http\Controllers\TableController@getTable');
Route::get('/chart', 'App\Http\Controllers\TableController@getChart');