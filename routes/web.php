<?php

use App\Http\Controllers\SilkController;
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\CreditsController;
use App\Http\Controllers\LoansController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\DailiesController;
use App\Http\Controllers\HisobController;
use Illuminate\Support\Facades\Route;

Route::view('/','index');

Route::resource('silk', SilkController::class);
Route::resource('accounts', AccountsController::class);
Route::resource('credits', CreditsController::class);
Route::resource('loans', LoansController::class);
Route::resource('products', ProductsController::class);
Route::resource('dashboard', DashboardController::class);
Route::resource('staff', StaffController::class);
Route::resource('daily', DailiesController::class);
Route::resource('hisob', HisobController::class);
Route::post('/dailyinsert', [DailiesController::class, 'dailyinsert']);


Route::view('users-profile','pages/users-profile');
Route::view('help','pages/j-club');