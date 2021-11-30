<?php

use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

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
Route::get('/home', function () {
    return view('home');
});

Route::resource('/restaurants', RestaurantController::class);
Route::resource('/recipes', RecipeController::class);
<<<<<<< HEAD
Route::resource('/recipereview', \App\Http\Controllers\RecipeReviewController::class);
=======
Route::resource('/review',\App\Http\Controllers\RestaurantReviewController::class);
>>>>>>> 0e75df6d70d80119fe365c519dbde0f71cd09f84

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
