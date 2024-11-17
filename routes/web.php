<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/unit', function () {
    return view('pages.unit');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/news', function () {
    return view('pages.news');
});
Route::get('/login', function () {
    return view('pages.login');
});





