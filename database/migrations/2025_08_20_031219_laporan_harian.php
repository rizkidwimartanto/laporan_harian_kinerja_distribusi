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
            $table->string('total_p0');
            $table->string('total_vcc_merah');
            $table->string('total_vcc_hitam');
            $table->string('yantek_performance_under_perf');
            $table->string('yantek_performance_middle_perf');
            $table->string('yantek_performance_top_perf');
            $table->string('rating_plnmobile');
            $table->string('rpt');
            $table->string('rct');
            $table->string('kinerja_pmt');
            $table->string('cbog_rec_sso');
            $table->string('anomali_wo_lapberulang');
            $table->string('anomali_wo_skipstep');
            $table->string('anomali_wo_ratingnegatif');
            $table->string('safety_performance_unsafeaction');
            $table->string('safety_performance_unsafecondiction');
            $table->string('safety_performance_nearmiss');
            $table->string('safety_performance_accident');
            $table->string('tidak_padam_pdkb');
            $table->string('tidak_padam_savingpdkb');
            $table->string('padam_nonpdkb');
            $table->string('padam_ens');
            $table->string('beban_sistem_pagi');
            $table->string('beban_sistem_siang');
            $table->string('beban_sistem_malam');
            $table->string('target_p2tl');
            $table->string('realisasi_p2tl');
            $table->string('top_performance');
            $table->string('jumlah_kwhmeter_top_performance');
            $table->string('bottom_performance');
            $table->string('jumlah_kwhmeter_bottom_performance');
            $table->string('ganti_meter_tua_prabayar');
            $table->string('ganti_meter_tua_pascabayar');
            $table->string('saldo_meter_tua');
            $table->string('pelanggan_vvip_jumlahpelanggan');
            $table->string('pelanggan_vvip_padam');
            $table->string('pelanggan_vip_jumlahpelanggan');
            $table->string('pelanggan_vip_padam');
            $table->string('pelanggan_prioritas_jumlahpelanggan');
            $table->string('pelanggan_prioritas_padam');
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
