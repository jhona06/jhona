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

Route::post('/order/place', [OrderController::class, 'placeOrder'])->name('order.place');

Route::post('/order/cancel', [OrderController::class, 'cancel'])->name('order.cancel');


// Route to display the login form
Route::get('/login', function () {
    return view('login');
});

// Route group with CheckAge middleware
Route::middleware(['check.age'])->group(function () {
    Route::get('/home', function () {
        return view('home'); // Load the home page if age check passes
    });
});

// Route for access denied
Route::get('/access-denied', function () {
    return 'Access Denied: You must be 18 or older to access this page.';
});





