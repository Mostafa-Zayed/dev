<?php

use App\Http\Controllers\Api\V1\Auth\BusinessController;
use Illuminate\Http\Request;

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


Route::group(['middleware'=>['guest:sanctum','api-lang']],function () {
    Route::post('business/login',[BusinessController::class,'login'])->name('api.v1.business.login');
    Route::post('business/register',[BusinessController::class,'register'])->name('api.v1.business.register');
});