<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\Salon\SalonController;
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



Route::group(['prefix' => 'admin' ], function () {
    Route::get('login', [AuthController::class,'login'])->name('admin.login');
    Route::post('login', [AuthController::class,'postLogin'])->name('admin.post.login');
    Route::get('logout', [AuthController::class,'logout'])->name('admin.logout');
});



Route::group(['middleware' => 'auth:admin', 'prefix' => 'admin'], function () {


    Route::get('/', [HomeController::class,'index'])->name('admin.dashboard');  // the first page admin visits if authenticated



    ################################## categories routes ######################################
    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', [CategoryController::class,'index'])->name('All.Category');
        Route::post('store', [CategoryController::class,'store'])->name('store.category');
        Route::put('/categories/{id}', [CategoryController::class,'update'])->name('update.category');

        Route::get('delete/{id}', [CategoryController::class,'delete'])->name('delete.category');
    });


    ################################## end categories    #######################################

    ################################## salon routes ######################################
    Route::group(['prefix' => 'Salon'], function () {
        Route::get('/', [SalonController::class,'index'])->name('All.Salon');
        Route::post('store', [SalonController::class,'store'])->name('store.Salon');
        Route::put('/categories/{id}', [CategoryController::class,'update'])->name('update.Salon');

        Route::get('delete/{id}', [CategoryController::class,'delete'])->name('delete.Salon');
    });


});
