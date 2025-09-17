   <!DOCTYPE html>

   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
           integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
       <!-- Font Awesome CDN -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
           integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="{{ asset('css/app.css') }}">
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
       <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
       <link rel="icon" href="{{ asset('public/img/Logo_PLN.png') }}" type="image/png">
       <title>Tambah Laporan Kinerja Distribusi</title>
       <style>
           @media (max-width: 600px) {
               #sidebar {
                   display: none;
                   position: absolute;
                   z-index: 1000;
                   background-color: #dc3545;
                   color: white;
                   width: 200px;
                   height: 100vh;
                   top: 10;
                   left: 0;
                   padding: 20px;
               }

               #toggleSidebarBtn {
                   display: block;
               }
           }

           .span_dashboard {
               font-size: 17px;
               font-weight: 600;
               color: white;
           }
       </style>
   </head>

   <body>
       <div class="nav-profile p-3 d-flex justify-content-between align-items-center bg-danger text-white">
           <div class="d-flex align-items-center">
               <span class="span_dashboard">Admin Laporan Harian Kinerja Distribusi</span>
           </div>
       </div>
       <div class="flex-grow-1 p-4">
           <h3 class="mb-3">Tambah Laporan Kinerja Distribusi</h3>
           @if ($errors->any())
               <div class="alert alert-danger">
                   <ul>
                       @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                       @endforeach
                   </ul>
               </div>
           @endif
           <form action="{{ route('laporan-harian.store') }}" method="post">
               @csrf
               <div class="row">
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="cuaca" class="form-label">Cuaca</label>
                           <select name="cuaca" id="cuaca" class="form-select" required>
                               <option value="" selected disabled>Pilih Cuaca</option>
                               <option value="Cerah" {{ old('cuaca') == 'Cerah' ? 'selected' : '' }}>Cerah</option>
                               <option value="Hujan" {{ old('cuaca') == 'Hujan' ? 'selected' : '' }}>Hujan</option>
                               <option value="Berawan" {{ old('cuaca') == 'Berawan' ? 'selected' : '' }}>Berawan
                               </option>
                           </select>
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="total_wo" class="form-label">Total WO</label>
                           <input type="text" class="form-control" id="total_wo" name="total_wo" required
                               value="{{ old('total_wo') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="total_p0" class="form-label">Total P0</label>
                           <input type="text" class="form-control" id="total_p0" name="total_p0" required
                               value="{{ old('total_p0') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="total_vcc_merah" class="form-label">Total VCC Merah</label>
                           <input type="text" class="form-control" id="total_vcc_merah" name="total_vcc_merah"
                               required value="{{ old('total_vcc_merah') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="total_vcc_hitam" class="form-label">Total VCC Hitam</label>
                           <input type="text" class="form-control" id="total_vcc_hitam" name="total_vcc_hitam"
                               required value="{{ old('total_vcc_hitam') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="yantek_performance_under_perf" class="form-label">Yantek Underperformance</label>
                           <input type="text" class="form-control" id="yantek_performance_under_perf"
                               name="yantek_performance_under_perf" required
                               value="{{ old('yantek_performance_under_perf') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="yantek_performance_middle_perf" class="form-label">Yantek Middle
                               Performance</label>
                           <input type="text" class="form-control" id="yantek_performance_middle_perf"
                               name="yantek_performance_middle_perf" required
                               value="{{ old('yantek_performance_middle_perf') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="yantek_performance_top_perf" class="form-label">Yantek Middle
                               Performance</label>
                           <input type="text" class="form-control" id="yantek_performance_top_perf"
                               name="yantek_performance_top_perf" required
                               value="{{ old('yantek_performance_top_perf') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="rating_plnmobile" class="form-label">Rating PLN Mobile</label>
                           <input type="text" class="form-control" id="rating_plnmobile" name="rating_plnmobile"
                               required value="{{ old('rating_plnmobile') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="rpt" class="form-label">RPT</label>
                           <input type="text" class="form-control" id="rpt" name="rpt" required
                               value="{{ old('rpt') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="rct" class="form-label">RCT</label>
                           <input type="text" class="form-control" id="rct" name="rct" required
                               value="{{ old('rct') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="kinerja_pmt" class="form-label">Kinerja PMT</label>
                           <input type="text" class="form-control" id="kinerja_pmt" name="kinerja_pmt" required
                               value="{{ old('kinerja_pmt') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="cbog_rec_sso" class="form-label">Kinerja CBOG REC SSO</label>
                           <input type="text" class="form-control" id="cbog_rec_sso" name="cbog_rec_sso" required
                               value="{{ old('cbog_rec_sso') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="anomali_wo_lapberulang" class="form-label">Anomali WO Lap Berulang</label>
                           <input type="text" class="form-control" id="anomali_wo_lapberulang"
                               name="anomali_wo_lapberulang" required value="{{ old('anomali_wo_lapberulang') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="anomali_wo_skipstep" class="form-label">Anomali WO Skip Step</label>
                           <input type="text" class="form-control" id="anomali_wo_skipstep"
                               name="anomali_wo_skipstep" required value="{{ old('anomali_wo_skipstep') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="anomali_wo_ratingnegatif" class="form-label">Anomali WO Rating Negatif</label>
                           <input type="text" class="form-control" id="anomali_wo_ratingnegatif"
                               name="anomali_wo_ratingnegatif" required
                               value="{{ old('anomali_wo_ratingnegatif') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="safety_performance_unsafeaction" class="form-label">Safety Performance
                               UnsafeAction</label>
                           <input type="text" class="form-control" id="safety_performance_unsafeaction"
                               name="safety_performance_unsafeaction" required
                               value="{{ old('safety_performance_unsafeaction') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="safety_performance_unsafecondiction" class="form-label">Safety Performance
                               UnsafeCondition</label>
                           <input type="text" class="form-control" id="safety_performance_unsafecondiction"
                               name="safety_performance_unsafecondiction" required
                               value="{{ old('safety_performance_unsafecondiction') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="safety_performance_nearmiss" class="form-label">Safety Performance Near
                               Miss</label>
                           <input type="text" class="form-control" id="safety_performance_nearmiss"
                               name="safety_performance_nearmiss" required
                               value="{{ old('safety_performance_nearmiss') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="safety_performance_accident" class="form-label">Safety Performance
                               Accident</label>
                           <input type="text" class="form-control" id="safety_performance_accident"
                               name="safety_performance_accident" required
                               value="{{ old('safety_performance_accident') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="tidak_padam_pdkb" class="form-label">Tidak Padam PDKB</label>
                           <input type="text" class="form-control" id="tidak_padam_pdkb" name="tidak_padam_pdkb"
                               required value="{{ old('tidak_padam_pdkb') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="tidak_padam_savingpdkb" class="form-label">Tidak Padam Saving PDKB</label>
                           <input type="text" class="form-control" id="tidak_padam_savingpdkb"
                               name="tidak_padam_savingpdkb" required value="{{ old('tidak_padam_savingpdkb') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="padam_nonpdkb" class="form-label">Padam Non PDKB</label>
                           <input type="text" class="form-control" id="padam_nonpdkb" name="padam_nonpdkb"
                               required value="{{ old('padam_nonpdkb') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="padam_ens" class="form-label">Padam Ens</label>
                           <input type="text" class="form-control" id="padam_ens" name="padam_ens" required
                               value="{{ old('padam_ens') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="beban_sistem_pagi" class="form-label">Beban Sistem Pagi</label>
                           <input type="text" class="form-control" id="beban_sistem_pagi"
                               name="beban_sistem_pagi" required value="{{ old('beban_sistem_pagi') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="beban_sistem_siang" class="form-label">Beban Sistem Siang</label>
                           <input type="text" class="form-control" id="beban_sistem_siang"
                               name="beban_sistem_siang" required value="{{ old('beban_sistem_siang') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="beban_sistem_malam" class="form-label">Beban Sistem Malam</label>
                           <input type="text" class="form-control" id="beban_sistem_malam"
                               name="beban_sistem_malam" required value="{{ old('beban_sistem_malam') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="target_p2tl" class="form-label">Target P2TL</label>
                           <input type="text" class="form-control" id="target_p2tl" name="target_p2tl" required
                               value="{{ old('target_p2tl') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="realisasi_p2tl" class="form-label">Realisasi P2TL</label>
                           <input type="text" class="form-control" id="realisasi_p2tl" name="realisasi_p2tl"
                               required value="{{ old('realisasi_p2tl') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="top_performance" class="form-label">Top Performance</label>
                           <select name="top_performance" id="top_performance" class="form-select" required>
                               <option value="" selected disabled>Pilih Top Performance</option>
                               <option value="ULP Demak"
                                   {{ old('top_performance') == 'ULP Demak' ? 'selected' : '' }}>ULP Demak</option>
                               <option value="ULP Tegowanu"
                                   {{ old('top_performance') == 'ULP Tegowanu' ? 'selected' : '' }}>ULP Tegowanu
                               </option>
                               <option value="ULP Purwodadi"
                                   {{ old('top_performance') == 'ULP Purwodadi' ? 'selected' : '' }}>ULP Purwodadi
                               </option>
                               <option value="ULP Wirosari"
                                   {{ old('top_performance') == 'ULP Wirosari' ? 'selected' : '' }}>ULP Wirosari
                               </option>
                           </select>
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="jumlah_kwhmeter_top_performance" class="form-label">Jumlah kWhmeter Top
                               Performance</label>
                           <input type="text" class="form-control" id="jumlah_kwhmeter_top_performance"
                               name="jumlah_kwhmeter_top_performance" required
                               value="{{ old('jumlah_kwhmeter_top_performance') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="bottom_performance" class="form-label">Bottom Performance</label>
                           <select name="bottom_performance" id="bottom_performance" class="form-select" required
                               value="{{ old('total_wo') }}">
                               <option value="" selected disabled>Pilih Bottom Performance</option>
                               <option value="ULP Demak"
                                   {{ old('bottom_performance') == 'ULP Demak' ? 'selected' : '' }}>ULP Demak</option>
                               <option value="ULP Tegowanu"
                                   {{ old('bottom_performance') == 'ULP Tegowanu' ? 'selected' : '' }}>ULP Tegowanu
                               </option>
                               <option value="ULP Purwodadi"
                                   {{ old('bottom_performance') == 'ULP Purwodadi' ? 'selected' : '' }}>ULP Purwodadi
                               </option>
                               <option value="ULP Wirosari"
                                   {{ old('bottom_performance') == 'ULP Wirosari' ? 'selected' : '' }}>ULP Wirosari
                               </option>
                           </select>
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="jumlah_kwhmeter_bottom_performance" class="form-label">Jumlah kWhmeter Bottom
                               Performance</label>
                           <input type="text" class="form-control" id="jumlah_kwhmeter_bottom_performance"
                               name="jumlah_kwhmeter_bottom_performance" required
                               value="{{ old('jumlah_kwhmeter_bottom_performance') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="ganti_meter_tua_prabayar" class="form-label">Ganti Meter Tua Prabayar</label>
                           <input type="text" class="form-control" id="ganti_meter_tua_prabayar"
                               name="ganti_meter_tua_prabayar" required
                               value="{{ old('ganti_meter_tua_prabayar') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="ganti_meter_tua_pascabayar" class="form-label">Ganti Meter Tua
                               Pascabayar</label>
                           <input type="text" class="form-control" id="ganti_meter_tua_pascabayar"
                               name="ganti_meter_tua_pascabayar" required
                               value="{{ old('ganti_meter_tua_pascabayar') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="saldo_meter_tua" class="form-label">Saldo Meter Tua</label>
                           <input type="text" class="form-control" id="saldo_meter_tua" name="saldo_meter_tua"
                               required value="{{ old('saldo_meter_tua') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="pelanggan_vvip_jumlahpelanggan" class="form-label">Pelanggan VVIP Jumlah
                               Pelanggan</label>
                           <input type="text" class="form-control" id="pelanggan_vvip_jumlahpelanggan"
                               name="pelanggan_vvip_jumlahpelanggan" required
                               value="{{ old('pelanggan_vvip_jumlahpelanggan') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="pelanggan_vvip_padam" class="form-label">Pelanggan VVIP Padam</label>
                           <input type="text" class="form-control" id="pelanggan_vvip_padam"
                               name="pelanggan_vvip_padam" required value="{{ old('pelanggan_vvip_padam') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="pelanggan_vip_jumlahpelanggan" class="form-label">Pelanggan VIP Jumlah
                               Pelanggan</label>
                           <input type="text" class="form-control" id="pelanggan_vip_jumlahpelanggan"
                               name="pelanggan_vip_jumlahpelanggan" required
                               value="{{ old('pelanggan_vip_jumlahpelanggan') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="pelanggan_vip_padam" class="form-label">Pelanggan VIP Padam</label>
                           <input type="text" class="form-control" id="pelanggan_vip_padam"
                               name="pelanggan_vip_padam" required value="{{ old('pelanggan_vip_padam') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="pelanggan_prioritas_jumlahpelanggan" class="form-label">Pelanggan Prioritas
                               Jumlah Pelanggan</label>
                           <input type="text" class="form-control" id="pelanggan_prioritas_jumlahpelanggan"
                               name="pelanggan_prioritas_jumlahpelanggan" required
                               value="{{ old('pelanggan_prioritas_jumlahpelanggan') }}">
                       </div>
                   </div>
                   <div class="col-3">
                       <div class="mb-3">
                           <label for="pelanggan_prioritas_padam" class="form-label">Pelanggan Prioritas Padam</label>
                           <input type="text" class="form-control" id="pelanggan_prioritas_padam"
                               name="pelanggan_prioritas_padam" required
                               value="{{ old('pelanggan_prioritas_padam') }}">
                       </div>
                   </div>
               </div>
               <div class="d-grid gap-2">
                   <button type="submit" class="btn btn-primary">Simpan</button>
               </div>
           </form>
       </div>
       <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
       <script>
           $(document).ready(function() {
               $('#toggleSidebarBtn').click(function() {
                   $('#sidebar').toggle();
               });
           });
       </script>
       <script>
           $(document).ready(function() {
               $('#profile').click(function() {
                   $('#view_profile').toggle();
               });
           });
       </script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
           integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
       </script>
   </body>

   </html>
