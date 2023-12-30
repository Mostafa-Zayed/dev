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

Route::middleware('web','SetSessionData', 'auth',)->prefix('website')->group(function () {
    Route::get('dashboard',[Modules\Website\Http\Controllers\HomeController::class,'index']);
    Route::get('settings',[Modules\Website\Http\Controllers\WebsiteSettingController::class,'index'])->name('settings.index');
    Route::get('/install', [Modules\Website\Http\Controllers\InstallController::class, 'index']);
    Route::post('/install', [Modules\Website\Http\Controllers\InstallController::class, 'install']);
    Route::get('/install/uninstall', [Modules\Website\Http\Controllers\InstallController::class, 'uninstall']);
    Route::get('/install/update', [Modules\Website\Http\Controllers\InstallController::class, 'update']);
});
