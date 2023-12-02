<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DataNilaiController; 

Route::get('/', function () {
    return view('home', [
        'title'=> 'Home',
    ]);
});

Route::get('/about', function() {
    return view('about', [
        'title' => 'About'
    ]);
 });

 Route::get('/post', function() {
    return view('post', [
        'title' => 'Blog',
        'post' => Post::getAllPost()
    ]);
 });

//  Route::get('/data_nilai', [DataNilaiController::class,'index']);
//  Route::get('/data_nilai', [MahasiswaController::class,'index']);