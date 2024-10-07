@extends('layouts.main')
@section('title', 'Laporan A6')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Laporan A6</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Laporan A6</div>
                </div>
            </div>

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
        </section>
    </div>
@endsection
