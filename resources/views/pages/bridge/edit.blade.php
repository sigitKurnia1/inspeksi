@extends('layouts.main')
@section('title', 'Jembatan | Edit')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Jembatan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{ route('bridge') }}">Jembatan</a></div>
                    <div class="breadcrumb-item">Edit Jembatan</div>
                </div>
            </div>

            <a href="{{ route('bridge') }}" class="btn btn-icon icon-left btn-warning"> Kembali</a>

            <div class="card mt-4">
                <form action="{{ route('bridge.update', $data->id) }}" class="needs-validation" novalidate=""
                    enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="nomor_jembatan">Nomor Jembatan</label>
                                    <input id="nomor_jembatan" type="text" class="form-control" name="nomor_jembatan"
                                        value="{{ $data->nomor_jembatan }}" required="">
                                    <div class="invalid-feedback">
                                        Kolom ini harus di isi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="nama_jembatan">Nama Jembatan</label>
                                    <input id="nama_jembatan" type="text" class="form-control" name="nama_jembatan"
                                        value="{{ $data->nama_jembatan }}" required="">
                                    <div class="invalid-feedback">
                                        Kolom ini harus di isi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="lokasi_jembatan_kota">Lokasi Jembatan (Kota)</label>
                                    <input id="lokasi_jembatan_kota" type="text" class="form-control"
                                        name="lokasi_jembatan_kota" value="{{ $data->lokasi_jembatan_kota }}" required="">
                                    <div class="invalid-feedback">
                                        Kolom ini harus di isi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="lokasi_jembatan_kabupaten">Lokasi Jembatan (Kabupaten)</label>
                                    <input id="lokasi_jembatan_kabupaten" type="text" class="form-control"
                                        name="lokasi_jembatan_kabupaten" value="{{ $data->lokasi_jembatan_kabupaten }}" required="">
                                    <div class="invalid-feedback">
                                        Kolom ini harus di isi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="lokasi_jembatan_provinsi">Lokasi Jembatan (Provinsi)</label>
                                    <input id="lokasi_jembatan_provinsi" type="text" class="form-control"
                                        name="lokasi_jembatan_provinsi" value="{{ $data->lokasi_jembatan_provinsi }}" required="">
                                    <div class="invalid-feedback">
                                        Kolom ini harus di isi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="tahun_pembangunan">Tahun Pembangunan Jembatan</label>
                                    <input id="tahun_pembangunan" name="tahun_pembangunan" type="text"
                                        class="form-control datemask" placeholder="YYYY/MM/DD" value="{{ \Carbon\Carbon::parse($data->tahun_pembangunan)->translatedFormat('Y/m/d') }}" required="">
                                    <div class="invalid-feedback">
                                        Kolom ini harus di isi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="lat">Titik Koordinat Jembatan (Lat)</label>
                                    <input id="lat" name="lat" type="text" class="form-control" value="{{ $data->lat }}" required="">
                                    <div class="invalid-feedback">
                                        Kolom ini harus di isi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="long">Titik Koordinat Jembatan (Lon)</label>
                                    <input id="long" name="long" type="text" class="form-control" value="{{ $data->long }}" required="">
                                    <div class="invalid-feedback">
                                        Kolom ini harus di isi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input class="custom-file-input" name="gambar" id="customFile" type="file">
                                        <label class="custom-file-label" for="customFile">Pilih Gambar Jembatan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-icon icon-left btn-primary">
                            <i class="fas fa-save"></i> Perbarui
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
