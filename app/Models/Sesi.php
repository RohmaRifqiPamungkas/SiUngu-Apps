<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sesi extends Model
{
    use HasFactory;
    public $table = "sesi";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'judul',
        'deskripsi_kegiatan',
        'tanggal',
    ];
}
