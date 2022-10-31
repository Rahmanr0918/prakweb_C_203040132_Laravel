<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rahman Ramadan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium sunt cumque qui quam sapiente voluptatem esse aut tempora, reprehenderit aperiam repellat eveniet iure repellendus inventore. Assumenda deleniti excepturi cupiditate quaerat magni velit nesciunt quasi voluptatem? Facere necessitatibus ratione quidem doloremque quos, animi consequuntur nobis, totam autem dignissimos quo, blanditiis aliquid nisi veniam atque vero perferendis! Deserunt earum animi libero in est ipsam possimus delectus illum suscipit optio quam quod, sed commodi sunt eligendi perferendis pariatur molestiae impedit cumque. Aspernatur reiciendis vitae modi quam provident consectetur quia temporibus nam eius minus nostrum perspiciatis, veniam explicabo, assumenda, ratione amet porro officia suscipit."
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Hady Ismanto",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium sunt cumque qui quam sapiente voluptatem esse aut tempora, reprehenderit aperiam repellat eveniet iure repellendus inventore. Assumenda deleniti excepturi cupiditate quaerat magni velit nesciunt quasi voluptatem? Facere necessitatibus ratione quidem doloremque quos, animi consequuntur nobis, totam autem dignissimos quo, blanditiis aliquid nisi veniam atque vero perferendis! ."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
