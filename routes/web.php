<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\StoreController;
use app\Http\Controllers\DeliverydriversController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::resource('categories', CategoryController::class)
    ->middleware(['auth']);
Route::resource('stores', StoreController::class)
    ->middleware(['auth']);
Route::resource('foods', FoodController::class)
    ->middleware(['auth']);
Route::resource('coupons', CouponController::class)
    ->middleware(['auth']);
Route::resource('deliverydrivers', DeliverydriversController::class)
    ->middleware(['auth']); 
require __DIR__.'/auth.php';
