<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TransactionRequest;
use App\Models\Transaction;
use Illuminate\Support\Str;

class DetailTransactionController extends Controller
{
    public function index (Request $id)
    {
        $item = Transaction::with([
            'detail', 'product', 'user'
        ])->findOrFail($id);

        return view('pages.detailTransaction', [
            'item' => $item
        ]);
    }
}
