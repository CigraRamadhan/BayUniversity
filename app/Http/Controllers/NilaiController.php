<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::all();
        return view('nilai.index', compact('nilai'));
    }

    public function create()
    {
        return view('nilai.create');
    }

    public function store(Request $request)
    {
        Nilai::create($request->all());
        return redirect()->route('nilai.index');
    }

    public function edit($id)
    {
        $nilai = Nilai::find($id);
        return view('nilai.edit', compact('nilai'));
    }

    public function update(Request $request, $id)
    {
        Nilai::find($id)->update($request->all());
        return redirect()->route('nilai.index');
    }

    public function destroy($id)
    {
        Nilai::destroy($id);
        return redirect()->route('nilai.index');
    }
}