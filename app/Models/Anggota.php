<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    public $table = "anggota";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nis',
        'nama_siswa',
        'id_kelas',
        'jenis_kelamin',
        'no_hp',
        'unique_code',
    ];
}
