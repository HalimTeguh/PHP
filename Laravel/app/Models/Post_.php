<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Virgo & The Sparkings",
            "slug" => "virgo-&-the-sparkings",
            "author" => "Ody C. Harahap",
            "body" => "
            Virgo and The Sparklings adalah sebuah film laga tentang pahlawan super 
            Indonesia yang dibuat berdasarkan komik Webtoon yang berjudul Virgo and The 
            Sparklings karya Annisa Nisfihani dan Ellie Goh.
            "
        ],
        [
            "title" => "Jalan yang Jauh, Jangan Lupa Pulang",
            "slug" => "jalan-yang-jauh,-jangan-lupa-pulang",
            "author" => "Angga Dwimas Sasongko",
            "body" => "
            Film ini adalah sekuel dari film Nanti Kita Cerita Tentang Hari ini (NKCTHI). 
            Menampilkan lanjutan perjalanan Aurora (Sheila Dara) yang harus pergi ke London 
            untuk meneruskan studinya. Keadaan tampaknya tak semulus yang diharapkan. 
            Hal ini ditunjukkan dengan adanya kehadiran Awan (Amanda Rachel) dan Angkasa 
            (Rio Dewanto) yang sampai menyusul ke tempat Aurora kuliah di London.
            "
        ],
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function findPost($slug){
        $blog_posts = static::all();
        // $newPost = [];
        // foreach(self::$blog_posts as $post){
        //     if($post["slug"] == $slug){
        //         $newPost = $post;
        //     }
        // }
        return $blog_posts->firstWhere('slug', $slug);
    }
}
