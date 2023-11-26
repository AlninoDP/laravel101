<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('home',[
        'title' => 'Home'
    ]);
});

Route::get('/about', function() {
    return view('about', [
        'title' => 'About'
    ]);
 });

 Route::get('/post', function() {
    return view('post', [
        'title' => 'Post'
    ]);
 });

Route::get('/data_mhs', [MahasiswaController::class,'showDataMhs']);