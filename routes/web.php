<?php

use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\RestaurantReviewController;
use App\Http\Controllers\RecipeReviewController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\FAQController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', function () { return view('home');});

Route::get('/home', function () { return view('home'); });

//Route::get('/sitemap', function () { return view('sitemap'); });

Route::get('/sitemap', function(){
    //Mail::to('tim.marshall.burns95@gmail.com')->send(new WelcomeMail()); // get user email here

    $user=\Illuminate\Support\Facades\Auth::user();
    return view('sitemap',compact('user'));
});

Route::get('/about', function () { return view('about'); });

Route::get('/privacy', function () { return view('privacy'); });

Route::get('/faqs', function () { return view('faqs'); });

Route::get('/restaurants/map', function () { return view('restaurants.map'); });

Route::get('/search',[SearchController::class,'index']);

Route::get('users', 'UsersController@index')->name('users.index');

Route::resource('/restaurants', RestaurantController::class);
Route::resource('/recipes', RecipeController::class);
Route::resource('/recipereview', RecipeReviewController::class);
Route::resource('/review',RestaurantReviewController::class);
Route::resource('/contact',ContactController::class)->middleware((['auth']));
Route::resource('/users', UsersController::class);
Route::resource("/faqs",FAQController::class);


// route for emails
Route::get('/email', function(){
    //Mail::to('tim.marshall.burns95@gmail.com')->send(new WelcomeMail()); // get user email here

    $user=\Illuminate\Support\Facades\Auth::user();
    return new WelcomeMail();
});


Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
