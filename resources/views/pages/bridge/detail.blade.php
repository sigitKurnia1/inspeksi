@extends('layouts.main')
@section('title', 'Jembatan | Detail')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Detail Jembatan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{ route('bridge') }}">Jembatan</a></div>
                    <div class="breadcrumb-item">Detail Jembatan</div>
                </div>
            </div>

            <a href="{{ route('bridge') }}" class="btn btn-icon icon-left btn-warning"><i
                    class="fas fa-arrow-left"></i> Kembali</a>

            <div class="row mt-4">
                <div class="col-12 col-md-4 col-lg-12 m-auto">
                    <article class="article article-style-c">
                        <div class="article-header">
                            <div class="article-image" data-background="{{ asset('assets/images/' . $data->gambar) }}"></div>
                        </div>
                        <div class="article-details">
                            <div class="article-title">
                                <h2><a href="#">{{ $data->nama_jembatan }}</a></h2>
                            </div>
                            <div class="article-category"><a href="#">Nomor Jembatan</a>
                                <div class="bullet"></div> <a href="#">{{ $data->nomor_jembatan }}</a>
                            </div>
                            <div class="article-category"><a href="#">Tahun Pembangunan</a>
                                <div class="bullet"></div> <a href="#">{{ $data->tahun_pembangunan }}</a>
                            </div>
                            <div class="article-category">
                                <a href="#">{{ $data->lokasi_jembatan_kota }}, {{ $data->lokasi_jembatan_kabupaten }}, {{ $data->lokasi_jembatan_provinsi }}</a>
                            </div>
                            <hr>
                            <div class="article-category">
                                <a href="#">Latituded {{ $data->lat }}, Longtitude {{ $data->long }}</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </div>
@endsection
