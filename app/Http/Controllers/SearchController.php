<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function index (Request $request)
    {
        $items = Product::all();

        return view('pages.search',[
            'items' => $items
        ]);
    }
}
