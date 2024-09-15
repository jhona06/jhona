<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HomeController;



Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/', [HomeController::class, 'index'])->name('home');
// Route for adding items to the order
Route::post('/order/add', [OrderController::class, 'add'])->name('order.add');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

Route::post('/order/submit', [OrderController::class, 'submit'])->name('order.submit');

Route::middleware('auth')->group(function () {
    Route::post('/order/add', [OrderController::class, 'add'])->name('order.add');
    Route::post('/order/submit', [OrderController::class, 'submit'])->name('order.submit');
});








