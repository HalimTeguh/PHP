<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('posts', [
            "open" => "Selamat Datang",
            "name" => "Halim Teguh Saputro",
            "halaman" => "Blog",
            "posts" => Post::all()
        ]);
    }

    public function show(Post $post){
        return view('post', [
            "halaman" => "single Post",
            "post" => $post
        ]);
    } 


}
