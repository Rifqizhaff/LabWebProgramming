<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsertProductController extends Controller
{
    public function index (Request $request)
    {
        return view('pages.insertProduct');
    }
}
