<?php

use App\Http\Controllers\Api\Auth\RegiterController;
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


Route::middleware('checklang')->prefix('{locale}')->group( function(){
    Route::get('All/Addres',[RegiterController::class,'getallAddres']);
    Route::post('/register/user',[RegiterController::class,'register']);
    Route::post('/login/user',[RegiterController::class,'login']);
});


Route::post('/logout/user',[RegiterController::class,'logout']);
