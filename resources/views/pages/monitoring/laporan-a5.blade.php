@extends('layouts.main')
@section('title', 'Laporan A5')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Laporan A5</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Laporan A5</div>
                </div>
            </div>

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
        </section>
    </div>
@endsection
