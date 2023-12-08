<?php

use App\Http\Controllers\Admin\AdminAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\WhyChooseUsController;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {


    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    // as admin --> admin/dashboard  name('admin.dashboard)
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('profile', [ProfileController::class, 'updateProfile'])->name('profile.update');
    Route::put('profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password.update');
    /** Slider Route */
    Route::resource('slider', SliderController::class);
    /** Why Choose Us Route */
    Route::put('why-choose-title-update', [WhyChooseUsController::class, 'updateTitle'])->name('why-choose-title-update');
    Route::resource('why-choose-us', WhyChooseUsController::class);

    /** Product Category Route */
    Route::resource('category', CategoryController::class);

    /** Product Route */
    Route::resource('product', ProductController::class);
});
