<?php

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
// Route::get('/mobileapp/install', [Modules\MobileApp\Http\Controllers\InstallController::class, 'index']);
Route::middleware('web','auth','AdminSidebarMenu','language')->prefix('mobileapp')->group(function() {
    Route::get('/', 'MobileAppController@index');
    Route::get('/install', [Modules\MobileApp\Http\Controllers\InstallController::class, 'index']);
    Route::post('/install', [Modules\MobileApp\Http\Controllers\InstallController::class, 'install']);
    Route::get('/install/uninstall', [Modules\MobileApp\Http\Controllers\InstallController::class, 'uninstall']);
    Route::get('/install/update', [Modules\MobileApp\Http\Controllers\InstallController::class, 'update']);
    Route::get('settings',[Modules\MobileApp\Http\Controllers\MobileAppController::class,'settings']);

    Route::get('splash-screens',[Modules\MobileApp\Http\Controllers\SplashScreenController::class,'index']);
    Route::get('splash-screens/create',[Modules\MobileApp\Http\Controllers\SplashScreenController::class,'create']);
});
