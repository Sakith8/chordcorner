<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('auth.contact');
});

Route::get('/shop', function () {
    return view('auth.shop');
});

Route::get('/profile', function () {
    return view('auth.profile');
});


Route::get('/service', function () {
    return view('auth.service');
});

Route::get('/cart', function () {
    return view('auth.cart');
});




Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/shop', [App\Http\Controllers\HomeController::class, 'shop'])->name('shop');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/service', [App\Http\Controllers\HomeController::class, 'service'])->name('service');
Route::get('/cart', [App\Http\Controllers\HomeController::class, 'cart'])->name('cart');
Route::get('/instrument', [App\Http\Controllers\HomeController::class, 'instrument'])->name('instrument');
Route::post('/addinstrument', [App\Http\Controllers\HomeController::class, 'addinstrument'])->name('addinstrument');
Route::delete('/instrument/{id}', [HomeController::class, 'deleteInstrument'])->name('instrument.delete');


Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');


Auth::routes();





