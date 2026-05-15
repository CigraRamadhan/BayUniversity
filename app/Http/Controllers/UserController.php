<?php

namespace App\Http\Controllers;

use App\Models\Userrs;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = Userrs::all();
        return view('user.index', compact('user'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        Userrs::create($request->all());
        return redirect()->route('user.index');
    }

    public function edit($id)
    {
        $user = Userrs::find($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        Userrs::find($id)->update($request->all());
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        Userrs::destroy($id);
        return redirect()->route('user.index');
    }
}