<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/content', function () {
    return view('content');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/welcome1', function () {
    return view('welcome1', ['message' => 'Welcome to the homepage!']);
})
Route::redirect('/home', '/welcome1');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/username/{username}', function ($username) {
    return view('username', ['username' => $username]);
});
Route::get('/username/{username?}', function ($username = 'Guest') {
    return view('username', ['username' => $username]);
});
Route::get('/username/{username?}', function ($username = 'Guest') {
    return view('username', ['username' => $username]);
})->where('username', '[A-Za-z]+');