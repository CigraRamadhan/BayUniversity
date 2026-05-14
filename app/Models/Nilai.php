<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $fillable = ['mahasiswa_id', 'matkul_id', 'nilai_tugas', 'nilai_uts', 'nilai_uas', 'nilai_akhir', 'grade'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function matkul()
    {
        return $this->belongsTo(Matkul::class);
    }

    // Auto hitung nilai akhir dan grade sebelum menyimpan
    protected static function booted()
    {
        static::saving(function ($nilai) {
            // Hitung nilai akhir: 20% tugas + 40% UTS + 40% UAS
            $tugas = $nilai->nilai_tugas ?? 0;
            $uts = $nilai->nilai_uts ?? 0;
            $uas = $nilai->nilai_uas ?? 0;
            
            $nilai_akhir = ($tugas * 0.2) + ($uts * 0.4) + ($uas * 0.4);
            $nilai->nilai_akhir = round($nilai_akhir, 2);
            
            // Tentukan grade
            if ($nilai_akhir >= 85) $nilai->grade = 'A';
            elseif ($nilai_akhir >= 80) $nilai->grade = 'A-';
            elseif ($nilai_akhir >= 75) $nilai->grade = 'B+';
            elseif ($nilai_akhir >= 70) $nilai->grade = 'B';
            elseif ($nilai_akhir >= 65) $nilai->grade = 'B-';
            elseif ($nilai_akhir >= 60) $nilai->grade = 'C+';
            elseif ($nilai_akhir >= 55) $nilai->grade = 'C';
            elseif ($nilai_akhir >= 40) $nilai->grade = 'D';
            else $nilai->grade = 'E';
        });
    }
}