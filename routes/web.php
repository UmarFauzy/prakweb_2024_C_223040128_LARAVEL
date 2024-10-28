<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', ['tittle' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Muhamad Umar Fauzy Rahman', 'tittle' => 'About']);
});

Route::get('/blog', function () {
    return view('blog', ['tittle' => 'Blog']);
});

Route::get('/contact', function () {
    return view('contact', ['tittle' => 'Contact']);
});
