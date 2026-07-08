<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/disclaimer', 'disclaimer')->name('disclaimer');

Route::view('/impressum', 'imprint')->name('imprint');

Route::view('/datenschutz', 'privacy')->name('privacy');
