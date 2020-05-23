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

Route::get('/zima', function () {
    return view('zima');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/bryuki', function () {
    return view('bryuki');
});

Route::get('/footbolki', function () {
    return view('footbolki');
});

Route::get('/krossovki', function () {
    return view('krossovki');
});

Route::get('/remni', function () {
    return view('remni');
});

Route::get('/sumki', function () {
    return view('sumki');
});
