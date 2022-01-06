<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CartRequest;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CartController extends Controller
{
    public function index (CartRequest $request)
    {
        // return view('pages.cart');
        $items = Cart::with([
            'product', 'user'
        ])->get();

        return view('pages.cart',[
            'items' => $items
        ]);
    }
    
    public function create()
    {
        return view('pages.cart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CartRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = ($request->user_id);
        $data['product_id'] = ($request->product_id);
        $data['subtotal'] = ($request->quantity) * ($request->price);
        
        $total = collect($data)->sum('subtotal');
        // foreach ($request->subtotal as $sub){
            //     $total = $total + $sub;
            // }
        // $var = Cart::find($id);
            
        $data['grand_total'] = $total;
        

        Cart::create($data);
        return redirect()->route('pages.cart')->with('success','Product Succesfully Added!');
    }
}
