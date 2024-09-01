<?php

use Illuminate\Support\Facades\Route;


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
});->name ('contact');


Route::get('/user/{username}', function ($username) {
    return view('user', ['username' => $username]);
});
Route::get('/user/{username?}', function ($username = 'Guest') {
    return view('user', ['username' => $username]);
});
Route::get('/user/{username?}', function ($username = 'Guest') {
    return view('user', ['username' => $username]);
})->where('username', '[A-Za-z]+');