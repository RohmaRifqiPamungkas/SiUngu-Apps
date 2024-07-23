@extends('layouts.app')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Detail Pengumuman'])

    <div class="row mt-4 mx-3 mb-4">
        <div class="col-12">
            <div class="card card-profile">
                <div class="card-header pb-0">
                    <a href="javascript:history.back()" class="btn btn-success">
                        <i class="fa-solid fa-angle-left"></i></a>
                </div>
                <div class="card-header border-0 pt-0 pt-lg-2 pb-4 pb-lg-3 text-center">
                    <h2 class="font-weight-bolder">{{ $announcement->title }}</h2>
                    <h4 class="font-weight-bolder">
                        <i class="fa fa-calendar-alt"></i> {{ $announcement->created_at->format('d M Y') }}
                    </h4>
                </div>
                <div class="card-body text-center">
                    <p>{{ $announcement->content }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
