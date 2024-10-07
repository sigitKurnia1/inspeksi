<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bridge;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\A5;
use App\Models\A6;
use App\Models\A9;
use App\Models\A10;

class MonitoringController extends Controller
{
    private $tba = [['B', 'Gorong-gorong persegi'], ['Y', 'Gorong-gorong pipa'], ['A', 'Gorong-gorong pelengkung'], ['T', 'Gantung'], ['C', 'Jembatan Gantungan/Beruji Kabel (Cable Stayed'], ['G', 'Gelagar'], ['M', 'Gelagar komposit'], ['O', 'Gelagar boks'], ['Q', 'Gelagar tipe U'], ['L', 'Balok pelengkung'], ['E', 'Pelengkung'], ['D', 'Flat slab'], ['V', 'Voided slab'], ['R', 'Rangka'], ['P', 'Pelat'], ['F', 'Ferry'], ['K', 'Lintasan kereta api'], ['W', 'Lintasa basah'], ['U', 'Lain-lain']];

    private $bhn = [['K', 'Kayu'], ['S', 'Pasangan bata'], ['M', 'Pasangan batu'], ['G', 'Bronjong dan sejenisnya'], ['H', 'Pasangan batu kosong'], ['D', 'Beton tak bertulang'], ['T', 'Beton bertulang'], ['P', 'Beton pratekan'], ['B', 'Baja'], ['U', 'Pelat baja gelombang'], ['Y', 'Komposit Baja-beton'], ['J', 'Aluminium'], ['E', 'Neoprene karet'], ['F', 'Teflon'], ['V', 'PVC'], ['N', 'Geotextile'], ['O', 'Tanah biasa/lempung atau timbunan'], ['A', 'Aspal'], ['R', 'Kerikil/pasir'], ['W', 'Macadam'], ['X', 'Bahan asli'], ['L', 'Lain-lain']];

    private $sba = [['P', 'Permanen'], ['S', 'Semi permanen'], ['W', 'Darurat'], ['X', 'Tidak ada struktur'], ['M', 'Bergerak'], ['F', 'Agung']];

    private $keterangan_detail = [['A', 'Australia'], ['T', 'Australia (Sementara)'], ['B', 'Belanda (Tipe baru)'], ['D', 'Belanda (Tipe lama)'], ['I', 'Indonesia'], ['J', 'Jepang'], ['R', 'Austria'], ['E', 'Spanyol'], ['U', 'Callendar Hamilton (UK/Inggris)'], ['W', 'Acrow/Bailey']];

    private $tf = [['CA', 'Cakar ayam'], ['LS', 'langsung'], ['TP', 'Tiang pancang'], ['PB', 'Tiang bor'], ['TU', 'Tiang ulir'], ['SU', 'Sumuran'], ['LL', 'Lain-lain']];

    private $pilon = [['A', 'Tipe A'], ['D', 'Tipe Diamond'], ['H', 'Tipe H'], ['I', 'Tipe tunggal/I'], ['Y', 'Tipe Y'], ['V', 'Tipe V terbuka'], ['W', 'Double I']];

    private $kjp = [['A', 'Cap (Kepala tiang)'], ['B', 'Dinding penuh'], ['K', 'Kepala jembatan khusus']];

    private $pilar = [['C', 'Cap (Kepala tiang)'], ['P', 'Dinding penuh'], ['S', 'Satu kolom'], ['D', 'Dua kolom'], ['T', 'Tiga atau lebih kolom'], ['L', 'Lain-lain'], ['V', 'Tipe V']];

    private $tiang_sandaran = [['TB', 'tiang beton sandaran baja'], ['BB', 'tiang baja sandaran baja dinding bagian bawah + sandaran baja'], ['DB', 'Sandaran/Median beton'], ['DD', 'bertulang'], ['KK', 'tiang kayu sandaran kayu']];

    public function create($id)
    {
        $data = Bridge::findOrFail($id);

        $tba = $this->tba;
        $bhn = $this->bhn;
        $sba = $this->sba;
        $keterangan_detail = $this->keterangan_detail;
        $tf = $this->tf;
        $pilon = $this->pilon;
        $kjp = $this->kjp;
        $pilar = $this->pilar;
        $tiang_sandaran = $this->tiang_sandaran;

        return view('pages.monitoring.create', compact('data', 'tba', 'bhn', 'sba', 'keterangan_detail', 'tf', 'pilon', 'kjp', 'pilar', 'tiang_sandaran'));
    }

    public function store_a5(Request $request)
    {
        $data = A5::create($request->all());

        if ($data) {
            Alert::success('Berhasil!', 'Data berhasil ditambahkan!');
            return redirect()->back();
        } else {
            Alert::error('Gagal!', 'Data gagal ditambahkan!');
            return redirect()->back();
        }
    }

    public function store_a6(Request $request)
    {
        $data = A6::create($request->all());

        if ($data) {
            Alert::success('Berhasil!', 'Data berhasil ditambahkan!');
            return redirect()->back();
        } else {
            Alert::error('Gagal!', 'Data gagal ditambahkan!');
            return redirect()->back();
        }
    }

    public function store_a9(Request $request)
    {
        $data = A9::create($request->all());

        if ($data) {
            Alert::success('Berhasil!', 'Data berhasil ditambahkan!');
            return redirect()->back();
        } else {
            Alert::error('Gagal!', 'Data gagal ditambahkan!');
            return redirect()->back();
        }
    }

    public function store_a10(Request $request)
    {
        $data = A10::create($request->all());

        if ($data) {
            Alert::success('Berhasil!', 'Data berhasil ditambahkan!');
            return redirect()->back();
        } else {
            Alert::error('Gagal!', 'Data gagal ditambahkan!');
            return redirect()->back();
        }
    }

    public function laporan_a5()
    {
        $a5 = A5::all();

        return view('pages.monitoring.laporan-a5', compact('a5'));
    }

    public function laporan_a6()
    {
        $a6 = A6::all();

        return view('pages.monitoring.laporan-a6', compact('a6'));
    }

    public function laporan_a9()
    {
        $a9 = A9::all();

        return view('pages.monitoring.laporan-a9', compact('a9'));
    }

    public function laporan_a10()
    {
        $a10 = A10::all();

        return view('pages.monitoring.laporan-a10', compact('a10'));
    }

    public function detail_a5($id)
    {
        $data = A5::findOrFail($id);

        return view('pages.laporan.detail-a5', compact('data'));
    }

    public function detail_a6($id)
    {
        $data = A6::findOrFail($id);

        return view('pages.laporan.detail-a6', compact('data'));
    }

    public function detail_a9($id)
    {
        $data = A9::findOrFail($id);

        return view('pages.laporan.detail-a9', compact('data'));
    }

    public function detail_a10($id)
    {
        $data = A10::findOrFail($id);

        return view('pages.laporan.detail-a10', compact('data'));
    }
}
