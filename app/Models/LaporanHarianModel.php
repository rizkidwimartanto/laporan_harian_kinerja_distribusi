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
        'total_vcc',
        'yantek_performance',
        'rating_plnmobile',
        'rpt_rct',
        'kinerja_pmt',
        'anomali_wo',
        'safety_performance',
        'tidak_padam',
        'padam',
        'beban_sistem',
        'target_p2tl',
        'realisasi_p2tl',
        'top_performance',
        'bottom_performance',
        'ganti_meter_tua_prabayar',
        'ganti_meter_tua_pascabayar',
        'saldo_meter_tua',
        'pelanggan_vvip',
        'pelanggan_vip',
        'pelanggan_prioritas',
    ];
}
