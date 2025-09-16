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
  public function create()
  {
    return view('tambah_laporan');
  }
  public function store(Request $request)
  {
    $request->validate([
      'cuaca' => 'required',
      'total_wo' => 'required',
      'total_p0' => 'required',
      'total_vcc_merah' => 'required',
      'total_vcc_hitam' => 'required',
      'yantek_performance_under_perf' => 'required',
      'yantek_performance_middle_perf' => 'required',
      'yantek_performance_top_perf' => 'required',
      'rating_plnmobile' => 'required',
      'rpt' => 'required',
      'rct' => 'required',
      'kinerja_pmt' => 'required',
      'cbog_rec_sso' => 'required',
      'anomali_wo_lapberulang' => 'required',
      'anomali_wo_skipstep' => 'required',
      'anomali_wo_ratingnegatif' => 'required',
      'safety_performance_unsafeaction' => 'required',
      'safety_performance_unsafecondiction' => 'required',
      'safety_performance_nearmiss' => 'required',
      'safety_performance_accident' => 'required',
      'tidak_padam_pdkb' => 'required',
      'tidak_padam_savingpdkb' => 'required',
      'padam_nonpdkb' => 'required',
      'padam_ens' => 'required',
      'beban_sistem_pagi' => 'required',
      'beban_sistem_siang' => 'required',
      'beban_sistem_malam' => 'required',
      'target_p2tl' => 'required',
      'realisasi_p2tl' => 'required',
      'top_performance' => 'required',
      'jumlah_kwhmeter_top_performance' => 'required',
      'bottom_performance' => 'required',
      'jumlah_kwhmeter_bottom_performance' => 'required',
      'ganti_meter_tua_prabayar' => 'required',
      'ganti_meter_tua_pascabayar' => 	'required',
      'saldo_meter_tua' => 	'required',
      'pelanggan_vvip_jumlahpelanggan' => 	'required',
      'pelanggan_vvip_padam' => 	'required',
      'pelanggan_vip_jumlahpelanggan' => 	'required',
      'pelanggan_vip_padam' => 	'required',
    ]);

    LaporanHarianModel::create($request->all());

    return redirect()->route('laporan-harian.index')->with('success', 'Laporan harian berhasil ditambahkan.');
  }
  public function destroy($id)
  {
    $laporan = LaporanHarianModel::findOrFail($id);
    $laporan->delete();

    return redirect()->route('laporan-harian.admin')->with('success', 'Laporan harian berhasil dihapus.');
  }
  public function update(Request $request, $id)
  {
    $request->validate([
      'cuaca' => 'required',
      'total_wo' => 'required',
      'total_p0' => 'required',
      'total_vcc_merah' => 'required',
      'total_vcc_hitam' => 'required',
      'yantek_performance_under_perf' => 'required',
      'yantek_performance_middle_perf' => 'required',
      'yantek_performance_top_perf' => 'required',
      'rating_plnmobile' => 'required',
      'rpt' => 'required',
      'rct' => 'required',
      'kinerja_pmt' => 'required',
      'cbog_rec_sso' => 'required',
      'anomali_wo_lapberulang' => 'required',
      'anomali_wo_skipstep' => 'required',
      'anomali_wo_ratingnegatif' => 'required',
      'safety_performance_unsafeaction' => 'required',
      'safety_performance_unsafecondiction' => 'required',
      'safety_performance_nearmiss' => 'required',
      'safety_performance_accident' => 'required',
      'tidak_padam_pdkb' => 'required',
      'tidak_padam_savingpdkb' => 'required',
      'padam_nonpdkb' => 'required',
      'padam_ens' => 'required',
      'beban_sistem_pagi' => 'required',
      'beban_sistem_siang' => 'required',
      'beban_sistem_malam' => 'required',
      'target_p2tl' => 'required',
      'realisasi_p2tl' => 'required',
      'top_performance' => 'required',
      'jumlah_kwhmeter_top_performance' => 'required',
      'bottom_performance' => 'required',
      'jumlah_kwhmeter_bottom_performance' => 'required',
      'ganti_meter_tua_prabayar' => 	'required',
      'ganti_meter_tua_pascabayar' => 	'required',
      'saldo_meter_tua' => 	'required',
      'pelanggan_vvip_jumlahpelanggan' => 	'required',
      'pelanggan_vvip_padam' => 	'required',
      'pelanggan_vip_jumlahpelanggan' => 	'required',
      'pelanggan_vip_padam' => 	'required',
    ]); 
    $laporan = LaporanHarianModel::findOrFail($id);
    $laporan->update($request->all());
    return redirect()->route('laporan-harian.admin')->with('success', 'Laporan harian berhasil diupdate.');
}
}