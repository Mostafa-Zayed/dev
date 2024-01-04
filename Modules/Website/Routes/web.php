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

    // settings
    Route::get('settings',[Modules\Website\Http\Controllers\WebsiteSettingController::class,'index'])->name('settings.index');
    Route::post('settings',[Modules\Website\Http\Controllers\WebsiteSettingController::class,'update'])->name('settings.update');

    // sliders
    Route::get('sliders',[Modules\Website\Http\Controllers\WebsiteSliderController::class,'index'])->name('sliders.index');
    Route::get('sliders/create',[Modules\Website\Http\Controllers\WebsiteSliderController::class,'create'])->name('sliders.create');
    Route::post('sliders/store',[Modules\Website\Http\Controllers\WebsiteSliderController::class,'store'])->name('sliders.store');
    Route::get('sliders/edit/{id}',[Modules\Website\Http\Controllers\WebsiteWorkController::class,'edit'])->name('sliders.edit');
    Route::post('sliders/update',[Modules\Website\Http\Controllers\WebsiteSliderController::class,'update'])->name('sliders.update');
    Route::post('sliders/delete',[Modules\Website\Http\Controllers\WebsiteSliderController::class,'destroy'])->name('sliders.destroy');
    Route::post('sliders/status/change',[Modules\Website\Http\Controllers\WebsiteSliderController::class,'changeStatus'])->name('sliders.change-status');

    // features
    Route::get('features',[Modules\Website\Http\Controllers\WebsiteFeatureController::class,'index'])->name('features.index');
    Route::get('features/create',[Modules\Website\Http\Controllers\WebsiteFeatureController::class,'create'])->name('features.create');
    Route::post('features/store',[Modules\Website\Http\Controllers\WebsiteFeatureController::class,'store'])->name('features.store');
    Route::get('features/edit',[Modules\Website\Http\Controllers\WebsiteFeatureController::class,'edit'])->name('features.edit');
    Route::post('features/update',[Modules\Website\Http\Controllers\WebsiteFeatureController::class,'update'])->name('features.update');
    Route::post('features/delete',[Modules\Website\Http\Controllers\WebsiteFeatureController::class,'destroy'])->name('features.destroy');
    Route::post('features/status/change',[Modules\Website\Http\Controllers\WebsiteFeatureController::class,'changeStatus'])->name('features.change-status');

    // how works
    Route::get('how-works',[Modules\Website\Http\Controllers\WebsiteWorkController::class,'index'])->name('works.index');
    Route::get('how-works/create',[Modules\Website\Http\Controllers\WebsiteWorkController::class,'create'])->name('works.create');
    Route::post('how-works/store',[Modules\Website\Http\Controllers\WebsiteWorkController::class,'store'])->name('works.store');
    Route::get('how-works/edit/{id}',[Modules\Website\Http\Controllers\WebsiteWorkController::class,'edit'])->name('works.edit');
    Route::post('how-works/update',[Modules\Website\Http\Controllers\WebsiteWorkController::class,'update'])->name('works.update');
    Route::post('how-works/delete',[Modules\Website\Http\Controllers\WebsiteWorkController::class,'destroy'])->name('works.destroy');
    Route::post('how-works/status/change',[Modules\Website\Http\Controllers\WebsiteWorkController::class,'changeStatus'])->name('works.change-status');

    // screen shots
    Route::get('screen-shots',[Modules\Website\Http\Controllers\WebsiteScreenshotController::class,'index'])->name('screen-shots.index');
    Route::get('screen-shots/create',[Modules\Website\Http\Controllers\WebsiteScreenshotController::class,'create'])->name('screen-shots.create');
    Route::post('screen-shots/store',[Modules\Website\Http\Controllers\WebsiteScreenshotController::class,'store'])->name('screen-shots.store');
    Route::get('screen-shots/edit/{id}',[Modules\Website\Http\Controllers\WebsiteScreenshotController::class,'edit'])->name('screen-shots.edit');
    Route::post('screen-shots/update',[Modules\Website\Http\Controllers\WebsiteScreenshotController::class,'update'])->name('screen-shots.update');
    Route::post('screen-shots/delete',[Modules\Website\Http\Controllers\WebsiteScreenshotController::class,'destroy'])->name('screen-shots.destroy');
    Route::post('screen-shots/status/change',[Modules\Website\Http\Controllers\WebsiteScreenshotController::class,'changeStatus'])->name('screen-shots.change-status');

    // reviews
    Route::get('reviews',[Modules\Website\Http\Controllers\WebsiteReviewController::class,'index'])->name('reviews.index');
    Route::get('reviews/create',[Modules\Website\Http\Controllers\WebsiteReviewController::class,'create'])->name('reviews.create');
    Route::post('reviews/store',[Modules\Website\Http\Controllers\WebsiteReviewController::class,'store'])->name('reviews.store');
    Route::get('reviews/edit/{id}',[Modules\Website\Http\Controllers\WebsiteReviewController::class,'edit'])->name('reviews.edit');
    Route::post('reviews/update',[Modules\Website\Http\Controllers\WebsiteReviewController::class,'update'])->name('reviews.update');
    Route::post('reviews/delete',[Modules\Website\Http\Controllers\WebsiteReviewController::class,'destroy'])->name('reviews.destroy');
    Route::post('reviews/status/change',[Modules\Website\Http\Controllers\WebsiteReviewController::class,'changeStatus'])->name('reviews.change-status');

    // partners
    Route::get('partners',[Modules\Website\Http\Controllers\WebsitePartnerController::class,'index'])->name('partners.index');
    Route::get('partners/create',[Modules\Website\Http\Controllers\WebsitePartnerController::class,'create'])->name('partners.create');
    Route::get('partners/edit/{id}',[Modules\Website\Http\Controllers\WebsitePartnerController::class,'edit'])->name('partners.edit');
    Route::post('partners/update',[Modules\Website\Http\Controllers\WebsitePartnerController::class,'update'])->name('partners.update');
    Route::post('partners/store',[Modules\Website\Http\Controllers\WebsitePartnerController::class,'store'])->name('partners.store');
    Route::post('partners/delete',[Modules\Website\Http\Controllers\WebsitePartnerController::class,'destroy'])->name('partners.destroy');
    Route::post('partners/status/change',[Modules\Website\Http\Controllers\WebsitePartnerController::class,'changeStatus'])->name('partners.change-status');

    // questions
    Route::get('questions',[Modules\Website\Http\Controllers\WebsiteQuestionController::class,'index'])->name('questions.index');
    Route::get('questions/create',[Modules\Website\Http\Controllers\WebsiteQuestionController::class,'create'])->name('questions.create');
    Route::post('questions/store',[Modules\Website\Http\Controllers\WebsiteQuestionController::class,'store'])->name('questions.store');
    Route::get('questions/edit/{id}',[Modules\Website\Http\Controllers\WebsiteQuestionController::class,'edit'])->name('questions.edit');
    Route::post('questions/update',[Modules\Website\Http\Controllers\WebsiteQuestionController::class,'update'])->name('questions.update');
    Route::post('questions/delete',[Modules\Website\Http\Controllers\WebsiteQuestionController::class,'destroy'])->name('questions.destroy');
    Route::post('questions/status/change',[Modules\Website\Http\Controllers\WebsiteQuestionController::class,'changeStatus'])->name('questions.change-status');

    // posts
    Route::get('posts',[Modules\Website\Http\Controllers\WebsitePostController::class,'index'])->name('posts.index');
    Route::get('posts/create',[Modules\Website\Http\Controllers\WebsitePostController::class,'create'])->name('posts.create');
    Route::post('posts/store',[Modules\Website\Http\Controllers\WebsitePostController::class,'store'])->name('posts.store');
    Route::get('posts/edit/{id}',[Modules\Website\Http\Controllers\WebsitePostController::class,'edit'])->name('posts.edit');
    Route::post('posts/update',[Modules\Website\Http\Controllers\WebsitePostController::class,'update'])->name('posts.update');
    Route::post('posts/delete',[Modules\Website\Http\Controllers\WebsitePostController::class,'destroy'])->name('posts.destroy');
    Route::post('posts/status/change',[Modules\Website\Http\Controllers\WebsitePostController::class,'changeStatus'])->name('posts.changeStatus');


    Route::get('/install', [Modules\Website\Http\Controllers\InstallController::class, 'index']);
    Route::post('/install', [Modules\Website\Http\Controllers\InstallController::class, 'install']);
    Route::get('/install/uninstall', [Modules\Website\Http\Controllers\InstallController::class, 'uninstall']);
    Route::get('/install/update', [Modules\Website\Http\Controllers\InstallController::class, 'update']);

});
