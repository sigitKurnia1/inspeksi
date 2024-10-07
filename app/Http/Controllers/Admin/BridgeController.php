<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bridge;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;

class BridgeController extends Controller
{
    public function index()
    {
        $data = Bridge::all();

        confirmDelete('Hapus Data!', 'Apakah anda yakin ingin menghapus data ini?');

        return view('pages.bridge.index', compact('data'));
    }

    public function create()
    {
        return view('pages.bridge.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nomor_jembatan' => 'required',
            'nama_jembatan' => 'required',
            'lokasi_jembatan_kota' => 'required',
            'lokasi_jembatan_kabupaten' => 'required',
            'lokasi_jembatan_provinsi' => 'required',
            'tahun_pembangunan' => 'required',
            'gambar' => 'required|mimes:png,jpg,jpeg',
            'lat' => 'required|numeric',
            'long' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            Alert::error('Pastikan semua kolom terisi dengan benar!');
            return redirect()->back();
        }

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('assets/images/', $imageName);
        }

        $data = Bridge::create([
            'nomor_jembatan' => $request->nomor_jembatan,
            'nama_jembatan' => $request->nama_jembatan,
            'lokasi_jembatan_kota' => $request->lokasi_jembatan_kota,
            'lokasi_jembatan_kabupaten' => $request->lokasi_jembatan_kabupaten,
            'lokasi_jembatan_provinsi' => $request->lokasi_jembatan_provinsi,
            'tahun_pembangunan' => $request->tahun_pembangunan,
            'gambar' => $imageName,
            'lat' => $request->lat,
            'long' => $request->long,
        ]);


        if ($data) {
            Alert::success('Berhasil!', 'Data jembatan berhasil ditambahkan!');
            return redirect()->route('bridge');
        } else {
            Alert::error('Gagal!', 'Data jembatan gagal ditambahkan!');
            return redirect()->back();
        }
    }

    public function show($id)
    {
        $data = Bridge::findOrFail($id);

        return view('pages.bridge.detail', compact('data'));
    }

    public function edit($id)
    {
        $data = Bridge::findOrFail($id);

        return view('pages.bridge.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nomor_jembatan' => 'required',
            'nama_jembatan' => 'required',
            'lokasi_jembatan_kota' => 'required',
            'lokasi_jembatan_kabupaten' => 'required',
            'lokasi_jembatan_provinsi' => 'required',
            'tahun_pembangunan' => 'required',
            'gambar' => 'mimes:png,jpg,jpeg',
            'lat' => 'required|numeric',
            'long' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            Alert::error('Pastikan semua kolom terisi dengan benar!');
            return redirect()->back();
        }

        $data = Bridge::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $oldPath = public_path('assets/images/' . $data->gambar);
            
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }

            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('assets/images/', $imageName);
        } else {
            $imageName = $data->gambar;
        }

        $data->update([
            'nomor_jembatan' => $request->nomor_jembatan,
            'nama_jembatan' => $request->nama_jembatan,
            'lokasi_jembatan_kota' => $request->lokasi_jembatan_kota,
            'lokasi_jembatan_kabupaten' => $request->lokasi_jembatan_kabupaten,
            'lokasi_jembatan_provinsi' => $request->lokasi_jembatan_provinsi,
            'tahun_pembangunan' => $request->tahun_pembangunan,
            'gambar' => $imageName,
            'lat' => $request->lat,
            'long' => $request->long,
        ]);

        if ($data) {
            Alert::success('Berhasil!', 'Data jembatan berhasil diperbarui!');
            return redirect()->route('bridge');
        } else {
            Alert::error('Gagal!', 'Data jembatan gagal diperbarui!');
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        $data = Bridge::findOrFail($id);

        $oldPath = public_path('assets/images/' . $data->gambar);
        if (File::exists($oldPath)) {
            File::delete($oldPath);
        }

        $data->delete();

        if ($data) {
            Alert::success('Berhasil!', 'Data jembatan berhasil dihapus!');
            return redirect()->back();
        } else {
            Alert::error('Gagal!', 'Data jembatan gagal dihapus!');
            return redirect()->back();
        }
    }
}
