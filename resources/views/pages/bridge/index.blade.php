@extends('layouts.main')
@section('title', 'Jembatan')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Jembatan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Jembatan</div>
                </div>
            </div>

            <a href="{{ route('bridge.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i>
                Jembatan</a>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tr>
                            <th>#</th>
                            <th>Nomor Jembatan</th>
                            <th>Nama Jembatan</th>
                            <th>Lokasi</th>
                            <th>Aksi</th>
                        </tr>
                        @php
                            $no = 0;
                        @endphp
                        @forelse ($data as $item)
                            <tr>
                                <td>{{ $no += 1 }}</td>
                                <td>{{ $item->nomor_jembatan }}</td>
                                <td>{{ $item->nama_jembatan }}</td>
                                <td>{{ $item->lokasi_jembatan_kabupaten }}</td>
                                <td>
                                    <a href="{{ route('bridge.monitoring.create', $item->id) }}"
                                        class="badge badge-primary">Laporan</a>
                                    <a href="{{ route('bridge.detail', $item->id) }}" class="badge badge-info">Detail</a>
                                    <a href="{{ route('bridge.edit', $item->id) }}" class="badge badge-warning">Edit</a>
                                    <a href="{{ route('bridge.delete', $item->id) }}" class="badge badge-danger"
                                        data-confirm-delete="true">Hapus</a>
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
