@extends('layouts.app')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Pengumuman'])
    <div class="row mt-4 mx-3">
        <div class="col-12">
            @if (session('success'))
                <div id="success-alert" class="alert alert-success alert-dismissible fade show text-white" role="alert">
                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text"><strong>{{ session('success') }}</strong></span>
                    <button type="button" class="btn-close pt-3" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>
                <script>
                    setTimeout(function() {
                        document.getElementById('success-alert').style.display = 'none';
                    }, 2000);
                </script>
            @endif

            <div class="card mb-4">
                <div class="card-header pb-0">
                    <a href="{{ route('pages.announcements.create') }}" class="btn btn-primary">
                        <i class="fa-solid fa-plus" style="margin-right: 5px;"></i> Tambah Pengumuman
                    </a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Judul
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Konten
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($announcements as $key => $announcement)
                                    <tr>
                                        <td class="align-middle text-center text-sm">{{ $key + 1 }}</td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-sm font-weight-bold mb-0">{{ $announcement->title }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-sm mb-0">{{ Str::limit($announcement->content, 50) }}</p>
                                        </td>
                                        <td class="align-middle text-center text-end">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <a class="btn btn-info mt-2"
                                                    href="{{ route('pages.announcements.edit', $announcement->id) }}"
                                                    style="margin-right: 5px; font-size: 12px;">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a class="btn btn-success mt-2"
                                                    href="{{ route('pages.announcements.show', $announcement->id) }}"
                                                    style="margin-right: 5px; font-size: 12px;">
                                                    <i class="fa-solid fa-circle-info" style="margin-right: 5px;"></i>
                                                    Details
                                                </a>
                                                <a class="btn btn-danger mt-2"
                                                    onclick="confirmDelete('{{ $announcement->id }}')"
                                                    style="font-size: 12px;">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        function confirmDelete(itemId) {
            Swal.fire({
                title: 'Hapus Pengumuman',
                text: "Apakah anda yakin ingin menghapus pengumuman ini?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '/announcements/' + itemId;
                }
            });
        }
    </script>
@endsection
