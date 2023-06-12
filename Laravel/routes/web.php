<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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


Route::get('/blog', [PostController::class, 'index']);
Route::get('post/{post:slug}', [PostController::class, 'show']);