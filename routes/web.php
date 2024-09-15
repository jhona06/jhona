<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;\use App\Http\Controllers\MenuController;
use App\Http\Controllers\PageController;

Route::get('/', [MenuController::class, 'index'])->name('home');

Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
Route::get('/menu/{id}', [MenuController::class, 'show'])->name('menu.show');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::post('/contact', [PageController::class, 'send'])->name('contact.send');

