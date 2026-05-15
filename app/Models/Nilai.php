<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'nilai';

    protected $fillable = [
        'nama_mahasiswa',
        'mata_kuliah',
        'tugas',
        'uts',
        'uas',
        'nilai_akhir',
        'grade'
    ];
}