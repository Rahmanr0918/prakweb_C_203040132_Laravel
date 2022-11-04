<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Rahman Ramadan',
        //     'email' => 'rahman@gmail.com',
        //     'password' => bcrypt('12345')

        // ]);

        // User::create([
        //     'name' => 'Galih',
        //     'email' => 'Galih@gmail.com',
        //     'password' => bcrypt('12345')

        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'web-Programming',
            'slug' => 'web-Programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'Personal'
        ]);

        Post::factory(10)->create();

        /*    Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-Pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto iste veritatis saepe similique sit itaque praesentium exercitationem!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto iste veritatis saepe similique sit itaque praesentium exercitationem! Adipisci facere laboriosam excepturi nemo fugiat quae neque necessitatibus asperiores, commodi eveniet error alias officia est. Fugiat numquam delectus corporis autem ut atque nisi excepturi, commodi beatae earum soluta eos doloribus illo sequi? Ab nobis ratione labore accusamus? Natus culpa quia maiores! Molestias iste eum error corrupti, nam voluptates neque facilis pariatur. Dolor nostrum, quisquam nemo libero quibusdam numquam. Modi, corporis libero maiores culpa possimus impedit? Sequi, ratione? Dolore nisi pariatur quos aperiam minus, natus voluptas dolorum! Mollitia aspernatur saepe nobis asperiores aut.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-Kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto iste veritatis saepe similique sit itaque praesentium exercitationem!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto iste veritatis saepe similique sit itaque praesentium exercitationem! Adipisci facere laboriosam excepturi nemo fugiat quae neque necessitatibus asperiores, commodi eveniet error alias officia est. Fugiat numquam delectus corporis autem ut atque nisi excepturi, commodi beatae earum soluta eos doloribus illo sequi? Ab nobis ratione labore accusamus? Natus culpa quia maiores! Molestias iste eum error corrupti, nam voluptates neque facilis pariatur. Dolor nostrum, quisquam nemo libero quibusdam numquam. Modi, corporis libero maiores culpa possimus impedit? Sequi, ratione? Dolore nisi pariatur quos aperiam minus, natus voluptas dolorum! Mollitia aspernatur saepe nobis asperiores aut.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-Ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto iste veritatis saepe similique sit itaque praesentium exercitationem!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto iste veritatis saepe similique sit itaque praesentium exercitationem! Adipisci facere laboriosam excepturi nemo fugiat quae neque necessitatibus asperiores, commodi eveniet error alias officia est. Fugiat numquam delectus corporis autem ut atque nisi excepturi, commodi beatae earum soluta eos doloribus illo sequi? Ab nobis ratione labore accusamus? Natus culpa quia maiores! Molestias iste eum error corrupti, nam voluptates neque facilis pariatur. Dolor nostrum, quisquam nemo libero quibusdam numquam. Modi, corporis libero maiores culpa possimus impedit? Sequi, ratione? Dolore nisi pariatur quos aperiam minus, natus voluptas dolorum! Mollitia aspernatur saepe nobis asperiores aut.',
            'category_id' => 2,
            'user_id' => 2
        ]); 
        
    */
    }
}
