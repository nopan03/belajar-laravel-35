<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about', [
        'nama' => 'Novan Wahyu H', 
        'umur' => 17, 
        'alamat' => 'Sidoarjo',
    ]); //data diatas digunakan untuk menampilkan informasi tentang diri sendiri
});


//route view itu di gunakan untuk menampilkan halaman statis
//bedanya dengan route get adalah route view tidak memerlukan closure 
//closure adalah fungsi yang tidak memiliki nama seperti (function() {})
Route::view('/contact', 'pages.contact');
Route::view('/product', 'pages.product');