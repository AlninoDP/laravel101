<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

Route::get('/data_mhs', function (){
    return view ('data_mhs', [
        'title' => 'Data Mahasiswa'
    ]);
});