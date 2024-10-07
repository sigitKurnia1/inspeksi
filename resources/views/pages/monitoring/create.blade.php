@extends('layouts.main')
@section('title', 'Monitoring | Tambah')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Laporan Pemeriksaan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('bridge') }}">Jembatan</a></div>
                    <div class="breadcrumb-item">Laporan Pemeriksaan</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Pemeriksaan Jembatan</h4>
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
                                    <form action="{{ route('store.a5') }}" class="needs-validation" novalidate=""
                                        method="POST">
                                        @csrf
                                        <input type="hidden" name="id_jembatan" value="{{ $data->id }}">
                                        <div class="card">
                                            <h6>Form A5</h6>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="no_bentang">Nomor Bentang</label>
                                                            <input id="no_bentang" type="number" class="form-control"
                                                                name="no_bentang" required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="panjang_bentang">Panjang Bentang</label>
                                                            <input id="panjang_bentang" type="number" class="form-control"
                                                                name="panjang_bentang" required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="jumlah_gelagar">Jumlah Gelagar</label>
                                                            <input id="jumlah_gelagar" type="number" class="form-control"
                                                                name="jumlah_gelagar" required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="sudut">Sudut</label>
                                                            <input id="sudut" type="number" class="form-control"
                                                                name="sudut" required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="radius">Radius</label>
                                                            <input id="radius" type="number" class="form-control"
                                                                name="radius" required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="lebar_lantai">Lebar Lantai</label>
                                                            <input id="lebar_lantai" type="number" class="form-control"
                                                                name="lebar_lantai" required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="lebar_trotoar">Lebar Trotoar</label>
                                                            <input id="lebar_trotoar" type="text" class="form-control"
                                                                name="lebar_trotoar" required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="tinggi_ruang">Tinggi Ruang</label>
                                                            <input id="tinggi_ruang" type="text" class="form-control"
                                                                name="tinggi_ruang" required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="struktur_utama_tba">Struktur Utama (TBA)</label>
                                                            <select class="form-control" name="struktur_utama_tba" id="struktur_utama_tba">
                                                                @foreach ($tba as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="struktur_utama_bhn">Struktur Utama (BHN)</label>
                                                            <select class="form-control" name="struktur_utama_bhn" id="struktur_utama_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="struktur_utama_sba">Struktur Utama (SBA)</label>
                                                            <select class="form-control" name="struktur_utama_sba" id="struktur_utama_sba">
                                                                @foreach ($sba as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="pilon_tipe">Pilon (Tipe)</label>
                                                            <select class="form-control" name="pilon_tipe" id="pilon_tipe">
                                                                @foreach ($pilon as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="pilon_bhn">Pilon (BHN)</label>
                                                            <select class="form-control" name="pilon_bhn" id="pilon_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="struktur_lantai_bhn">Struktur Lantai (BHN)</label>
                                                            <select class="form-control" name="struktur_lantai_bhn" id="struktur_lantai_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="perkuatan_sistem_bhn">Perkuatan Sistem (BHN)</label>
                                                            <select class="form-control" name="perkuatan_sistem_bhn" id="perkuatan_sistem_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="lapis_permukaan_bhn">Lapis Permukaan (BHN)</label>
                                                            <select class="form-control" name="lapis_permukaan_bhn" id="lapis_permukaan_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="pengaman_pengguna_tba">Pengaman Pengguna (TBA)</label>
                                                            <select class="form-control" name="pengaman_pengguna_tba" id="pengaman_pengguna_tba">
                                                                @foreach ($tba as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="pengaman_pengguna_bhn">Pengaman Pengguna (TBA)</label>
                                                            <select class="form-control" name="pengaman_pengguna_bhn" id="pengaman_pengguna_bhn">
                                                                @foreach ($tba as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="pengaman_pengguna_sba">Pengaman Pengguna (SBA)</label>
                                                            <select class="form-control" name="pengaman_pengguna_sba" id="pengaman_pengguna_sba">
                                                                @foreach ($sba as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="perletakan_kode">Perletakan (Kode)</label>
                                                            <input id="perletakan_kode" type="text"
                                                                class="form-control" name="perletakan_kode"
                                                                required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="perletakan_bhn">Perletakan (BHN)</label>
                                                            <select class="form-control" name="perletakan_bhn" id="perletakan_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="sambungan_kode">Sambungan (Kode)</label>
                                                            <input id="sambungan_kode" type="text"
                                                                class="form-control" name="sambungan_kode"
                                                                required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="sambungan_bhn">Sambungan (BHN)</label>
                                                            <select class="form-control" name="sambungan_bhn" id="sambungan_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="aerodinamik_kode">Aerodinamik (Kode)</label>
                                                            <input id="aerodinamik_kode" type="text"
                                                                class="form-control" name="aerodinamik_kode"
                                                                required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="aerodinamik_bhn">Aerodinamik (BHN)</label>
                                                            <select class="form-control" name="aerodinamik_bhn" id="aerodinamik_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="perkuatan_kode">Perkuatan (Kode)</label>
                                                            <input id="perkuatan_kode" type="text"
                                                                class="form-control" name="perkuatan_kode"
                                                                required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="perkuatan_bhn">Perkuatan (BHN)</label>
                                                            <select class="form-control" name="perkuatan_bhn" id="perkuatan_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-icon icon-left btn-primary">
                                                    <i class="fas fa-plus"></i> Tambah
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="a6" role="tabpanel" aria-labelledby="a6-tab">
                                    <form action="{{ route('store.a6') }}" class="needs-validation" novalidate=""
                                        method="POST">
                                        @csrf
                                        <input type="hidden" name="id_jembatan" value="{{ $data->id }}">
                                        <div class="card">
                                            <h6>Form A6</h6>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="perlengkapan_kode">Perlengkapan (Kode)</label>
                                                            <input id="perlengkapan_kode" type="text"
                                                                class="form-control" name="perlengkapan_kode"
                                                                required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="perlengkapan_bhn">Perlengkapan (BHN)</label>
                                                            <select class="form-control" name="perlengkapan_bhn" id="perlengkapan_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="penerangan_kode">Penerangan (Kode)</label>
                                                            <input id="penerangan_kode" type="text"
                                                                class="form-control" name="penerangan_kode"
                                                                required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="penerangan_bhn">Penerangan (BHN)</label>
                                                            <select class="form-control" name="penerangan_bhn" id="penerangan_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="utilitas_kode">Utilitas (Kode)</label>
                                                            <input id="utilitas_kode" type="text" class="form-control"
                                                                name="utilitas_kode" required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="utilitas_bhn">Utilitas (BHN)</label>
                                                            <select class="form-control" name="utilitas_bhn" id="utilitas_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="pengaman_kode">Pengaman (Kode)</label>
                                                            <input id="pengaman_kode" type="text" class="form-control"
                                                                name="pengaman_kode" required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="pengaman_bhn">Pengaman (BHN)</label>
                                                            <select class="form-control" name="pengaman_bhn" id="pengaman_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="smks_kode">SMKS (Kode)</label>
                                                            <input id="smks_kode" type="text" class="form-control"
                                                                name="smks_kode" required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="smks_bhn">SMKS (BHN)</label>
                                                            <select class="form-control" name="smks_bhn" id="smks_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="moveable_kode">Moveable (Kode)</label>
                                                            <input id="moveable_kode" type="text" class="form-control"
                                                                name="moveable_kode" required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="moveable_bhn">Moveable (BHN)</label>
                                                            <select class="form-control" name="moveable_bhn" id="moveable_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="fasilitas_kode">Fasilitas (Kode)</label>
                                                            <input id="fasilitas_kode" type="text"
                                                                class="form-control" name="fasilitas_kode"
                                                                required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="fasilitas_bhn">Fasilitas (BHN)</label>
                                                            <select class="form-control" name="fasilitas_bhn" id="fasilitas_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="gorong_tba">Gorong (TBA)</label>
                                                            <select class="form-control" name="gorong_tba" id="gorong_tba">
                                                                @foreach ($tba as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="gorong_bhn">Gorong (BHN)</label>
                                                            <select class="form-control" name="gorong_bhn" id="gorong_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="gorong_sba">Gorong (SBA)</label>
                                                            <select class="form-control" name="gorong_sba" id="gorong_sba">
                                                                @foreach ($sba as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="perkuatan_gorong_kode">Perkuatan Gorong
                                                                (Kode)</label>
                                                            <input id="perkuatan_gorong_kode" type="text"
                                                                class="form-control" name="perkuatan_gorong_kode"
                                                                required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="perkuatan_gorong_bhn">Perkuatan Gorong (BHN)</label>
                                                            <select class="form-control" name="perkuatan_gorong_bhn" id="perkuatan_gorong_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="lintasan_tba">Lintasan (TBA)</label>
                                                            <select class="form-control" name="lintasan_tba" id="lintasan_tba">
                                                                @foreach ($tba as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="lintasan_bhn">Lintasan (BHN)</label>
                                                            <select class="form-control" name="lintasan_bhn" id="lintasan_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="lintasan_sba">Lintasan (SBA)</label>
                                                            <input id="lintasan_sba" type="text" class="form-control"
                                                                name="lintasan_sba" required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="lintasan_sba">Lintasan (SBA)</label>
                                                            <select class="form-control" name="lintasan_sba" id="lintasan_sba">
                                                                @foreach ($sba as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-icon icon-left btn-primary">
                                                    <i class="fas fa-plus"></i> Tambah
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="a9" role="tabpanel" aria-labelledby="a9-tab">
                                    <form action="{{ route('store.a9') }}" class="needs-validation" novalidate=""
                                        method="POST">
                                        @csrf
                                        <input type="hidden" name="id_jembatan" value="{{ $data->id }}">
                                        <div class="card">
                                            <h6>Form A9</h6>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="no_bentang">Nomor Bentang</label>
                                                            <input id="no_bentang" type="text" class="form-control"
                                                                name="no_bentang" required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="panjang_bentang">Panjang Bentang</label>
                                                            <input id="panjang_bentang" type="text"
                                                                class="form-control" name="panjang_bentang"
                                                                required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="jumlah_gelagar">Jumlah Gelagar</label>
                                                            <input id="jumlah_gelagar" type="text"
                                                                class="form-control" name="jumlah_gelagar"
                                                                required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="sudut">Sudut</label>
                                                            <input id="sudut" type="text" class="form-control"
                                                                name="sudut" required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="radius">Radius</label>
                                                            <input id="radius" type="text" class="form-control"
                                                                name="radius" required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="lebar_lantai">Lebar Lantai</label>
                                                            <input id="lebar_lantai" type="text" class="form-control"
                                                                name="lebar_lantai" required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="lebar_trotoar">Lebar Trotoar</label>
                                                            <input id="lebar_trotoar" type="text" class="form-control"
                                                                name="lebar_trotoar" required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="tinggi_ruang">Tinggi Ruang</label>
                                                            <input id="tinggi_ruang" type="text" class="form-control"
                                                                name="tinggi_ruang" required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="posisi_pelebaran_kiri">Posisi Pelebaran
                                                                Kiri</label>
                                                            <input id="posisi_pelebaran_kiri" type="text"
                                                                class="form-control" name="posisi_pelebaran_kiri"
                                                                required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="posisi_pelebaran_kanan">Posisi Pelebaran
                                                                Kanan</label>
                                                            <input id="posisi_pelebaran_kanan" type="text"
                                                                class="form-control" name="posisi_pelebaran_kanan"
                                                                required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="pelebaran_kiri_tba">Pelebaran Kiri (TBA)</label>
                                                            <select class="form-control" name="pelebaran_kiri_tba" id="pelebaran_kiri_tba">
                                                                @foreach ($tba as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="pelebaran_kiri_bhn">Pelebaran Kiri (BHN)</label>
                                                            <select class="form-control" name="pelebaran_kiri_bhn" id="pelebaran_kiri_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="pelebaran_kiri_sba">Pelbaran Kiri (SBA)</label>
                                                            <select class="form-control" name="pelebaran_kiri_sba" id="pelebaran_kiri_sba">
                                                                @foreach ($sba as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="pelebaran_kanan_tba">Pelebaran Kanan (TBA)</label>
                                                            <select class="form-control" name="pelebaran_kanan_tba" id="pelebaran_kanan_tba">
                                                                @foreach ($tba as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="pelebaran_kanan_bhn">Pelebaran Kanan (BHN)</label>
                                                            <select class="form-control" name="pelebaran_kanan_bhn" id="pelebaran_kanan_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="pelebaran_kanan_sba">Pelebaran Kanan (SBA)</label>
                                                            <select class="form-control" name="pelebaran_kanan_sba" id="pelebaran_kanan_sba">
                                                                @foreach ($sba as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="pilon_tipe">Pilon (Tipe)</label>
                                                            <select class="form-control" name="pilon_tipe" id="pilon_tipe">
                                                                @foreach ($pilon as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="pilon_bhn">Pilon (BHN)</label>
                                                            <select class="form-control" name="pilon_bhn" id="pilon_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="struktur_lantai_bhn">Struktur Lantai (BHN)</label>
                                                            <select class="form-control" name="struktur_lantai_bhn" id="struktur_lantai_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="perkuatan_sistem_bhn">Perkuatan Sistem (BHN)</label>
                                                            <select class="form-control" name="perkuatan_sistem_bhn" id="perkuatan_sistem_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="lapis_permukaan_bhn">Lapis Permukaan (BHN)</label>
                                                            <select class="form-control" name="lapis_permukaan_bhn" id="lapis_permukaan_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="pengaman_pengguna_tba">Pengaman Pengguna (TBA)</label>
                                                            <select class="form-control" name="pengaman_pengguna_tba" id="pengaman_pengguna_tba">
                                                                @foreach ($tba as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="pengaman_pengguna_bhn">Pengaman Pengguna (BHN)</label>
                                                            <select class="form-control" name="pengaman_pengguna_bhn" id="pengaman_pengguna_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="pengaman_pengguna_sba">Pengaman Pengguna (SBA)</label>
                                                            <select class="form-control" name="pengaman_pengguna_sba" id="pengaman_pengguna_sba">
                                                                @foreach ($sba as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="perletakan_kode">Perletakan (Kode)</label>
                                                            <input id="perletakan_kode" type="text"
                                                                class="form-control" name="perletakan_kode"
                                                                required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="perletakan_bhn">Perletakan (BHN)</label>
                                                            <select class="form-control" name="perletakan_bhn" id="perletakan_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="sambungan_kode">Sambungan (Kode)</label>
                                                            <input id="sambungan_kode" type="text"
                                                                class="form-control" name="sambungan_kode"
                                                                required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="sambungan_bhn">Sambungan (BHN)</label>
                                                            <select class="form-control" name="sambungan_bhn" id="sambungan_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="aerodinamik_kode">Aerodinamik (Kode)</label>
                                                            <input id="aerodinamik_kode" type="text"
                                                                class="form-control" name="aerodinamik_kode"
                                                                required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="aerodinamik_bhn">Aerodinamik (BHN)</label>
                                                            <select class="form-control" name="aerodinamik_bhn" id="aerodinamik_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="perkuatan_kode">Perkuatan (Kode)</label>
                                                            <input id="perkuatan_kode" type="text"
                                                                class="form-control" name="perkuatan_kode"
                                                                required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="perkuatan_bhn">Perkuatan (BHN)</label>
                                                            <select class="form-control" name="perkuatan_bhn" id="perkuatan_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-icon icon-left btn-primary">
                                                    <i class="fas fa-plus"></i> Tambah
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="a10" role="tabpanel" aria-labelledby="a10-tab">
                                    <form action="{{ route('store.a10') }}" class="needs-validation" novalidate=""
                                        method="POST">
                                        @csrf
                                        <input type="hidden" name="id_jembatan" value="{{ $data->id }}">
                                        <div class="card">
                                            <h6>Form A10</h6>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="perlengkapan_kode">Perlengkapan (Kode)</label>
                                                            <input id="perlengkapan_kode" type="text"
                                                                class="form-control" name="perlengkapan_kode"
                                                                required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="perlengkapan_bhn">Perlengkapan (BHN)</label>
                                                            <select class="form-control" name="perlengkapan_bhn" id="perlengkapan_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="penerangan_kode">Penerangan (Kode)</label>
                                                            <input id="penerangan_kode" type="text"
                                                                class="form-control" name="penerangan_kode"
                                                                required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="penerangan_bhn">Penerangan (BHN)</label>
                                                            <select class="form-control" name="penerangan_bhn" id="penerangan_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="utilitas_kode">Utilitas (Kode)</label>
                                                            <input id="utilitas_kode" type="text" class="form-control"
                                                                name="utilitas_kode" required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="utilitas_bhn">Utilitas (BHN)</label>
                                                            <select class="form-control" name="utilitas_bhn" id="utilitas_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="pengaman_koded">Pengaman (Kode)</label>
                                                            <input id="pengaman_koded" type="text" class="form-control"
                                                                name="pengaman_koded" required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="pengaman_bhn">Pengaman (BHN)</label>
                                                            <select class="form-control" name="pengaman_bhn" id="pengaman_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="smks_kode">SMKS (Kode)</label>
                                                            <input id="smks_kode" type="text" class="form-control"
                                                                name="smks_kode" required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="smks_bhn">SMKS (BHN)</label>
                                                            <select class="form-control" name="smks_bhn" id="smks_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="perlengkapan_kode">Perlengkapan (Kode)</label>
                                                            <input id="perlengkapan_kode" type="text"
                                                                class="form-control" name="perlengkapan_kode"
                                                                required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="perlengkapan_bhn">Perlengkapan (BHN)</label>
                                                            <select class="form-control" name="perlengkapan_bhn" id="perlengkapan_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="moveable_kode">Moveable (Kode)</label>
                                                            <input id="moveable_kode" type="text"
                                                                class="form-control" name="moveable_kode"
                                                                required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="moveable_bhn">Moveable (BHN)</label>
                                                            <select class="form-control" name="moveable_bhn" id="moveable_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="fasilitas_kode">Fasilitas (Kode)</label>
                                                            <input id="fasilitas_kode" type="text"
                                                                class="form-control" name="fasilitas_kode"
                                                                required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="fasilitas_bhn">Fasilitas (BHN)</label>
                                                            <select class="form-control" name="fasilitas_bhn" id="fasilitas_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="gorong_tba">Gorong (TBA)</label>
                                                            <select class="form-control" name="gorong_tba" id="gorong_tba">
                                                                @foreach ($tba as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="gorong_bhn">Gorong (BHN)</label>
                                                            <select class="form-control" name="gorong_bhn" id="gorong_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="gorong_sba">Gorong (SBA)</label>
                                                            <select class="form-control" name="gorong_sba" id="gorong_sba">
                                                                @foreach ($sba as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="perkuatan_gorong_kode">Perkuatan Gorong
                                                                (Kode)</label>
                                                            <input id="perkuatan_gorong_kode" type="text"
                                                                class="form-control" name="perkuatan_gorong_kode"
                                                                required="">
                                                            <div class="invalid-feedback">
                                                                Kolom ini harus di isi!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="perkuatan_gorong_bhn">Perkuatan Gorong (BHN)</label>
                                                            <select class="form-control" name="perkuatan_gorong_bhn" id="perkuatan_gorong_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="lintasan_tba">Lintasan (TBA)</label>
                                                            <select class="form-control" name="lintasan_tba" id="lintasan_tba">
                                                                @foreach ($tba as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="lintasan_bhn">Lintasan (BHN)</label>
                                                            <select class="form-control" name="lintasan_bhn" id="lintasan_bhn">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="lintasan_sba">Lintasan (SBA)</label>
                                                            <select class="form-control" name="lintasan_sba" id="lintasan_sba">
                                                                @foreach ($bhn as $item)
                                                                    <option value="{{ $item[0] }}">{{ $item[0] }} | {{ $item[1] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-icon icon-left btn-primary">
                                                    <i class="fas fa-plus"></i> Tambah
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
