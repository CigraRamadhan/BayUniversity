<?php

namespace App\Http\Controllers;

use App\Models\Krs;
use App\Models\Mahasiswa;
use App\Models\Matkul;
use Illuminate\Http\Request;

class KrsController extends Controller
{
    public function index()
    {
        $krs = Krs::with(['mahasiswa', 'matkul'])->get();
        return view('krs.index', compact('krs'));
    }

    public function create()
    {
        $mahasiswa = Mahasiswa::all();
        $matkul = Matkul::all();
        return view('krs.create', compact('mahasiswa', 'matkul'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mahasiswa_id' => 'required',
            'matkul_id' => 'required',
            'semester' => 'required',
            'tahun_akademik' => 'required',
        ]);

        Krs::create($request->all());
        return redirect()->route('krs.index')->with('success', 'KRS berhasil ditambahkan');
    }

    public function edit($id)
    {
        $krs = Krs::find($id);
        $mahasiswa = Mahasiswa::all();
        $matkul = Matkul::all();
        return view('krs.edit', compact('krs', 'mahasiswa', 'matkul'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'mahasiswa_id' => 'required',
            'matkul_id' => 'required',
            'semester' => 'required',
            'tahun_akademik' => 'required',
        ]);

        Krs::find($id)->update($request->all());
        return redirect()->route('krs.index')->with('success', 'KRS berhasil diupdate');
    }

    public function destroy($id)
    {
        Krs::destroy($id);
        return redirect()->route('krs.index')->with('success', 'KRS berhasil dihapus');
    }
}