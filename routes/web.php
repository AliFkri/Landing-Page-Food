<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/products', function () {
    $products = [
        ['id' => 1, 'name' => 'Nasi Goreng Spesial', 'price' => 25000, 'image' => 'nasi_goreng.jpg'],
        ['id' => 2, 'name' => 'Mie Ayam Jamur', 'price' => 20000, 'image' => 'mie_ayam.jpg'],
        ['id' => 3, 'name' => 'Ayam Bakar Madu', 'price' => 30000, 'image' => 'ayam_bakar.jpg'],
        ['id' => 4, 'name' => 'Sate Ayam', 'price' => 25000, 'image' => 'sate_ayam.jpg'],
        ['id' => 5, 'name' => 'Soto Ayam', 'price' => 22000, 'image' => 'soto_ayam.jpg'],
        ['id' => 6, 'name' => 'Es Teh Manis', 'price' => 5000, 'image' => 'es_teh.jpg'],
    ];
    return view('products', ['products' => $products]);
});

Route::get('/contact', function () {
    return view('contact');
});