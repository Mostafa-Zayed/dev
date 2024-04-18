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
    Route::get('/settings',[Modules\Store\Http\Controllers\StoreSettingsController::class,'index']);
    Route::post('/settings/update',[Modules\Store\Http\Controllers\StoreSettingsController::class,'update']);

    Route::get('categories',[Modules\Store\Http\Controllers\CategoryController::class,'index'])->name('store.categories');
    Route::get('categories/{id}',[Modules\Store\Http\Controllers\CategoryController::class,'edit'])->name('store.categories.edit');
    Route::post('categories/{id}/destroy',[Modules\Store\Http\Controllers\CategoryController::class,'destroy'])->name('store.categories.destroy');
    Route::get('categories-ajax-index-page', [Modules\Store\Http\Controllers\CategoryController::class, 'getCategoryIndexPage']);
    // Route::get('categories/')
    Route::get('variations',[Modules\Store\Http\Controllers\VariationController::class,'index'])->name('store.variations');
});
