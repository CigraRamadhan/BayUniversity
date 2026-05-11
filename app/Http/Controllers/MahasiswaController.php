<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Jurusan;
use App\Models\Kelas;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::with(['jurusan', 'kelas'])->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        $jurusan = Jurusan::all();
        $kelas = Kelas::all();
        return view('mahasiswa.create', compact('jurusan', 'kelas'));
    }

    public function store(Request $request)
    {
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $jurusan = Jurusan::all();
        $kelas = Kelas::all();
        return view('mahasiswa.edit', compact('mahasiswa', 'jurusan', 'kelas'));
    }

    public function update(Request $request, $id)
    {
        Mahasiswa::find($id)->update($request->all());
        return redirect()->route('mahasiswa.index');
    }

    public function destroy($id)
    {
        Mahasiswa::destroy($id);
        return redirect()->route('mahasiswa.index');
    }
}