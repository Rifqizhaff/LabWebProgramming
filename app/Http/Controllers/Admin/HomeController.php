<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(Request $request){
        $items = Product::all();

        return view('pages.home',[
            'items' => $items
        ]);
        
    }
    public function show_product($id)
    {
        $items = Product::find($id);
        return view('pages.detail', ['product' => $items]);
    }
}
