<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateProductController extends Controller
{
    public function index (Request $request)
    {
        return view('pages.updateProduct');
    }
}
