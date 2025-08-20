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
        Schema::create('laporan_harian', function (Blueprint $table) {
            $table->id();
            $table->string('cuaca');
            $table->string('total_wo');
            $table->string('total_vcc');
            $table->string('yantek_performance');
            $table->string('rating_plnmobile');
            $table->string('rpt_rct');
            $table->string('kinerja_pmt');
            $table->string('anomali_wo');
            $table->string('safety_performance');
            $table->string('tidak_padam');
            $table->string('padam');
            $table->string('beban_sistem');
            $table->string('target_p2tl');
            $table->string('realisasi_p2tl');
            $table->string('top_performance');
            $table->string('bottom_performance');
            $table->string('ganti_meter_tua_prabayar');
            $table->string('ganti_meter_tua_pascabayar');
            $table->string('saldo_meter_tua');
            $table->string('pelanggan_vvip');
            $table->string('pelanggan_vip');
            $table->string('pelanggan_prioritas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_harian');
    }
};
