@extends('layouts.app')

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Tambah Anggota'])

<div class="row mt-4 mx-3 mb-4">
    <div class="col-12">
        <div class="card card-profile">
            <div class="card-header pb-0">
                <a href="javascript:history.back()" class="btn btn-success">
                    <i class="fa-solid fa-angle-left"></i></a>
            </div>
            <div class="card-header border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
                <form action="{{ route('post-anggota') }}" method="post" role="form">
                    {{ csrf_field() }}
                    <!-- EMAIL -->
                    <div class="form-group col-md-12 justify-content-center">
                        <div class="mb-3">
                            <label for="inputNIS" class="form-label" style=" font-size: 14px;">NIM Mahasiswa</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Masukkan NIM"
                                aria-label="Email" name="nis">
                        </div>
                        <div class="mb-3">
                            <label for="inputNama" class="form-label" style=" font-size: 14px;">Nama Lengkap</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Masukkan nama lengkap"
                                aria-label="Email" name="nama_siswa">
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="inputDivisi" class="form-label" style=" font-size: 14px;">Divisi</label>
                                <select id="kelas" name="id_kelas" class="form-control form-control-lg">
                                    <option value="">-- Pilih Divisi --</option>
                                    <option value="1">Divisi Humas</option>
                                    <option value="2">Divisi Acara</option>
                                    <option value="3">Divisi Kominfo</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputJenisKelamin" class="form-label" style=" font-size: 14px;">Jenis
                                    Kelamin</label>
                                <?php
                                    if (old('jk')) {
                                        $l = (old('jk') ?? $oldInput['jk']) == '1' ? 'checked' : '';
                                        $p = (old('jk') ?? $oldInput['jk']) == '2' ? 'checked' : '';
                                    }
                                ?>
                                <div class="pt-0" id="jk">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="row">
                                                <div class="col-auto pt-2">
                                                    <input class="form-check" type="radio" name="jenis_kelamin" id="laki" value="1"
                                                        <?= $l ?? ''; ?>>
                                                </div>
                                                <div class="col pt-2" style="margin-left: -10px;">
                                                    <label class="form-check-label" for="laki">
                                                        <h6 class="text-dark">Laki-laki</h6>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-auto pt-2">
                                                    <input class="form-check" type="radio" name="jenis_kelamin" id="perempuan"
                                                        value="2" <?= $p ?? ''; ?>>
                                                </div>
                                                <div class="col pt-2" style="margin-left: -10px;">
                                                    <label class="form-check-label" for="perempuan">
                                                        <h6 class="text-dark">Perempuan</h6>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputNama" class="form-label" style=" font-size: 14px;">No Hp</label>
                            <input type="text" class="form-control form-control-lg" placeholder="+62"
                                aria-label="noHp" name="no_hp">
                        </div>

                        <!-- SUBMIT -->
                        <button type="submit" class="btn btn-primary mb-2 col-md-12">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection