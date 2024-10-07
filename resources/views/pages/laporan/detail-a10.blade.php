@extends('layouts.main')
@section('title', 'Detail Laporan A10')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Laporan A10</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Detail Laporan A10</div>
            </div>
        </div>

        <a href="{{ route('laporan.a10') }}" class="btn btn-icon icon-left btn-warning"> Kembali</a>

        <div class="card mt-4">
            <div class="card-body">
                <h6 class="mb-3">Form A10</h6>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="perlengkapan_kode">Perlengkapan (Kode)</label>
                            <input id="perlengkapan_kode" class="form-control" value="{{ $data->perlengkapan_kode }}" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="perlengkapan_bhn">Perlengkapan (BHN)</label>
                            <input id="perlengkapan_bhn" class="form-control" value="{{ $data->perlengkapan_bhn }}" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="penerangan_kode">Penerangan (Kode)</label>
                            <input id="penerangan_kode" class="form-control" value="{{ $data->penerangan_kode }}" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="penerangan_bhn">Penerangan (BHN)</label>
                            <input id="penerangan_bhn" class="form-control" value="{{ $data->penerangan_bhn }}" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="utilitas_kode">Utilitas (Kode)</label>
                            <input id="utilitas_kode" class="form-control" value="{{ $data->utilitas_kode }}" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="utilitas_bhn">Utilitas (BHN)</label>
                            <input id="utilitas_bhn" class="form-control" value="{{ $data->utilitas_bhn }}" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="pengaman_kode">Pengaman (Kode)</label>
                            <input id="pengaman_kode" class="form-control" value="{{ $data->pengaman_kode }}" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="pengaman_bhn">Pengaman (BHN)</label>
                            <input id="pengaman_bhn" class="form-control" value="{{ $data->pengaman_bhn }}" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="smks_kode">SMKS (Kode)</label>
                            <input id="smks_kode" class="form-control" value="{{ $data->smks_kode }}" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="smks_bhn">SMKS (BHN)</label>
                            <input id="smks_bhn" class="form-control" value="{{ $data->smks_bhn }}" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="perlengkapan_kode">Perlengkapan (Kode)</label>
                            <input id="perlengkapan_kode" class="form-control" value="{{ $data->perlengkapan_kode }}" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="perlengkapan_bhn">Perlengkapan (BHN)</label>
                            <input id="perlengkapan_bhn" class="form-control" value="{{ $data->perlengkapan_bhn }}" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="fasilitas_kode">Fasilitas (Kode)</label>
                            <input id="fasilitas_kode" class="form-control" value="{{ $data->fasilitas_kode }}" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="fasilitas_bhn">Fasilitas (BHN)</label>
                            <input id="fasilitas_bhn" class="form-control" value="{{ $data->fasilitas_bhn }}" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="gorong_tba">Gorong (TBA)</label>
                            <input id="gorong_tba" class="form-control" value="{{ $data->gorong_tba }}" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="gorong_bhn">Gorong (BHN)</label>
                            <input id="gorong_bhn" class="form-control" value="{{ $data->gorong_bhn }}" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="gorong_sba">Gorong (SBA)</label>
                            <input id="gorong_sba" class="form-control" value="{{ $data->gorong_sba }}" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="perkuatan_gorong_kode">Perkuatan Gorong (Kode)</label>
                            <input id="perkuatan_gorong_kode" class="form-control" value="{{ $data->perkuatan_gorong_kode }}" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="perkuatan_gorong_bhn">Perkuatan Gorong (BHN)</label>
                            <input id="perkuatan_gorong_bhn" class="form-control" value="{{ $data->perkuatan_gorong_bhn }}" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="lintasan_tba">Lintasan (TBA)</label>
                            <input id="lintasan_tba" class="form-control" value="{{ $data->lintasan_tba }}" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="lintasan_bhn">Lintasan (BHN)</label>
                            <input id="lintasan_bhn" class="form-control" value="{{ $data->lintasan_bhn }}" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="lintasan_sba">Lintasan (SBA)</label>
                            <input id="lintasan_sba" class="form-control" value="{{ $data->lintasan_sba }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
