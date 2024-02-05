<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\models\category;

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
    return view('home.welcome');
});

// routes/web.php
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/shop', function () {
    return view('home.shop');
});

Route::get('/profile', function () {
    return view('home.profile');
});


Route::get('/service', function () {
    return view('home.service');
});

Route::get('/cart', function () {
    return view('home.cart');
});


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

Route::middleware(['auth.session', 'verified'])->get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/view_category',[AdminController::class,'view_category']);

Route::post('/add_category',[AdminController::class,'add_category']);

Route::get('/delete_category/{id}',[AdminController::class,'delete_category']);

Route::get('/view_product',[AdminController::class,'view_product']);

Route::post('/add_product',[AdminController::class,'add_product']);

Route::get('/show_product',[AdminController::class,'show_product']);

Route::get('/delete_product/{id}',[AdminController::class,'delete_product']);

Route::get('/update_product/{id}',[AdminController::class,'update_product']);

Route::post('/update_product_confirm/{id}',[AdminController::class,'update_product_confirm']);

Route::post('/add_cart/{id}',[HomeController::class,'add_cart']);

Route::get('/remove_cart/{id}',[HomeController::class,'remove_cart']);

Route::get('/cash_order',[HomeController::class,'cash_order']);

Route::get('/order',[AdminController::class,'order']);

Route::get('/stripe/{total}',[HomeController::class,'stripe']);

Route::post('/stripe/{total}', [HomeController::class,'stripePost'])->name('stripe.post');

