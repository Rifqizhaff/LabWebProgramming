<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UpdateProfileController extends Controller
{
    public function index (Request $request)
    {
        return view('pages.updateProfile');
        // $items = User::all();

        // return view('pages.updateProfile',[
        //     'items' => $items
        // ]);
    }

    public function edit($id)
    {
        $item = User::findOrFail($id);

        return view('pages.updateProfile', [
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
    public function update(UserRequest $request, $id)
    {
        $data = $request->all();

        $item = User::findOrFail($id);
        $item -> update($data);

        return redirect()->route('home')->with('success','Product Succesfully Added!');
    }
}
