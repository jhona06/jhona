<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgeController;


// Display form for age input
Route::get('/', [AgeController::class, 'showForm']); 

// Apply the middleware to the POST route with the age parameter (e.g., 18)
Route::post('/submit-age', [AgeController::class, 'checkAge'])
    ->middleware('check.age:18');

// Access Denied route
Route::get('/access-denied', function () {
    return "Access Denied - You must be 18 or older!";
});


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
