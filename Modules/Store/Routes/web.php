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

Route::middleware('web','auth','AdminSidebarMenu','language')->prefix('store')->group(function() {
    Route::get('install', [Modules\Store\Http\Controllers\InstallController::class, 'index']);
    Route::post('/install', [Modules\Store\Http\Controllers\InstallController::class, 'install']);
    Route::get('/install/uninstall', [Modules\Store\Http\Controllers\InstallController::class, 'uninstall']);
    Route::get('/install/update', [Modules\Store\Http\Controllers\InstallController::class, 'update']);
    Route::get('/', 'StoreController@index');
});
