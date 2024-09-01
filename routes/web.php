<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/home', function () {
    return view('home');
});
Route::get('/content', function () {
    return view('content');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/', function () {
    return view('welcome', ['message' => 'Welcome to the homepage!']);
})->name('homepage');

Route::view('/about', 'about')->name ('about');

Route::redirect('/home','/');

Route::get('/contact', function () {
    return view('contact');
})->name ('contact');

// Handle form submission and redirect based on username input
Route::post('/contact/submit', function (Request $request) {
    $username = $request->input('username');
    // Redirect to the route that displays the user welcome message
    return redirect()->route('user.optional', ['username' => $username]);
})->name('user.submit');


Route::get('/user/{username}', function ($username) {
    return view('user', ['username' => $username]);
})->where('username', '[A-Za-z]+')->name('user.show');

Route::get('/user/{username?}', function ($username = 'Guest') {
    return view('user', ['username' => $username]);
})->where('username', '[A-Za-z]+')->name('user.optional');

Route::middleware(['web'])->group(function () {
    Route::get('/', function () {
        return view('welcome', ['message' => 'Welcome to our Homepage!']);
    })->name('homepage');
    
    Route::view('/about', 'about')->name('about');
    
    Route::redirect('/home', '/');
    
    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');
    
    Route::prefix('user')->group(function () {
        Route::get('/{username?}', function ($username = 'Guest') {
            return view('user', ['username' => $username]);
        })->where('username', '[A-Za-z]*')->name('user.optional');
    });
});

return redirect()->route('homepage');


