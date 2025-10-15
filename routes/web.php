<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return "list products";
});

Route::get('/products/{id}/{category?}', function ($id, $category = null) {
    if ($category != null) {
        return "Detail products: " . $id . ". With category: " . $category;
    } else {
        return "Detail products: " . $id;
    }
});
