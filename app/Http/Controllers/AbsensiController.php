<?php

namespace App\Http\Controllers;

use App\Models\Sesi;
use App\Models\Anggota;
use App\Models\Absensi;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Carbon\Carbon;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class AbsensiController extends Controller
{
    public function show()
    {
        return view('pages.absensi');
    }


    public function sesiAbsensi(Request $request)
    {
        //create post
        Sesi::create([
            'judul'         => $request->judul,
            'deskripsi_kegiatan'   => $request->deskripsi_kegiatan,
            'tanggal'         => $request->tanggal,
        ]);
        
        //redirect to index
        return redirect('absensi')->with(['success' => 'Sesi Berhasil Dibuat!']);
       
    }

    public function deleteSesi($id)
    {
        try {
            // Menggunakan transaksi untuk memastikan konsistensi data
            DB::beginTransaction();

            // Hapus data Absensi
            Absensi::where('id_sesi', $id)->delete();

            // Hapus data Anggota
            Sesi::where('id', $id)->delete();

            // Commit transaksi jika berhasil
            DB::commit();

            return redirect('absensi')->with(['success' => 'Data Berhasil Dihapus!']);
        } catch (\Exception $e) {
            // Rollback transaksi jika terjadi kesalahan
            DB::rollback();

            // Redirect dengan pesan kesalahan
            return redirect('absensi')->with(['error' => 'Terjadi kesalahan saat menghapus data.']);
        }
    }

    public function scanAbsen($id)
    {
        $data = Sesi::find($id);
        $dataPresensi = Absensi::where('id_sesi', $id)->get();

        return view('pages.absen-scan', compact('data', 'dataPresensi'));
    }

    public function scanUpdate($id)
    {
        $dataPresensi = Absensi::where('id_sesi', $id)->get();

        return view('pages.absen.update-absen', compact('dataPresensi'));
    }


    public function processPresensi(Request $request, $id)
    {
        $uniqueCode = $request->input('unique_code');

        $waktuAbsen = Carbon::now('Asia/Jakarta');
        // Cocokkan dengan data di database
        $anggota = Anggota::where('unique_code', $uniqueCode)->first();

        if ($anggota) {
            // Periksa apakah anggota sudah melakukan presensi
            $presensiExists = Absensi::where('nim', $anggota->nis)->where('id_sesi', $id)->exists();

            if ($presensiExists) {
                // Jika anggota sudah melakukan presensi
                return response()->json(['success' => false, 'message' => 'Anda sudah melakukan presensi.']);
            }

            // Jika anggota ditemukan dan belum melakukan presensi, simpan data ke tb_presensi
            Absensi::create([
                'nim' => $anggota->nis,
                'nama_mahasiswa' => $anggota->nama_siswa,
                'divisi' => $anggota->id_kelas,
                'id_sesi' => $id,
                'waktu_absen' => $waktuAbsen,
            ]);

            return response()->json(['success' => true, 'message' => 'Presensi anda telah direkam.']);

        } else {
            return response()->json(['success' => false, 'message' => 'QR Code tidak valid.']);
        }
    }

    // public function selesaiPresensi($id_sesi)
    // {
    //     // Lakukan operasi untuk menyelesaikan sesi presensi
    //     DB::table('tb_sesi')->where('id_sesi', $id_sesi)->update(['status' => 'selesai']);

    //     return redirect()->route('absensi')->with('success', 'Sesi presensi berhasil diakhiri.');
    // }

    public function detailAbsen($id)
    {
        $data = Sesi::find($id);
        $dataPresensi = Absensi::where('id_sesi', $id)->get();

        return view('pages.absen.detail-absen', compact('data', 'dataPresensi'));
    }
}