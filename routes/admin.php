<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\HomeController;
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
    Route::group(['prefix' => 'main_categories'], function () {
        Route::get('/', [MainCategoriesController::class,'index'])->name('admin.maincategories');
        Route::get('create', [MainCategoriesController::class,'create'])->name('admin.maincategories.create');
        Route::post('store', [MainCategoriesController::class,'store'])->name('admin.maincategories.store');
        Route::get('edit/{id}',[MainCategoriesController::class,'edit'])->name('admin.maincategories.edit');
        Route::post('update/{id}', [MainCategoriesController::class,'update'])->name('admin.maincategories.update');
        Route::get('delete/{id}', [MainCategoriesController::class,'destroy'])->name('admin.maincategories.delete');
    });

    ################################## end categories    #######################################


    
});