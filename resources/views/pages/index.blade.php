@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                </div>
            </div>

            <div id="map" style="height: 500px;"></div>

        </section>
    </div>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <script>
        var map = L.map('map').setView([1.4804, 102.1204], 10);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

        var bridges = @json($bridges);

        bridges.forEach(function(bridge) {
            var marker = L.marker([bridge.lat, bridge.long]).addTo(map);

            var popupContent = `
                <strong>${bridge.nama_jembatan}</strong><br>
                <img src="{{ asset('assets/images') }}/${bridge.gambar}" alt="${bridge.nama_jembatan}" style="max-width: 200px; max-height: 150px; width: auto; height: auto;"><br>
                Kota: ${bridge.lokasi_jembatan_kota}<br>
                Kabupaten: ${bridge.lokasi_jembatan_kabupaten}<br>
                Provinsi: ${bridge.lokasi_jembatan_provinsi}<br>
                Tahun Pembangunan: ${bridge.tahun_pembangunan}<br>
                <br>
                <a href="/bridge/monitoring/create/${bridge.id}" class="btn btn-outline-primary">Laporan</a>
            `;
            marker.bindPopup(popupContent);
        });
    </script>
@endsection
