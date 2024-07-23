@extends('layouts.app')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Edit Foto'])

    <div class="row mt-4 mx-3 mb-4">
        <div class="col-12">
            <div class="card card-profile">
                <div class="card-header pb-0">
                    <a href="{{ route('pages.gallery.index') }}" class="btn btn-success">
                        <i class="fa-solid fa-angle-left"></i></a>
                </div>
                <div class="card-header border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
                    <form action="{{ route('pages.gallery.update', $photo->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- TITLE -->
                        <div class="mb-3">
                            <label for="inputTitle" class="form-label" style="font-size: 14px;">Judul Foto</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Masukkan Judul" aria-label="Title" name="title" value="{{ $photo->title }}" required>
                            @error('title')
                                <div class="text-danger" style="font-size: 12px;">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- PHOTO -->
                        <div class="mb-3">
                            <label for="inputPhoto" class="form-label" style="font-size: 14px;">Foto</label>
                            <input type="file" class="form-control" name="photo" id="photo">
                            <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah foto.</small>
                            @error('photo')
                                <div class="text-danger" style="font-size: 12px;">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- CURRENT PHOTO -->
                        <div class="mb-3">
                            <img src="{{ Storage::url($photo->photo_path) }}" alt="{{ $photo->title }}" width="200">
                        </div>
                        <!-- SUBMIT -->
                        <button type="submit" class="btn btn-primary mb-2 col-md-12">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
