<?php


use App\Http\Controllers\Web\AdController;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\PageController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group([
    'prefix'=> LaravelLocalization::setlocale(),
    'middleware' => ['localize', 'localeSessionRedirect', 'localizationRedirect'],
], function () {

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');
Route::get('/policy', [PageController::class, 'policy'])->name('policy');
Route::get('/commission', [PageController::class, 'commission'])->name('commission');

Route::get('/login', [AuthController::class, 'Login'])->name('login');
Route::get('/register', [AuthController::class, 'Register'])->name('register');
Route::get('/register2', [AuthController::class, 'Register2'])->name('register2');
Route::get('/restore_pass', [AuthController::class, 'RestorePass'])->name('restore_pass');
Route::get('/code', [AuthController::class, 'Code'])->name('code');
Route::get('/new_pass', [AuthController::class, 'NewPass'])->name('new_pass');

Route::get('/ads', [AdController::class, 'index'])->name('ads');
Route::get('/add_ad', [AdController::class, 'create'])->name('add_ad');
Route::get('/ads/{id}', [AdController::class, 'show'])->name('ad_details');
Route::get('/categories', [AdController::class, 'categories'])->name('categories');
Route::get('/search', [AdController::class, 'search'])->name('search');


Route::get('/profile', [AdController::class, 'profile'])->name('profile');

});





