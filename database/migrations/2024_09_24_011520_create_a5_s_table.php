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
        Schema::create('a5_s', function (Blueprint $table) {
            $table->id();
            $table->string('id_jembatan');
            $table->string('no_bentang');
            $table->double('panjang_bentang');
            $table->double('jumlah_gelagar');
            $table->double('sudut');
            $table->double('radius');
            $table->double('lebar_lantai');
            $table->double('lebar_trotoar');
            $table->double('tinggi_ruang');
            $table->string('struktur_utama_tba');
            $table->string('struktur_utama_bhn');
            $table->string('struktur_utama_sba');
            $table->string('pilon_tipe');
            $table->string('pilon_bhn');
            $table->string('struktur_lantai_bhn');
            $table->string('perkuatan_sistem_bhn');
            $table->string('lapis_permukaan_bhn');
            $table->string('pengaman_pengguna_tba');
            $table->string('pengaman_pengguna_bhn');
            $table->string('pengaman_pengguna_sba');
            $table->string('perletakan_kode');
            $table->string('perletakan_bhn');
            $table->string('sambungan_kode');
            $table->string('sambungan_bhn');
            $table->string('aerodinamik_kode');
            $table->string('aerodinamik_bhn');
            $table->string('perkuatan_kode');
            $table->string('perkuatan_bhn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('a5_s');
    }
};
