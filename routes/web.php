<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\post;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', ['tittle' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Muhamad Umar Fauzy Rahman', 'tittle' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['tittle' => 'Blog', 'posts'=> Post::all() ]);
});


Route::get('/posts/{post:slug}', function(post $post) {
        return view('post', ['tittle' => 'Single Post', 'post' => $post]);

});
    
    Route::get('/contact', function () {
        return view('contact', ['tittle' => 'Contact']);
});

