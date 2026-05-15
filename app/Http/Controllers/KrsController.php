<?php

namespace App\Http\Controllers;

use App\Models\krs;
use Illuminate\Http\Request;

class KrsController extends Controller
{
    public function index()
    {
        $krs = Krs::all();
        return view('krs.index', compact('krs'));
    }

    public function create()
    {
        return view('krs.create');
    }

    public function store(Request $request)
    {
        Krs::create($request->all());
        return redirect()->route('krs.index');
    }

    public function edit($id)
    {
        $krs = Krs::find($id);
        return view('krs.edit', compact('krs'));
    }

    public function update(Request $request, $id)
    {
        Krs::find($id)->update($request->all());
        return redirect()->route('krs.index');
    }

    public function destroy($id)
    {
        Krs::destroy($id);
        return redirect()->route('krs.index');
    }
}
