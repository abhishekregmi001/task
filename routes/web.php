<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginWithGoogleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductRatingController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('authorized/google', [LoginWithGoogleController::class, 'redirectToGoogle']);
Route::get('authorized/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']);
Route::get('createchild/{id}',[CategoryController::class,'createchild'])->name('createchild');
Route::get('createchild/{id}',[CategoryController::class,'createchild'])->name('createchild');
Route::post('storechild/{id}',[CategoryController::class,'storechild'])->name('storechild');

Route::resource('category',CategoryController::class);
Route::resource('product',ProductController::class);
Route::get('prodetail/{id}',[ProductRatingController::class,'prodetail'])->name('prodetail');

Route::resource('rating',ProductRatingController::class);