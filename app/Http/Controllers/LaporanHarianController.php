<?php

namespace App\Http\Controllers;

use App\Models\LaporanHarianModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LaporanHarianController extends Controller
{
  public function index()
  {
    Carbon::setLocale('id'); 
    $data = [
      'laporanHariIni' => LaporanHarianModel::whereDate('created_at', Carbon::today())->get(),
      'tanggal_sekarang' => Carbon::now()->translatedFormat('l, d F Y'),
    ];

    return view('index', $data);
  }
  public function admin()
  {
    $laporanharian = LaporanHarianModel::all();

      return view('admin', compact('laporanharian'));
    }
    public function create(){
      return view('tambah_laporan');
    }
    public function store(Request $request){
      // Validasi input
      $request->validate([
          'cuaca' => 'required|string',
          'total_wo' => 'required|string',
          'total_vcc' => 'required|string',
          'yantek_performance' => 'required|string',
          'rating_plnmobile' => 'required|string',
          'rpt_rct' => 'required|string',
          'kinerja_pmt' => 'required|string',
          'anomali_wo' => 'required|string',
          'safety_performance' => 'required|string',
          'tidak_padam' => 'required|string',
          'padam' => 'required|string',
          'beban_sistem' => 'required|string',
          'target_p2tl' => 'required|string',
          'realisasi_p2tl' => 'required|string',
          'top_performance' => 'required|string',
          'bottom_performance' => 'required|string',
          'ganti_meter_tua_prabayar' => 'required|string',
          'ganti_meter_tua_pascabayar' => 'required|string',
          'saldo_meter_tua' => 'required|string',
          'pelanggan_vvip' => 'required|string',
          'pelanggan_vip' => 'required|string',
          'pelanggan_prioritas' => 'required|string',
      ]);

    LaporanHarianModel::create($request->all());

      return redirect()->route('laporan-harian.index')->with('success', 'Laporan harian berhasil ditambahkan.');
    }
}
