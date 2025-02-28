<?php

use App\Http\Controllers\Admin\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\ResetPasswordController;
use App\Http\Controllers\Admin\CMS\SocialController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Setting\SettingController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'admin.guest'],function () {
    Route::match(['get', 'head'], 'login', [LoginController::class,'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class,'login'])->name('login.submit');

    Route::match(['get', 'head'], 'password/reset/{token}', [ResetPasswordController::class,'showResetForm'])->name('password.reset');
    Route::post('password/email', [ForgotPasswordController::class,'sendResetLinkEmail'])->name('password.email');
    Route::match(['get', 'head'], 'password/reset', [ForgotPasswordController::class,'showLinkRequestForm'])->name('password.request');
    Route::post('password/reset', [ResetPasswordController::class,'reset'])->name('password.update');
});

Route::group(['middleware' => 'admin.auth'],function () {
    Route::get('logout', [LoginController::class,'logout'])->name('logout');
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::resource('settings',SettingController::class)->only('index','store');
    Route::post('payment/settings',[SettingController::class,'paymentSettings'])->name('payment.settings');
    Route::post('seo/settings',[SettingController::class,'seoSettings'])->name('seo.settings');
    Route::post('smtp/settings',[SettingController::class,'smtpSettings'])->name('smtp.settings');
    Route::post('smtp/verification/settings',[SettingController::class,'smtpVerificationSettings'])->name('smtp.verification.settings')->middleware('mail');
    Route::post('theme/style/store',[SettingController::class,'themeStyleStore'])->name('theme.style.store');

    Route::resource('socials', SocialController::class)->only('index','create','store','edit','update','destroy');
    Route::post('social/status',[SocialController::class,'status'])->name('social.status');
    Route::post('social/action',[SocialController::class,'action'])->name('social.action');
});