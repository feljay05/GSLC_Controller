<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "Jonathan Felim Jhon",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio aliquam fuga delectus nulla modi nisi harum incidunt maxime? Expedita reiciendis facilis sapiente porro in accusamus blanditiis ad obcaecati, tempore veniam?"
        ],
        [
            "title" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "David",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio aliquam fuga delectus nulla modi nisi harum incidunt maxime? Expedita reiciendis facilis sapiente porro in accusamus blanditiis ad obcaecati, tempore veniam?WKWKKWKWKKWKWK"
        ]
        ];

        public static function all(){
            return self::$blog_posts;
        }

        public static function find($slug){
            $posts = self::$blog_posts;
            $post = [];
            foreach($posts as $p){
            if($p["slug"] === $slug){
                $post = $p;
                }
            }
            return $post;
        }
}
