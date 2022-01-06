<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TransactionRequest;
use App\Models\Transaction;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    public function index (TransactionRequest $request)
    {
        // return view('pages.transaction');
        $items = Transaction::with([
            'details', 'product', 'user', 'cart'
        ])->get();

        return view('pages.transaction',[
            'items' => $items
        ]);
    }

}
