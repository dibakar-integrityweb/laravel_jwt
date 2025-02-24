<?php

use App\Http\Controllers\Admin\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\ResetPasswordController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::match(['get', 'head'], 'login', [LoginController::class,'showLoginForm'])->name('login');
Route::post('login', [LoginController::class,'login'])->name('login.submit');

Route::match(['get', 'head'], 'password/reset/{token}', [ResetPasswordController::class,'showResetForm'])->name('password.reset');
Route::post('password/email', [ForgotPasswordController::class,'sendResetLinkEmail'])->name('password.email');
Route::match(['get', 'head'], 'password/reset', [ForgotPasswordController::class,'showLinkRequestForm'])->name('password.request');
Route::post('password/reset', [ResetPasswordController::class,'reset'])->name('password.update');

Route::get('logout', [LoginController::class,'logout'])->name('logout');
Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');