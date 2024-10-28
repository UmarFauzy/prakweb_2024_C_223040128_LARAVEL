<?php

use Illuminate\Support\Arr;
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

Route::get('/posts', function () {
    return view('posts', ['tittle' => 'Blog', 'posts'=>[
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'tittle' => 'Judul Artikel 1',
            'author' => 'Umar Fauzy',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus voluptate, 
                        cupiditate nemo accusantium ipsam corporis tempora qui voluptates veritatis fuga deserunt 
                        repellendus adipisci autem in commodi, temporibus quia, dolorem ea.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'tittle' => 'Judul Artikel 2',
            'author' => 'Umar Fauzy',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Repudiandae quas nostrum aut facere minima minus nemo soluta reiciendis, 
                        quis ducimus animi nesciunt sint ad aliquid alias similique corrupti accusamus incidunt.'
        ]
    ]]);
});


Route::get('/posts/{slug}', function($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'tittle' => 'Judul Artikel 1',
            'author' => 'Umar Fauzy',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus voluptate, 
            cupiditate nemo accusantium ipsam corporis tempora qui voluptates veritatis fuga deserunt 
            repellendus adipisci autem in commodi, temporibus quia, dolorem ea.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'tittle' => 'Judul Artikel 2',
            'author' => 'Umar Fauzy',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Repudiandae quas nostrum aut facere minima minus nemo soluta reiciendis, 
            quis ducimus animi nesciunt sint ad aliquid alias similique corrupti accusamus incidunt.'
            ]
        ];
        
        $post = Arr::first($posts, function($post) use ($slug) {
            return $post['slug'] == $slug ;
        });
        
        return view('post', ['tittle' => 'Single Post', 'post' => $post]);

});
    
    Route::get('/contact', function () {
        return view('contact', ['tittle' => 'Contact']);
});