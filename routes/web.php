<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Bayu Wicaksono']);
});

Route::get('/blog', function () {
    return view('blog', );
});

Route::get('/contact', function () {
    return view('contact');
});

