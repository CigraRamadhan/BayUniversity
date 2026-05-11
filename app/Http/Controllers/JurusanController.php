<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusan = Jurusan::all();
        return view('jurusan.index', compact('jurusan'));
    }

    public function create()
    {
        return view('jurusan.create');
    }

    public function store(Request $request)
    {
        Jurusan::create($request->all());
        return redirect()->route('jurusan.index');
    }

    public function edit($id)
    {
        $jurusan = Jurusan::find($id);
        return view('jurusan.edit', compact('jurusan'));
    }

    public function update(Request $request, $id)
    {
        Jurusan::find($id)->update($request->all());
        return redirect()->route('jurusan.index');
    }

    public function destroy($id)
    {
        Jurusan::destroy($id);
        return redirect()->route('jurusan.index');
    }
}