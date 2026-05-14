<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $table = 'matakuliah';

    protected $fillable = [
        'kode_matkul',
        'nama_matkul',
        'sks',
        'semester',
        'jurusan'
    ];
}