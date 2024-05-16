@extends('layouts.app')

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Manajemen Kas'])
<div class="row mt-4 mx-3">
    <div class="col-12">
        @if(session('success'))
        <div id="success-alert" class="alert alert-success alert-dismissible fade show text-white" role="alert">
            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
            <span class="alert-text"><strong>{{ session('success') }}</strong></span>
            <button type="button" class="btn-close pt-3" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>
        <script>
        // Membuat fungsi untuk menyembunyikan alert setelah 2 detik
        setTimeout(function() {
            document.getElementById('success-alert').style.display = 'none';
        }, 2000);
        </script>
        @endif
        <div class="card mb-4">
            <div class="card-header pb-0">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-form">
                    <i class="fa-solid fa-plus" style="margin-right: 5px;"></i> Kas Rutin</a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0" style="height: 180px;">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    No
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Tanggal
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Nama Kegiatan
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Deskripsi</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle text-center text-sm">1</td>
                                <td class="align-middle text-sm">
                                    <p class="text-sm font-weight-bold text-center mb-0">26-02-2024</p>
                                </td>
                                <td class="align-middle text-sm">
                                    <p class="text-sm font-weight-bold text-center mb-0">Pertemuan 1</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-sm font-weight-bold mb-0">ini adalah pertemuan 1</p>
                                </td>
                                <td class="align-middle text-end">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <a class="btn btn-success mt-2" href="#"
                                            target="_blank" style="margin-right: 5px; font-size: 12px;"><i
                                                class="fa-solid fa-expand" style="margin-right: 5px;"></i> Scan</a>

                                        <a class="btn btn-danger mt-2" onclick="#"
                                            style="font-size: 12px;"><i class="fa-solid fa-trash"
                                                style="margin-right: 5px;"></i> Delete</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle text-center text-sm">2</td>
                                <td class="align-middle text-sm">
                                    <p class="text-sm font-weight-bold text-center mb-0">27-02-2024</p>
                                </td>
                                <td class="align-middle text-sm">
                                    <p class="text-sm font-weight-bold text-center mb-0">Pertemuan 2</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-sm font-weight-bold mb-0">ini adalah pertemuan 2</p>
                                </td>
                                <td class="align-middle text-end">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <a class="btn btn-success mt-2" href="#"
                                            target="_blank" style="margin-right: 5px; font-size: 12px;"><i
                                                class="fa-solid fa-expand" style="margin-right: 5px;"></i> Scan</a>

                                        <a class="btn btn-danger mt-2" onclick="#"
                                            style="font-size: 12px;"><i class="fa-solid fa-trash"
                                                style="margin-right: 5px;"></i> Delete</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="card mb-4 mt-4">
            <div class="card-header pb-0">
                <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-form">
                    <i class="fa-solid fa-plus" style="margin-right: 5px;"></i> Arus Kas</a>
                <p class="text-secondary">Saldo Terkini : Rp. 50.000</p>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0" style="height: 180px;">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    No
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Tanggal
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Nama Kegiatan
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Jenis Kas
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Jumlah
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Keterangan</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle text-center text-sm">1</td>
                                <td class="align-middle text-sm">
                                    <p class="text-sm font-weight-bold text-center mb-0">26-02-2024</p>
                                </td>
                                <td class="align-middle text-sm">
                                    <p class="text-sm font-weight-bold text-center mb-0">Pertemuan 1</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-sm font-weight-bold mb-0">Kas Masuk</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-sm font-weight-bold mb-0">Rp. 100.000</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-sm font-weight-bold mb-0">Kas Rutin</p>
                                </td>
                                <td class="align-middle text-end">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <a class="btn btn-danger mt-2" onclick="#"
                                            style="font-size: 12px;"><i class="fa-solid fa-trash"
                                                style="margin-right: 5px;"></i> Delete</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle text-center text-sm">2</td>
                                <td class="align-middle text-sm">
                                    <p class="text-sm font-weight-bold text-center mb-0">26-02-2024</p>
                                </td>
                                <td class="align-middle text-sm">
                                    <p class="text-sm font-weight-bold text-center mb-0">Acara First Meet</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-sm font-weight-bold mb-0">Kas Keluar</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-sm font-weight-bold mb-0">Rp. 50.000</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-sm font-weight-bold mb-0">Keperluan cetak banner</p>
                                </td>
                                <td class="align-middle text-end">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <a class="btn btn-danger mt-2" onclick="#"
                                            style="font-size: 12px;"><i class="fa-solid fa-trash"
                                                style="margin-right: 5px;"></i> Delete</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>


        </div>
    </div>
</div>


<!-- modal -->
<div class="col-md-4">
    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card card-plain">
                        <div class="card-header pb-0 text-left">
                            <h3 class="font-weight-bolder text-info text-gradient text-center">Tambah Kas</h3>
                            <p class="mb-0 text-center">Tambahkan sesi untuk penambahan kas</p>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('sesi-absensi') }}" method="post" role="form text-left">
                                {{ csrf_field() }}

                                <label>Tanggal</label>
                                <div class="input-group mb-3">
                                    <input type="date" class="form-control" name="tanggal">
                                </div>
                                <label>Kegiatan</label>
                                <div class="input-group mb-3">
                                    <select name="kegiatan" id="selectKegiatan" class="form-control">
                                        <option value="">-- Pilih Kegiatan Kas --</option>
                                        <option value="Pertemuan 1">Pertemuan 1</option>
                                    </select>
                                </div>
                                <input type="hidden" name="deskripsi" id="dataDeskripsi" value="ini adalah pertemuan 1">
                                <label>Deskripsi Kegiatan</label>
                                <div class="input-group mb-1">
                                    <textarea name="nama_kegiatan" id="deskripsiKegiatan" cols="30" rows="4"
                                        class="form-control" placeholder="Masukkan deskripsi kegiatan"></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit"
                                        class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Tambah
                                        Sesi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
function confirmDelete(itemId) {
    var isConfirmed = confirm("Apakah anda yakin ingin menghapus data ini?");

    if (isConfirmed) {
        // Jika pengguna mengonfirmasi, arahkan ke URL delete dengan ID
        window.location.href = '/delete-sesi/' + itemId;
    } else {
        // Jika pengguna membatalkan, tidak lakukan apa-apa
    }
}
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Ambil elemen-elemen yang dibutuhkan
        var selectKegiatan = document.getElementById("selectKegiatan");
        var deskripsiKegiatan = document.getElementById("deskripsiKegiatan");
        var dataDeskripsi = document.getElementById("dataDeskripsi");

        // Tambahkan event listener untuk perubahan pada select
        selectKegiatan.addEventListener("change", function() {
            // Set nilai deskripsi sesuai dengan nilai select
            deskripsiKegiatan.value = dataDeskripsi.value;
        });
    });
</script>



@endsection