<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Pages']);
});

Route::get('/about', function(){
    return view('about', ['name' => 'Muhammad Adnan', 'title' => 'About Pages']);
});

Route::get('/posts', function(){
    return view('posts', ['title' => 'Blog Pages', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function(Post $post){
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user}', function(User $user){
    return view('posts', ['title' => 'Article by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/contact', function(){
    return view('contact', ['ig' => 'adnn.ngr', 'no' => '08957051803', 'title' => 'Contact Pages']);
});

// BUat 2 rute baru
// 1. /blog
// 2. buat artikel, judul dan isi
// 3. /contact
// email / sosial media