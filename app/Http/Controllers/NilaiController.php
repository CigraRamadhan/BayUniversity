<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Mahasiswa;
use App\Models\Matkul;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::with(['mahasiswa', 'matkul'])->get();
        return view('nilai.index', compact('nilai'));
    }

    public function create()
    {
        $mahasiswa = Mahasiswa::all();
        $matkul = Matkul::all();
        return view('nilai.create', compact('mahasiswa', 'matkul'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mahasiswa_id' => 'required',
            'matkul_id' => 'required',
            'nilai_tugas' => 'nullable|numeric|min:0|max:100',
            'nilai_uts' => 'nullable|numeric|min:0|max:100',
            'nilai_uas' => 'nullable|numeric|min:0|max:100',
        ]);

        Nilai::create($request->all());
        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil ditambahkan');
    }

    public function edit($id)
    {
        $nilai = Nilai::find($id);
        $mahasiswa = Mahasiswa::all();
        $matkul = Matkul::all();
        return view('nilai.edit', compact('nilai', 'mahasiswa', 'matkul'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'mahasiswa_id' => 'required',
            'matkul_id' => 'required',
            'nilai_tugas' => 'nullable|numeric|min:0|max:100',
            'nilai_uts' => 'nullable|numeric|min:0|max:100',
            'nilai_uas' => 'nullable|numeric|min:0|max:100',
        ]);

        Nilai::find($id)->update($request->all());
        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil diupdate');
    }

    public function destroy($id)
    {
        Nilai::destroy($id);
        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil dihapus');
    }
}