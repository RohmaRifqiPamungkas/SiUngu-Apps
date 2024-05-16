<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'presensi';
    protected $fillable = [
        'id',
        'nim',
        'nama_mahasiswa',
        'divisi',
        'id_sesi',
        'waktu_absen',
    ];
}
