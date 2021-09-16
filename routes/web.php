<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlendxController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
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

Route::get('/', [HomeController::class,'indexnew']);
//Route::get('/news', function () {
//    return view('home.news');
//});

Route::get('/news',[NewsController::class,'news']);
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

Route::group(['prefix'=>'admin' ], function(){
    Route::get('/login',[AdminController::class,'adminLogin'])->name('admin.login');
    Route::post('/login',[AdminController::class,'adminLoginProcess']);
    Route::group(['middleware'=>'admin'],function() {
        Route ::get('/dashboard', [AdminController::class, 'dashboard']) -> name('admin.dashboard');
        Route ::get('/logout', [AdminController::class, 'logout']) -> name('admin.logout');
        Route::get('/{route}/index/{id?}', [BlendxController::class, 'index']);
        Route::get('/{route}/create/{id?}', [BlendxController::class, 'create']);
        Route::get('/{route}/show/{id?}', [BlendxController::class, 'show']);
        Route::get('/{route}/edit/{id?}', [BlendxController::class, 'edit']);
        Route::delete('/{route}/delete/{id?}/', [BlendxController::class, 'delete']);
        Route::post('/{route}/store', [BlendxController::class, 'store']);
        Route::put('/{route}/update/{id?}', [BlendxController::class, 'update']);

    });
});
