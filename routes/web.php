<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\TravelPackageController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CheckoutController;

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

Route::get('/', [HomeController::class, 'index'])
    ->name('home');


Route::get('/detail', [DetailController::class, 'index'])
    ->name('detail');


Route::get('/checkout', [CheckoutController::class, 'index'])
    ->name('checkout');


Route::get('/checkout/success', [CheckoutController::class, 'success'])
    ->name('checkout-success');


Route::prefix('admin')
    ->namespace('App\Http\Controllers\admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index']) //router laravel 9
            ->name('dashboard');


        Route::resource('travel-package', TravelPackageController::class);
        Route::resource('gallery', GalleryController::class);
    });

Auth::routes(['verify' => true]);
