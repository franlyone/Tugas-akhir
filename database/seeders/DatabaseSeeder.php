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
        User::create([
            'name' => 'Franly Ansiga',
            'username' => 'Franly',
            'email' => 'franlyone@gmail,com',
            'password' => bcrypt('12345')
        ]);

        User::factory(3)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quas soluta commodi, in tempora natus vel eius officia fugiat tenetur?',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum blanditiis, delectus temporibus totam sint aspernatur deleniti. Iste, accusamus vero fugit quo, tenetur iure dolore veritatis ratione rem sunt eveniet distinctio quae, architecto numquam amet ea officia pariatur odit magnam maiores et perferendis tempore ipsam perspiciatis! Nobis consectetur hic expedita et, voluptatem maxime numquam, omnis exercitationem molestias quidem a magni quisquam. Beatae illum cupiditate, et nihil laboriosam eius accusantium earum consequuntur minus recusandae ipsa tenetur eveniet reprehenderit ducimus fugiat ullam distinctio!
        //     '
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quas soluta commodi, in tempora natus vel eius officia fugiat tenetur?',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum blanditiis, delectus temporibus totam sint aspernatur deleniti. Iste, accusamus vero fugit quo, tenetur iure dolore veritatis ratione rem sunt eveniet distinctio quae, architecto numquam amet ea officia pariatur odit magnam maiores et perferendis tempore ipsam perspiciatis! Nobis consectetur hic expedita et, voluptatem maxime numquam, omnis exercitationem molestias quidem a magni quisquam. Beatae illum cupiditate, et nihil laboriosam eius accusantium earum consequuntur minus recusandae ipsa tenetur eveniet reprehenderit ducimus fugiat ullam distinctio!
        //     '
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quas soluta commodi, in tempora natus vel eius officia fugiat tenetur?',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum blanditiis, delectus temporibus totam sint aspernatur deleniti. Iste, accusamus vero fugit quo, tenetur iure dolore veritatis ratione rem sunt eveniet distinctio quae, architecto numquam amet ea officia pariatur odit magnam maiores et perferendis tempore ipsam perspiciatis! Nobis consectetur hic expedita et, voluptatem maxime numquam, omnis exercitationem molestias quidem a magni quisquam. Beatae illum cupiditate, et nihil laboriosam eius accusantium earum consequuntur minus recusandae ipsa tenetur eveniet reprehenderit ducimus fugiat ullam distinctio!
        //     '
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quas soluta commodi, in tempora natus vel eius officia fugiat tenetur?',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum blanditiis, delectus temporibus totam sint aspernatur deleniti. Iste, accusamus vero fugit quo, tenetur iure dolore veritatis ratione rem sunt eveniet distinctio quae, architecto numquam amet ea officia pariatur odit magnam maiores et perferendis tempore ipsam perspiciatis! Nobis consectetur hic expedita et, voluptatem maxime numquam, omnis exercitationem molestias quidem a magni quisquam. Beatae illum cupiditate, et nihil laboriosam eius accusantium earum consequuntur minus recusandae ipsa tenetur eveniet reprehenderit ducimus fugiat ullam distinctio!
        //     '
        // ]);

        // User::create([
        //     'name' => 'Uzumaki Naruto',
        //     'email' => 'Naruto@gmail,com',
        //     'password' => bcrypt('12345')
        // ]);


        Category::create([
            'name' => 'Anime',
            'slug' => 'anime'
        ]);

        Category::create([
            'name' => 'Sport',
            'slug' => 'sport'
        ]);

        Category::create([
            'name' => 'Animal',
            'slug' => 'animal'
        ]);

        Post::factory(20)->create();
    }
}
