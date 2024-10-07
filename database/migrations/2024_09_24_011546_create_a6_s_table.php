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
        Schema::create('a6_s', function (Blueprint $table) {
            $table->id();
            $table->string('id_jembatan');
            $table->string('perlengkapan_kode');
            $table->string('perlengkapan_bhn');
            $table->string('penerangan_kode');
            $table->string('penerangan_bhn');
            $table->string('utilitas_kode');
            $table->string('utilitas_bhn');
            $table->string('pengaman_kode');
            $table->string('pengaman_bhn');
            $table->string('smks_kode');
            $table->string('smks_bhn');
            $table->string('moveable_kode');
            $table->string('moveable_bhn');
            $table->string('fasilitas_kode');
            $table->string('fasilitas_bhn');
            $table->string('gorong_tba');
            $table->string('gorong_bhn');
            $table->string('gorong_sba');
            $table->string('perkuatan_gorong_kode');
            $table->string('perkuatan_gorong_bhn');
            $table->string('lintasan_tba');
            $table->string('lintasan_bhn');
            $table->string('lintasan_sba');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('a6_s');
    }
};
