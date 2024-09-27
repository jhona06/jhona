<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HomeController;

// Route to display the login form
Route::get('/login', function () {
    return view('login'); // Make sure to create a login.blade.php view
})->name('login');

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

// Root route redirecting to login
Route::get('/', function () {
    return redirect()->route('login'); // Redirect to login page
});

// Route for adding items to the order
Route::post('/order/add', [OrderController::class, 'add'])->name('order.add');

// Route for submitting the contact form
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

// Route for placing an order
Route::post('/order/place', [OrderController::class, 'placeOrder'])->name('order.place');

// Route for canceling an order
Route::post('/order/cancel', [OrderController::class, 'cancel'])->name('order.cancel');

Route::get('/', [HomeController::class, 'index'])->name('home');