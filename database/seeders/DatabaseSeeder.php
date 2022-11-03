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
        //     'name' => 'Alfi Syahrin R',
        //     'email' => 'alfisyahrin672@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Mamank Ginanjar',
        //     'email' => 'mamank12@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo mollitia',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo mollitia quia sunt inventore vitae illum eius est quidem. Temporibus fugit excepturi omnis ratione amet necessitatibus atque in beatae voluptate vero! Laborum explicabo molestiae dolores odit minima reprehenderit animi, velit voluptatum accusantium neque ex necessitatibus nemo, atque dolorem, quidem expedita nulla maxime est architecto rem? A, vero quis, exercitationem sequi quisquam corrupti facere atque neque porro quam voluptates ut animi nihil iure consequuntur voluptatum ipsa aspernatur quidem illum! Quidem ex, veritatis placeat numquam aliquid culpa iusto? Quae corrupti optio ducimus dolor tempore dolore animi facilis eaque ad laboriosam. Inventore, deserunt quae.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo mollitia',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo mollitia quia sunt inventore vitae illum eius est quidem. Temporibus fugit excepturi omnis ratione amet necessitatibus atque in beatae voluptate vero! Laborum explicabo molestiae dolores odit minima reprehenderit animi, velit voluptatum accusantium neque ex necessitatibus nemo, atque dolorem, quidem expedita nulla maxime est architecto rem? A, vero quis, exercitationem sequi quisquam corrupti facere atque neque porro quam voluptates ut animi nihil iure consequuntur voluptatum ipsa aspernatur quidem illum! Quidem ex, veritatis placeat numquam aliquid culpa iusto? Quae corrupti optio ducimus dolor tempore dolore animi facilis eaque ad laboriosam. Inventore, deserunt quae.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo mollitia',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo mollitia quia sunt inventore vitae illum eius est quidem. Temporibus fugit excepturi omnis ratione amet necessitatibus atque in beatae voluptate vero! Laborum explicabo molestiae dolores odit minima reprehenderit animi, velit voluptatum accusantium neque ex necessitatibus nemo, atque dolorem, quidem expedita nulla maxime est architecto rem? A, vero quis, exercitationem sequi quisquam corrupti facere atque neque porro quam voluptates ut animi nihil iure consequuntur voluptatum ipsa aspernatur quidem illum! Quidem ex, veritatis placeat numquam aliquid culpa iusto? Quae corrupti optio ducimus dolor tempore dolore animi facilis eaque ad laboriosam. Inventore, deserunt quae.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-Empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo mollitia',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo mollitia quia sunt inventore vitae illum eius est quidem. Temporibus fugit excepturi omnis ratione amet necessitatibus atque in beatae voluptate vero! Laborum explicabo molestiae dolores odit minima reprehenderit animi, velit voluptatum accusantium neque ex necessitatibus nemo, atque dolorem, quidem expedita nulla maxime est architecto rem? A, vero quis, exercitationem sequi quisquam corrupti facere atque neque porro quam voluptates ut animi nihil iure consequuntur voluptatum ipsa aspernatur quidem illum! Quidem ex, veritatis placeat numquam aliquid culpa iusto? Quae corrupti optio ducimus dolor tempore dolore animi facilis eaque ad laboriosam. Inventore, deserunt quae.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
