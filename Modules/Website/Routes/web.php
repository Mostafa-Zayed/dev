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
    Route::get('dashboard',[Modules\Website\Http\Controllers\HomeController::class,'index'])->name('website.home');
    Route::get('settings',[Modules\Website\Http\Controllers\WebsiteSettingController::class,'index'])->name('settings.index');

    Route::post('settings',[Modules\Website\Http\Controllers\WebsiteSettingController::class,'update'])->name('settings.update');
    Route::get('sliders',[Modules\Website\Http\Controllers\WebsiteSliderController::class,'index'])->name('sliders.index');
    Route::get('features',[Modules\Website\Http\Controllers\WebsiteFeatureController::class,'index'])->name('features.index');
    Route::get('how-works',[Modules\Website\Http\Controllers\WebsiteWorkController::class,'index'])->name('works.index');
    Route::get('screen-shots',[Modules\Website\Http\Controllers\WebsiteScreenshotController::class,'index'])->name('screen-shots');
    Route::get('reviews',[Modules\Website\Http\Controllers\WebsiteReviewController::class,'index'])->name('reviews.index');
    Route::get('partners',[Modules\Website\Http\Controllers\WebsitePartnerController::class,'index'])->name('partners.index');
    Route::get('questions',[Modules\Website\Http\Controllers\WebsiteQuestionController::class,'index'])->name('questions.index');
    Route::get('posts',[Modules\Website\Http\Controllers\WebsitePostController::class,'index'])->name('posts.index');

    Route::get('/install', [Modules\Website\Http\Controllers\InstallController::class, 'index']);
    Route::post('/install', [Modules\Website\Http\Controllers\InstallController::class, 'install']);
    Route::get('/install/uninstall', [Modules\Website\Http\Controllers\InstallController::class, 'uninstall']);
    Route::get('/install/update', [Modules\Website\Http\Controllers\InstallController::class, 'update']);

    //test
});
