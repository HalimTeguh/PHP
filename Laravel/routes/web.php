<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        "open" => "Selamat Datang",
        "name" => "Halim Teguh Saputro",
        "halaman" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('welcome', [
        "open" => "Selamat Datang",
        "name" => "Halim Teguh Saputro",
        "halaman" => "About"
    ]);
});

Route::get('/contact', function () {
    return view('welcome', [
        "open" => "Selamat Datang",
        "name" => "Halim Teguh Saputro",
        "halaman" => "Contact"
    ]);
});


Route::get('/blog', function () {
    $bodyPosts = [
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


    return view('posts', [
        "open" => "Selamat Datang",
        "name" => "Halim Teguh Saputro",
        "halaman" => "Blog",
        "posts" => $bodyPosts
    ]);
});

Route::get('post/{slug}', function($slug){

    $bodyPosts = [
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

    $newPost = [];
    foreach($bodyPosts as $post){
        if($post["slug"] == $slug){
            $newPost = $post;
        }
    }

    return view('post', [
        "halaman" => "single Post",
        "post" => $newPost 
    ]);
});