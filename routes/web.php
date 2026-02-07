<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', fn () => view('home'));
Route::get('/home', fn () => view('home'));
Route::get('/about', fn () => view('about'));
Route::get('/services', fn () => view('services'));
Route::get('/login', fn () => view('login'));
Route::get('/register', fn () => view('register'));

// CONTACT (controller based)
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

