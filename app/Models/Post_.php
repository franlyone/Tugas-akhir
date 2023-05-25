<?php

namespace App\Models;



class Post
{
   private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Franly Ansiga",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus ea consequuntur illum explicabo molestiae aliquid cumque quibusdam ducimus dolores laudantium dolorem neque, dolore odio excepturi debitis, unde, facilis deleniti aperiam accusamus quos harum adipisci. Voluptatibus porro iusto cupiditate ab suscipit ea doloribus dignissimos sint alias, et, fuga sed reprehenderit voluptatum architecto nobis ipsam molestias, maxime incidunt a quos quaerat saepe? Ut in, fugiat rerum modi, odio ipsum quasi, est non nam amet error sunt sed perspiciatis saepe! Perferendis, vel est?"
        ],

        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Naruto Uzumaki",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat, illo error? Soluta voluptatibus delectus tempore iusto unde minima incidunt temporibus, quam deleniti rerum, tempora id aspernatur voluptates, alias eius? Hic corrupti, voluptatibus similique ex officiis facere impedit ab, officia cupiditate autem voluptatem optio doloremque unde fuga molestias voluptates omnis molestiae suscipit nam, debitis culpa natus non? Perspiciatis, consequuntur! Dolore, rem. Modi totam quaerat pariatur deserunt quod iste aperiam quas minus illum beatae nobis, explicabo omnis voluptas. Beatae unde officiis tempora necessitatibus obcaecati quae, consequuntur rem accusamus aliquid voluptatem magnam modi corrupti fugiat provident, illum autem dicta facere velit quibusdam adipisci!"
        ],

        [
            "title" => "Judul Post Ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "Monkey D Luffy",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus ea consequuntur illum explicabo molestiae aliquid cumque quibusdam ducimus dolores laudantium dolorem neque, dolore odio excepturi debitis, unde, facilis deleniti aperiam accusamus quos harum adipisci. Voluptatibus porro iusto cupiditate ab suscipit ea doloribus dignissimos sint alias, et, fuga sed reprehenderit voluptatum architecto nobis ipsam molestias, maxime incidunt a quos quaerat saepe? Ut in, fugiat rerum modi, odio ipsum quasi, est non nam amet error sunt sed perspiciatis saepe! Perferendis, vel est?"
        ]
        ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    
    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstwhere('slug', $slug);
    }
}
