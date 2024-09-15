<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MenuController;

Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
Route::get('/menu/{id}', [MenuController::class, 'show'])->name('menu.show');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


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
    return view('home');
});
//about
Route::get('/about', function () {
    return view('about');
})->name('about');


//contacts
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/submit', [UserController::class, 'submit'])->name('user.submit');


// it will view the home 
Route::get('/', function () {
    return view('welcome', ['message' => 'Welcome to the homepage!']);
})->name('homepage');

Route::get('/about', function() {
    return view('about');
})->name('about');

// it will redirect the home to "homepage" name
Route::redirect('/home', "/");

// it will view the contact form page
Route::get('/contact', function () {
    return view("contact");
})->name('contact');

// Handle form submission and redirect based on username input
Route::post('/contact/submit', function (Request $request) {
    $username = $request->input('username');
    return redirect()->route('user.optional', ['username' => $username]);
})->name('user.submit');

// this will get the username and constraint the input by letter only
Route::get('/user/{username}', function ($username) {
    return view('user', ['username' => $username]);
})->where('username', '[A-Za-z]+')->name('user.show');

// this is will get the username when empty for optional username
Route::get('/user/{username?}', function ($username = 'Guest') {
    return view('user', ['username' => $username]);
})->where('username', '[A-Za-z]+')->name('user.optional');

// middleware use for web CSRF protection
Route::middleware(['web'])->group(function () {
    Route::get('/', function () {
        return view('welcome', ['message' => 'Welcome to our Homepage!']);
    })->name('homepage');
    
    Route::view('/about1', 'about1')->name('about1');
    
    Route::redirect('/home', '/');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');
    
    Route::prefix('user')->group(function () {
        Route::get('/{username?}', function ($username = 'Guest') {
            return view('user', ['username' => $username]);
        })->where('username', '[A-Za-z]+')->name('user.optional');
    });
});



