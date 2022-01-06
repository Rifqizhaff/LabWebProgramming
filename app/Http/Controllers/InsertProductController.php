<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InsertProductController extends Controller
{
    public function index (Request $request)
    {
        return view('pages.insertProduct');
    }

    public function create()
    {
        return view('pages.insertProduct');
    }

    public function store(ProductRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['image'] = $request->file('image')->store(
            'assets/gallery', 'public'
        );

        Product::create($data);
        return redirect()->route('pages.home')->with('success','Product Succesfully Added!');
    }
}
