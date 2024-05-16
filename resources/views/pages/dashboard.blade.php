@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <h5 class="font-weight-bolder">
                                    Absensi
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <i class="fas fa-user-check text-lg text-primary"></i>
                        </div>
                        <hr>
                        <div>
                            <a href="{{ route('absensi') }}">More Info
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <h5 class="font-weight-bolder">
                                    Arus Kas
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <i class="fas fa-solid fa-money-check-dollar text-lg text-primary"></i>
                        </div>
                        <hr>
                        <div>
                            <a href="{{ route('manajemen_kas') }}">More Info
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <h5 class="font-weight-bolder">
                                    Events
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <i class="fa fa-calendar-days text-lg text-primary"></i>
                        </div>
                        <hr>
                        <div>
                            <a href="{{ route('events.index') }}">More Info
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <h5 class="font-weight-bolder">
                                    Anggota
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <i class="ni fa-solid fa-users text-lg text-primary"></i>
                        </div>
                        <hr>
                        <div>
                            <a href="{{ route('anggota') }}">More Info
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h6 class="text-capitalize">Arus Kas</h6>
                    <p class="text-sm mb-0">
                        <i class="fa fa-arrow-up text-success"></i>
                        <span class="font-weight-bold">Saldo Akhir :</span> Rp. 100.000
                    </p>
                </div>
                <div class="card-body p-3">
                    <div class="chart">
                        <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="card ">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-2"><i class="fa fa-arrow-up text-success" style="margin-right: 7px;"></i>Kas Masuk</h6>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center">
                        <thead>
                            <th class="text-xs text-secondary text-center">No.</th>
                            <th class="text-xs text-secondary text-center">Bulan</th>
                            <th class="text-xs text-secondary text-center">Jumlah (Rp)</th>
                            <th class="text-xs text-secondary text-center">Keterangan</th>
                        </thead>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">1</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">February 2024</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Rp. 100.000</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Kas Rutin</p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-2"><i class="fa fa-arrow-down text-danger" style="margin-right: 7px;"></i>Kas Keluar</h6>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center">
                        <thead>
                            <th class="text-xs text-secondary text-center">No.</th>
                            <th class="text-xs text-secondary text-center">Tanggal</th>
                            <th class="text-xs text-secondary text-center">Jumlah (Rp)</th>
                            <th class="text-xs text-secondary text-center">Keterangan</th>
                        </thead>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">1</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">29 February 2024</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Rp. 50.000</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Cetak banner</p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5">
        @include('layouts.footers.auth.footer')
    </div>
</div>
@endsection

@push('js')
<script src="./assets/js/plugins/chartjs.min.js"></script>
<script>
var ctx1 = document.getElementById("chart-line").getContext("2d");

var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

gradientStroke1.addColorStop(1, 'rgba(138, 43, 226, 0.2)'); // Warna ungu pada titik akhir (1, 230)
gradientStroke1.addColorStop(0.2, 'rgba(138, 43, 226, 0.0)'); // Warna transparan pada titik tengah (0.2, ...)
gradientStroke1.addColorStop(0, 'rgba(138, 43, 226, 0)'); // Warna transparan pada titik awal (0, 50)

new Chart(ctx1, {
    type: "line",
    data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
            label: "Mobile apps",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#6c25be",
            backgroundColor: gradientStroke1,
            borderWidth: 3,
            fill: true,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6

        }],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false,
            }
        },
        interaction: {
            intersect: false,
            mode: 'index',
        },
        scales: {
            y: {
                grid: {
                    drawBorder: false,
                    display: true,
                    drawOnChartArea: true,
                    drawTicks: false,
                    borderDash: [5, 5]
                },
                ticks: {
                    display: true,
                    padding: 10,
                    color: '#fbfbfb',
                    font: {
                        size: 11,
                        family: "Open Sans",
                        style: 'normal',
                        lineHeight: 2
                    },
                }
            },
            x: {
                grid: {
                    drawBorder: false,
                    display: false,
                    drawOnChartArea: false,
                    drawTicks: false,
                    borderDash: [5, 5]
                },
                ticks: {
                    display: true,
                    color: '#ccc',
                    padding: 20,
                    font: {
                        size: 11,
                        family: "Open Sans",
                        style: 'normal',
                        lineHeight: 2
                    },
                }
            },
        },
    },
});
</script>
@endpush