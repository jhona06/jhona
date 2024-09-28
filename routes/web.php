<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HomeController;

// Route for home page with age restriction using CheckAge middleware
Route::get('/home', function () {
    return view('home');
})->middleware('checkAge:18')->name('home');

// About and Contact routes
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->middleware('checkAge:18')->name('contact');

// HomeController for index
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('check.age');

// Route for adding items to the order
Route::post('/order/add', [OrderController::class, 'add'])->name('order.add');

// Contact submission
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

// Place an order
Route::post('/order/place', [OrderController::class, 'placeOrder'])->name('order.place');

// Cancel an order
Route::post('/order/cancel', [OrderController::class, 'cancel'])->name('order.cancel');

// A restricted route that requires users to be 21 or older
Route::get('/restricted', function () {
    return "This page is restricted to 21+ users!";
})->middleware('checkAge:21')->name('restricted');

// Access Denied page
Route::get('/access-denied', function () {
    return "Access Denied!";
})->name('access.denied');
