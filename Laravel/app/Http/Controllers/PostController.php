<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function show($slug){
        return view('post', [
            "halaman" => "single Post",
            "post" => Post::findPost($slug)
        ]);
    }


}
