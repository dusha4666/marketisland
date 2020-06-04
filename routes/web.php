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
Route::get('/', 'ApiController@index');
Route::get('/zima', 'ApiController@zima');
Route::get('/bryuki', 'ApiController@bryuki');
Route::get('/footbolki', 'ApiController@footbolki');
Route::get('/krossovki', 'ApiController@krossovki');
Route::get('/sumki', 'ApiController@sumki');
Route::get('/remni', 'ApiController@remni');