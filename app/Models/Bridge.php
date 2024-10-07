<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bridge extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_jembatan', 'nama_jembatan', 'lokasi_jembatan_kota', 'lokasi_jembatan_kabupaten', 'lokasi_jembatan_provinsi', 'tahun_pembangunan', 'gambar', 'lat', 'long'
    ];
}
