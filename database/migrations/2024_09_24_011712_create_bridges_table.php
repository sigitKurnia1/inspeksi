<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bridges', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_jembatan');
            $table->string('nama_jembatan');
            $table->string('lokasi_jembatan_kota');
            $table->string('lokasi_jembatan_kabupaten');
            $table->string('lokasi_jembatan_provinsi');
            $table->date('tahun_pembangunan');
            $table->string('gambar');
            $table->double('lat');
            $table->double('long');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bridges');
    }
};
