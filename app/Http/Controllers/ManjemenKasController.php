<?php

namespace App\Http\Controllers;

use App\Models\SesiKas;
use App\Models\Sesi;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ManajemenKasController extends Controller
{
    public function show()
    {
        $data = Sesi::with('SesiKas')->get();
        return view('pages.manajemen_kas', ['data' => $data]);
    }

    public function getDeskripsi($id)
    {
        // Ambil deskripsi berdasarkan ID
        $deskripsi = Sesi::where('id_sesi', $id)->value('nama_kegiatan');

        return response()->json($deskripsi);
    }
}
