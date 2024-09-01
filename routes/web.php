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
Route::get('/welcome', function () {
    return view('welcome', ['message' => 'Welcome to the homepage!']);
})
Route::redirect('/home', '/welcome1');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/user/{username}', function ($username) {
    return view('user', ['username' => $username]);
});
Route::get('/user/{username?}', function ($username = 'Guest') {
    return view('user', ['username' => $username]);
});
Route::get('/user/{username?}', function ($username = 'Guest') {
    return view('user', ['username' => $username]);
})->where('username', '[A-Za-z]+');