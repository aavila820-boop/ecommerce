<?php
namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function create() {
        return view('admin.brands.create');
    }

    public function table(){
        $brands = Brand::orderBy('id', 'desc')->paginate(10);
        return view('admin.brands.table',[
            'brands'=>$brands
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Brand::create([
            'name' => $request->get('name')
        ]);

        return redirect()->route('admin.brands.table');
    }

    function delete(Brand $brand)
    {
        $brand->delete();
        return redirect()->back();
    }
}
