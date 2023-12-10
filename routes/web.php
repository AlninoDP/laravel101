<?php

use App\Http\Controllers\DataMhsController;
use App\Http\Controllers\DataNilaiController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\ReportController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;  

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

 Route::get('/report', function() {
    return view('data_akademik.data_akademik', ['title' => 'Data Akademik']);
 });
 
Route::resource('/report/data_mahasiswa', DataMhsController::class);
Route::resource('/report/matakuliah',MataKuliahController::class);
Route::resource('/report/data_nilai',DataNilaiController::class);
 