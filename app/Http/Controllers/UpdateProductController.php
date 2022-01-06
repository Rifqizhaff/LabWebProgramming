<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UpdateProductController extends Controller
{
    public function index (Request $request)
    {
        return view('pages.updateProduct');

        

    }
    public function edit($id)
    {
        $item = Product::findOrFail($id);

        return view('pages.updateProduct', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $data['image'] = $request->file('image')->store(
            'assets/gallery', 'public'
        );

        $item = Product::findOrFail($id);
        $item -> update($data);

        return redirect()->route('home')->with('success','Product Succesfully Added!');
    }
}
