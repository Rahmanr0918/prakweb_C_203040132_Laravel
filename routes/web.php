<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "nama" => "Rahman Ramadan",
        "email" => "rahmanr0918@gmail.com"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
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
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium sunt cumque qui quam sapiente voluptatem esse aut tempora, reprehenderit aperiam repellat eveniet iure repellendus inventore. Assumenda deleniti excepturi cupiditate quaerat magni velit nesciunt quasi voluptatem? Facere necessitatibus ratione quidem doloremque quos, animi consequuntur nobis, totam autem dignissimos quo, blanditiis aliquid nisi veniam atque vero perferendis! Deserunt earum animi libero in est ipsam possimus delectus illum suscipit optio quam quod, sed commodi sunt eligendi perferendis pariatur molestiae impedit cumque. Aspernatur reiciendis vitae modi quam provident consectetur quia temporibus nam eius minus nostrum perspiciatis, veniam explicabo, assumenda, ratione amet porro officia suscipit."
        ]
    ];

    return view('posts', [
        "tittle" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
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
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium sunt cumque qui quam sapiente voluptatem esse aut tempora, reprehenderit aperiam repellat eveniet iure repellendus inventore. Assumenda deleniti excepturi cupiditate quaerat magni velit nesciunt quasi voluptatem? Facere necessitatibus ratione quidem doloremque quos, animi consequuntur nobis, totam autem dignissimos quo, blanditiis aliquid nisi veniam atque vero perferendis! Deserunt earum animi libero in est ipsam possimus delectus illum suscipit optio quam quod, sed commodi sunt eligendi perferendis pariatur molestiae impedit cumque. Aspernatur reiciendis vitae modi quam provident consectetur quia temporibus nam eius minus nostrum perspiciatis, veniam explicabo, assumenda, ratione amet porro officia suscipit."
        ]
    ];

    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "tittle" => "Single Post",
        "post" => $new_post
    ]);
});
