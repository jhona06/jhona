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

Route::get('/access-denied', function () {
    return 'Access Denied';
})->name('access.denied');

// Login route
Route::get('/login', function () {
    return view('login');
});

// Apply CheckAge middleware to specific routes
Route::middleware(['check.age'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');
});



Route::post('/login', function (Request $request) {
    // Validate age input
    $request->validate(['age' => 'required|integer']);

    // Store age in session for middleware to use
    $request->session()->put('age', $request->age);

    return redirect('/home'); // Redirect to home after login
})->name('login.submit');

Route::get('/restricted', function () {
    return 'Restricted Page';
})->middleware('check.age:21'); // Require age of 21 or older

Route::get('/', function (Request $request) {
    // This will only return the welcome view if the CheckAge middleware passes
    return view('welcome'); // The welcome view is now your home page
})->name('home')->middleware('checkAge'); // Apply CheckAge middleware to the home route


