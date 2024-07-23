@extends('layouts.app')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Edit Pengumuman'])

    <div class="row mt-4 mx-3 mb-4">
        <div class="col-12">
            <div class="card card-profile">
                <div class="card-header pb-0">
                    <a href="javascript:history.back()" class="btn btn-success">
                        <i class="fa-solid fa-angle-left"></i>
                    </a>
                </div>
                <div class="card-header border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
                    <form action="{{ route('pages.announcements.update', $announcement->id) }}" method="post" role="form">
                        @csrf
                        @method('PUT')
                        <!-- TITLE -->
                        <div class="form-group col-md-12 justify-content-center">
                            <div class="mb-3">
                                <label for="inputTitle" class="form-label" style="font-size: 14px;">Judul Pengumuman</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Masukkan Judul"
                                    aria-label="Title" name="title" value="{{ old('title', $announcement->title) }}">
                            </div>
                            <!-- CONTENT -->
                            <div class="mb-3">
                                <label for="inputContent" class="form-label" style="font-size: 14px;">Isi Pengumuman</label>
                                <textarea class="form-control form-control-lg" placeholder="Masukkan Isi Pengumuman" aria-label="Content"
                                    name="content">{{ old('content', $announcement->content) }}</textarea>
                            </div>
                            <!-- SUBMIT -->
                            <button type="submit" class="btn btn-primary mb-2 col-md-12">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
