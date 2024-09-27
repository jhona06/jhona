<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgeController;

// Default route to show the login form
Route::get('/', [AgeController::class, 'showForm']); // Home page now shows the login form
Route::post('/login', [AgeController::class, 'checkAge'])->middleware('check.age:18');
Route::get('/access-denied', function () {
    return view('access-denied');
});

// Route with a different age requirement
Route::get('/order-restricted', [AgeController::class, 'showForm'])
    ->middleware('check.age:21');

// Route for the home page
Route::get('/home', function () {
    return view('home');
})->name('home');

// Route for about page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Route for contact page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


// Route for adding items to the order
Route::post('/order/add', [OrderController::class, 'add'])->name('order.add');

// Route for submitting the contact form
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

// Route for placing an order
Route::post('/order/place', [OrderController::class, 'placeOrder'])->name('order.place');

// Route for canceling an order
Route::post('/order/cancel', [OrderController::class, 'cancel'])->name('order.cancel');
