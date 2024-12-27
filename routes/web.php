<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Post
{
    public static function all()
    {
        return [

            [
                'id' => '1',
                'slug' => 'biografi-bayu',
                'title' => 'Biografi Bayu',
                'author' => 'Bayu Wiaksono',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima minus inventore ex
                    perspiciatis vero quibusdam ipsum necessitatibus rem aperiam libero! Ipsam velit esse asperiores tempora
                    debitis quae modi quod repellat!'
            ],
            [
                'id' => '2',
                'slug' => 'biografi-santi',
                'title' => 'Biografi Santi',
                'author' => 'Santi Amel',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima minus inventore ex'
            ]

        ];
    }
}

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Bayu Wicaksono', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts =
        [
            [
                'id' => '1',
                'slug' => 'biografi-bayu',
                'title' => 'Biografi Bayu',
                'author' => 'Bayu Wiaksono',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima minus inventore ex
            perspiciatis vero quibusdam ipsum necessitatibus rem aperiam libero! Ipsam velit esse asperiores tempora
            debitis quae modi quod repellat!'
            ],
            [
                'id' => '2',
                'slug' => 'biografi-santi',
                'title' => 'Biografi Santi',
                'author' => 'Santi Amel',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima minus inventore ex'
            ],
        ];

    $post = Arr::first($posts, function ($posts) use ($slug) {
        return $posts['slug'] == $slug;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

