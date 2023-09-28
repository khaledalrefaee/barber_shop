<?php

use App\Http\Controllers\Api\Auth\RegiterController;
use App\Http\Controllers\Api\User\CategoryController;


use App\Http\Controllers\Api\User\Salon\SalonController;
use App\Http\Controllers\Api\User\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });




    /// Auth User
    Route::get('All/Addres',[RegiterController::class,'getallAddres']);
    Route::post('/register/user',[RegiterController::class,'register']);
    Route::post('/login/user',[RegiterController::class,'login']);

    /// End Auth User

    /// Categoure Category
    Route::get('All/Cat',[CategoryController::class,'index']);
    Route::get('show/salon/{id}',[CategoryController::class,'show_salon']);

    Route::get('All/Salon',[SalonController::class,'index']);
    Route::get('location/Salon/{id}',[SalonController::class,'location_By_salon']);


Route::middleware(['jwt.auth'])->group(function () {

    Route::get('/profile',[UserController::class,'profile']);
    Route::get('/post/{id}',[PostController::class,'show']);
    Route::post('/posts',[PostController::class,'store']);
    Route::post('/post/{id}',[PostController::class,'update']);
    Route::post('/posts/{id}',[PostController::class,'destroy']);

});


Route::post('/logout/user',[RegiterController::class,'logout']);

