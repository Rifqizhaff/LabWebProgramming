<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ManageUserController extends Controller
{
    public function index (Request $request)
    {
        // return view('pages.manageUser');
        $items = User::all();

        return view('pages.manageUser',[
            'items' => $items
        ]);
    }

    public function destroy(User $items)
    {
        // $item = User::findOfFail($id);
        // $item->delete();
        $items->delete();

        // return redirect()->route('home')->with('success','Product Succesfully Added!');
        return redirect()->back()->with('success','Product Succesfully Added!');
    }
}
