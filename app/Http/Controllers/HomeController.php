<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index (Request $request)
    {
        // return view('pages.home');

        $items = Product::all();

        return view('pages.home',[
            'items' => $items
        ]);
    }

    // public function show_product($id)
    // {
    //     $items = Product::find($id);
    //     return view('pages.detail', ['items' => $items]);
    // }
}
