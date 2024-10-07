@extends('layouts.main')
@section('title', 'Laporan')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Laporan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Laporan</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Laporan Pemeriksaan</h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="a5-tab" data-toggle="tab" href="#a5"
                                        role="tab" aria-controls="a5" aria-selected="true">Form A5</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="a6-tab" data-toggle="tab" href="#a6" role="tab"
                                        aria-controls="a6" aria-selected="false">Form A6</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="a9-tab" data-toggle="tab" href="#a9" role="tab"
                                        aria-controls="a9" aria-selected="false">Form A9</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="a10-tab" data-toggle="tab" href="#a10" role="tab"
                                        aria-controls="a10" aria-selected="false">Form A10</a>
                                </li>
                            </ul>
                            <div class="tab-content tab-bordered" id="myTabContent">
                                <div class="tab-pane fade show active" id="a5" role="tabpanel"
                                    aria-labelledby="a5-tab">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-md">
                                                <tr>
                                                    <th>#</th>
                                                    <th>ID Jembatan</th>
                                                    <th>Nomor Bentang</th>
                                                    <th>Panjang Bentang</th>
                                                    <th>Aksi</th>
                                                </tr>
                                                @php
                                                    $no = 0;
                                                @endphp
                                                @forelse ($a5 as $item)
                                                    <tr>
                                                        <td>{{ $no += 1 }}</td>
                                                        <td>{{ $item->id_jembatan }}</td>
                                                        <td>{{ $item->no_bentang }}</td>
                                                        <td>{{ $item->panjang_bentang }}</td>
                                                        <td>
                                                            <a href="{{ route('detail.a5', $item->id) }}" class="badge badge-info">Detail</a>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr class="text-center">
                                                        <td colspan="4">Data Tidak Ditemukan</td>
                                                    </tr>
                                                @endforelse
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="a6" role="tabpanel"
                                    aria-labelledby="a6-tab">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-md">
                                                <tr>
                                                    <th>#</th>
                                                    <th>ID Jembatan</th>
                                                    <th>Perlengkapan (Kode)</th>
                                                    <th>Perlengkapan (BHN)</th>
                                                    <th>Aksi</th>
                                                </tr>
                                                @php
                                                    $no = 0;
                                                @endphp
                                                @forelse ($a6 as $item)
                                                    <tr>
                                                        <td>{{ $no += 1 }}</td>
                                                        <td>{{ $item->id_jembatan }}</td>
                                                        <td>{{ $item->perlengkapan_kode }}</td>
                                                        <td>{{ $item->perlengkapan_bhn }}</td>
                                                        <td>
                                                            <a href="{{ route('detail.a6', $item->id) }}" class="badge badge-info">Detail</a>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr class="text-center">
                                                        <td colspan="4">Data Tidak Ditemukan</td>
                                                    </tr>
                                                @endforelse
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="a9" role="tabpanel"
                                    aria-labelledby="a9-tab">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-md">
                                                <tr>
                                                    <th>#</th>
                                                    <th>ID Jembatan</th>
                                                    <th>Nomor Bentang</th>
                                                    <th>Panjang Bentang</th>
                                                    <th>Aksi</th>
                                                </tr>
                                                @php
                                                    $no = 0;
                                                @endphp
                                                @forelse ($a9 as $item)
                                                    <tr>
                                                        <td>{{ $no += 1 }}</td>
                                                        <td>{{ $item->id_jembatan }}</td>
                                                        <td>{{ $item->no_bentang }}</td>
                                                        <td>{{ $item->panjang_bentang }}</td>
                                                        <td>
                                                            <a href="{{ route('detail.a9', $item->id) }}" class="badge badge-info">Detail</a>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr class="text-center">
                                                        <td colspan="4">Data Tidak Ditemukan</td>
                                                    </tr>
                                                @endforelse
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="a10" role="tabpanel"
                                    aria-labelledby="a10-tab">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-md">
                                                <tr>
                                                    <th>#</th>
                                                    <th>ID Jembatan</th>
                                                    <th>Perlengkapan (Kode)</th>
                                                    <th>Perlengkapan (BHN)</th>
                                                    <th>Aksi</th>
                                                </tr>
                                                @php
                                                    $no = 0;
                                                @endphp
                                                @forelse ($a10 as $item)
                                                    <tr>
                                                        <td>{{ $no += 1 }}</td>
                                                        <td>{{ $item->id_jembatan }}</td>
                                                        <td>{{ $item->perlengkapan_kode }}</td>
                                                        <td>{{ $item->perlengkapan_bhn }}</td>
                                                        <td>
                                                            <a href="{{ route('detail.a10', $item->id) }}" class="badge badge-info">Detail</a>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr class="text-center">
                                                        <td colspan="4">Data Tidak Ditemukan</td>
                                                    </tr>
                                                @endforelse
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
