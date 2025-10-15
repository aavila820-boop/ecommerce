<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        return view('products.index');
    }

    function details($id, $category = null)
    {
        if ($category != null) {
            return view("products.detail", [
                'id' => $id,
                'category' => $category
            ]);
        } else {
            return view("products.detail", compact('id', 'category'));
        }
    }

    function create()
    {

        return view("products.create");
    }
}
