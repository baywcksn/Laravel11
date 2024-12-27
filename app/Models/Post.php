<?php

namespace App\Models;

use Illuminate\Support\Arr;

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

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);


        if (!$post) {
            abort(404);
        }

        return $post;
    }
}