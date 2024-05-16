@extends('layouts.app')

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Detail - Absensi'])
<div class="row mt-4 mx-3">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0 mb-0">
                <a href="javascript:history.back()" class="btn btn-success">
                    <i class="fa-solid fa-angle-left"></i></a>
            </div>
            <div style="margin-top: -20px;">
                <h3 class="mb-0 text-center">Detail Absensi</h3>
                <p class="text-sm text-center">{{ $data->judul }}</p>
            </div>
            <div class="card-header pb-0 mb-2" style="margin-top: -10px;">
                <p class="text-sm">Deskripsi : <br>{{ $data->deskripsi_kegiatan }}</p>
            </div>
            <div class="table-responsive p-0 mb-4">
                <table class="table align-items-center mb-0" id="dataAbsensiContainer">
                    <thead>
                        <tr>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                No
                            </th>
                            <th
                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                NIM
                            </th>
                            <th
                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Nama Mahasiswa
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Divisi</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Waktu Absen</th>
                        </tr>
                    </thead>
                    <?php 
                            $i = 1; 
                        ?>
                    @foreach ($dataPresensi as $presensi)
                    <tbody>
                        <tr>
                            <td td class="align-middle text-center text-sm"><?= $i ?></td>
                            <td>
                                <p class="text-sm mb-0">{{ $presensi->nim }}</p>
                            </td>
                            <td>
                                <p class="text-sm mb-0">{{ $presensi->nama_mahasiswa }}</p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-sm mb-0">
                                    @if($presensi['divisi'] == 1)
                                    Divisi Humas
                                    @elseif($presensi['divisi'] == 2)
                                    Divisi Acara
                                    @elseif($presensi['divisi'] == 3)
                                    Divisi Kominfo
                                    @else
                                    Divisi Lainnya
                                    @endif
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-sm mb-0">
                                    {{ $presensi->waktu_absen }}</p>
                            </td>
                        </tr>
                    </tbody>
                    <?php $i++; ?>
                    @endforeach
                </table>
            </div>


        </div>
    </div>
</div>

@endsection