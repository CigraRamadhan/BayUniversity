<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $matakuliah = MataKuliah::all();
        return view('matakuliah.index', compact('matakuliah'));
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        MataKuliah::create($request->all());
        return redirect()->route('matakuliah.index');
    }

    public function edit($id)
    {
        $matakuliah = MataKuliah::find($id);
        return view('matakuliah.edit', compact('matakuliah'));
    }

    public function update(Request $request, $id)
    {
        matakuliah::find($id)->update($request->all());
        return redirect()->route('matakuliah.index');
    }

    public function destroy($id)
    {
        MataKuliah::destroy($id);
        return redirect()->route('matakuliah.index');
    }
}
