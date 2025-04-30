<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama'=>'KK Fotocopi'], ['title' => 'About Page']);

});

// Route Blog
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

// Route Single Post
Route::get('/posts/{slug}', function ($slug) {
    
    $post = Post::find($slug);
    
    return view('post', [
        'title' => 'Blog',
        'post' => $post
    ]);
});


// Route Contact
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});