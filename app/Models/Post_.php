<?php

namespace App\Models;

class Post 
{
   static $blog_posts = [
    [
        'title' => 'judul post pertama',
        'slug' => 'judul-post-pertama',
        'author' => 'author pertama',
        'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur asperiores dicta iste culpa ex nostrum aspernatur quo veritatis! Non enim expedita nemo mollitia velit sapiente labore neque, cupiditate porro voluptate odit laudantium vitae rem harum perferendis ut! Voluptatibus enim praesentium ex repellat suscipit maiores et incidunt reprehenderit aperiam reiciendis sequi doloremque corporis labore, aliquam aut deserunt ducimus officiis, laborum molestiae facilis autem! Delectus hic odit porro ducimus beatae, veniam, dolorum tempore consectetur ad praesentium sapiente rerum, nemo obcaecati optio libero.',

    ],
    [
        'title' => 'judul post kedua',
        'slug' => 'judul-post-kedua',
        'author' => 'author kedua',
        'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur asperiores dicta iste culpa ex nostrum aspernatur quo veritatis! Non enim expedita nemo mollitia velit sapiente labore neque, cupiditate porro voluptate odit laudantium vitae rem harum perferendis ut! Voluptatibus enim praesentium ex repellat suscipit maiores et incidunt reprehenderit aperiam reiciendis sequi doloremque corporis labore, aliquam aut deserunt ducimus officiis, laborum molestiae facilis autem! Delectus hic odit porro ducimus beatae, veniam, dolorum tempore consectetur ad praesentium sapiente rerum, nemo obcaecati optio libero.',

    ],
    ];


    public static function all(){
        return collect(self::$blog_posts);
    }
    public static function find($slug){
        $posts = static::all();

       
        return $posts->firstWhere('slug', $slug);


    }



}
