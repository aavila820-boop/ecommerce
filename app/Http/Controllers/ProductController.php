<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        return "list products";
    }

    function create()
    {
        return "FORM FOR CREATE PRODUCTS";
    }

    function details($id, $category = null)
    {
        if ($category != null) {
            return "Detail products: " . $id . ". With category: " . $category;
        } else {
            return "Detail products: " . $id;
        }
    }
}
