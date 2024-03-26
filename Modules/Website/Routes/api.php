<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Website\Http\Controllers\Api\V1\FeatureController;

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

// Route::middleware('auth:api')->get('/website', function (Request $request) {
//     return $request->user();
// });

Route::get('features',[FeatureController::class,'index'])->name('website.api.v1.features');