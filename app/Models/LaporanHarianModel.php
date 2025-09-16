<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanHarianModel extends Model
{
    use HasFactory;
    protected $table = 'laporan_harian';
    protected $primaryKey = 'id';
    protected $fillable = [
        'cuaca',
        'total_wo',
        'total_p0',
        'total_vcc_merah',
        'total_vcc_hitam',
        'yantek_performance_under_perf',
        'yantek_performance_middle_perf',
        'yantek_performance_top_perf',
        'rating_plnmobile',
        'rpt',
        'rct',
        'kinerja_pmt',
        'cbog_rec_sso',
        'anomali_wo_lapberulang',
        'anomali_wo_skipstep',
        'anomali_wo_ratingnegatif',
        'safety_performance_unsafeaction',
        'safety_performance_unsafecondiction',
        'safety_performance_nearmiss',
        'safety_performance_accident',
        'tidak_padam_pdkb',
        'tidak_padam_savingpdkb',
        'padam_nonpdkb',
        'padam_ens',
        'beban_sistem_pagi',
        'beban_sistem_siang',
        'beban_sistem_malam',
        'target_p2tl',
        'realisasi_p2tl',
        'top_performance',
        'jumlah_kwhmeter_top_performance',
        'bottom_performance',
        'jumlah_kwhmeter_bottom_performance',
        'ganti_meter_tua_prabayar',
        'ganti_meter_tua_pascabayar',
        'saldo_meter_tua',
        'pelanggan_vvip_jumlahpelanggan',
        'pelanggan_vvip_padam',
        'pelanggan_vip_jumlahpelanggan',
        'pelanggan_vip_padam',
        'pelanggan_prioritas_jumlahpelanggan',
        'pelanggan_prioritas_padam',
    ];
}
