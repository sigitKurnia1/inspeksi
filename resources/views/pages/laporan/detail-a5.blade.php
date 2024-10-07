@extends('layouts.main')
@section('title', 'Detail Laporan A5')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Detail Laporan A5</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Detail Laporan A5</div>
                </div>
            </div>

            <a href="{{ route('laporan.a5') }}" class="btn btn-icon icon-left btn-warning"> Kembali</a>

            <div class="card mt-4">
                <div class="card-body">
                    <h6 class="mb-3">Form A5</h6>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="no_bentang">Nomor Bentang</label>
                                <input id="no_bentang" class="form-control" value="{{ $data->no_bentang }}" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="panjang_bentang">Panjang Bentang</label>
                                <input id="panjang_bentang" class="form-control" value="{{ $data->panjang_bentang }}" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="jumlah_gelagar">Jumlah Gelagar</label>
                                <input id="jumlah_gelagar" class="form-control" value="{{ $data->jumlah_gelagar }}" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="sudut">sudut</label>
                                <input id="sudut" class="form-control" value="{{ $data->sudut }}" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="radius">Radius</label>
                                <input id="radius" class="form-control" value="{{ $data->radius }}" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="lebar_lantai">Lebar Lantai</label>
                                <input id="lebar_lantai" class="form-control" value="{{ $data->lebar_lantai }}" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="lebar_trotoar">Lebar Trotoar</label>
                                <input id="lebar_trotoar" class="form-control" value="{{ $data->lebar_trotoar }}" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="tinggi_ruang">Tinggi Ruang</label>
                                <input id="tinggi_ruang" class="form-control" value="{{ $data->tinggi_ruang }}" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="struktur_utama_tba">Struktur Utama (TBA)</label>
                                <input id="struktur_utama_tba" class="form-control" value="{{ $data->struktur_utama_tba }}" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="struktur_utama_bhn">Struktur Utama (BHN)</label>
                                <input id="struktur_utama_bhn" class="form-control" value="{{ $data->struktur_utama_bhn }}" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="struktur_utama_sba">Struktur Utama (SBA)</label>
                                <input id="struktur_utama_sba" class="form-control" value="{{ $data->struktur_utama_sba }}" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="pilon_tipe">Pilon (Tipe)</label>
                                <input id="pilon_tipe" class="form-control" value="{{ $data->pilon_tipe }}" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="pilon_bhn">Pilon (BHN)</label>
                                <input id="pilon_bhn" class="form-control" value="{{ $data->pilon_bhn }}" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="struktur_lantai_bhn">Struktur Lantai (BHN)</label>
                                <input id="struktur_lantai_bhn" class="form-control" value="{{ $data->struktur_lantai_bhn }}" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="perkuatan_sistem_bhn">Perkuatan Sistem (BHN)</label>
                                <input id="perkuatan_sistem_bhn" class="form-control" value="{{ $data->perkuatan_sistem_bhn }}" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="lapis_permukaan_bhn">Lapis Permukaan (BHN)</label>
                                <input id="lapis_permukaan_bhn" class="form-control" value="{{ $data->lapis_permukaan_bhn }}" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="pengaman_pengguna_tba">Pengaman Pengguna (TBA)</label>
                                <input id="pengaman_pengguna_tba" class="form-control" value="{{ $data->pengaman_pengguna_tba }}" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="pengaman_pengguna_bhn">Pengaman Pengguna (BHN)</label>
                                <input id="pengaman_pengguna_bhn" class="form-control" value="{{ $data->pengaman_pengguna_bhn }}" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="pengaman_pengguna_sba">Pengaman Pengguna (SBA)</label>
                                <input id="pengaman_pengguna_sba" class="form-control" value="{{ $data->pengaman_pengguna_sba }}" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="perletakan_kode">Perletakan (Kode)</label>
                                <input id="perletakan_kode" class="form-control" value="{{ $data->perletakan_kode }}" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="perletakan_bhn">Perletakan (BHN)</label>
                                <input id="perletakan_bhn" class="form-control" value="{{ $data->perletakan_bhn }}" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="sambungan_kode">Sambungan (Kode)</label>
                                <input id="sambungan_kode" class="form-control" value="{{ $data->sambungan_kode }}" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="sambungan_bhn">Sambungan (BHN)</label>
                                <input id="sambungan_bhn" class="form-control" value="{{ $data->sambungan_bhn }}" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="aerodinamik_kode">Aerodinamik (Kode)</label>
                                <input id="aerodinamik_kode" class="form-control" value="{{ $data->aerodinamik_kode }}" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="aerodinamik_bhn">Aerodinamik (BHN)</label>
                                <input id="aerodinamik_bhn" class="form-control" value="{{ $data->aerodinamik_bhn }}" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="perkuatan_kode">Perkuatan (Kode)</label>
                                <input id="perkuatan_kode" class="form-control" value="{{ $data->perkuatan_kode }}" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="perkuatan_bhn">Perkuatan (BHN)</label>
                                <input id="perkuatan_bhn" class="form-control" value="{{ $data->perkuatan_bhn }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
