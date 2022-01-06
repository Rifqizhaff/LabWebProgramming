<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DetailController extends Controller
{
    public function index (Request $request, $slug)
    {
        // $items = Product::all();

        // return view('pages.detail',[
        //     'items' => $items
        // ]);

        $items = Product::all()->where('slug', $slug)->firstorfail();

        return view('pages.detail',[
            'items' => $items
        ]);
        
        // return view('pages.detail')->with('items', $items);

        // return view('pages.detail');
    }
}
