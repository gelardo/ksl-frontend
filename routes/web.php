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
    return view('home.index');
});
Route::get('/news', function () {
    return view('home.news');
});
Route::get('/services', function () {
    return view('home.services');
});
Route::get('/whoweare', function () {
    return view('home.whoweare');
});
Route::get('/connectus', function () {
    return view('home.connectus');
});
Route::get('/getstarted', function () {
    return view('home.getstarted');
});
