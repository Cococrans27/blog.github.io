<?php
namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Kk Fotocopy',
                'body' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus cum ea aperiam quis 
      ducimus et, voluptatum nesciunt nulla modi sed, suscipit, soluta porro unde repellendus
      ullam. Quam similique porro doloremque! Lorem ipsum dolor sit amet consectetur adipisicing
      elit. Natus cum ea aperiam quis
      ducimus et, voluptatum nesciunt nulla modi sed, suscipit, soluta porro unde repellendus'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'KK Fotocopy',
                'body' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus cum ea aperiam quis 
      ducimus et, voluptatum nesciunt nulla modi sed, suscipit, soluta porro unde repellendus
      ullam. Quam similique porro doloremque! Lorem ipsum dolor sit amet consectetur adipisicing
      elit. Natus cum ea aperiam quis
      ducimus et, voluptatum nesciunt nulla modi sed, suscipit, soluta porro unde repellendus'
            ]
            ];
    }

    static function find($slug)
    {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
        
        if (!$post) {
            abort(404);
        }
        return $post;
    }
}