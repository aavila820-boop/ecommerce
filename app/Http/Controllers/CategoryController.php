<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.categories.create');
    }

    public function table(){
        $categories = Category::orderBy('id', 'desc')->paginate(10);
        return view('admin.categories.table',[
            'categories'=>$categories
        ]);
    }

    public function store(Request $request)
    {

        Category::create([
            'name' => $request->get('name')
        ]);

        return redirect()->route('admin.categories.table');
    }

    function delete(Category $category)
    {
        $category->delete();
        return redirect()->back();
    }
}
