<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/disclaimer', 'disclaimer')->name('disclaimer');

Route::view('/impressum', 'imprint')->name('imprint');

Route::view('/datenschutz', 'privacy')->name('privacy');

// Pages listed in /sitemap.xml. Add new public pages here.
Route::get('/sitemap.xml', function () {
    $pages = [
        ['route' => 'home', 'changefreq' => 'weekly', 'priority' => '1.0'],
        ['route' => 'imprint', 'changefreq' => 'yearly', 'priority' => '0.3'],
        ['route' => 'privacy', 'changefreq' => 'yearly', 'priority' => '0.3'],
        ['route' => 'disclaimer', 'changefreq' => 'yearly', 'priority' => '0.3'],
    ];

    return response()
        ->view('sitemap', ['pages' => $pages])
        ->header('Content-Type', 'application/xml');
})->name('sitemap');
