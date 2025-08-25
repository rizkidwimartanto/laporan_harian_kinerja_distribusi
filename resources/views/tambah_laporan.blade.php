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
           <form action="{{route('laporan-harian.store')}}" method="post">
               @csrf
               <div class="mb-3">
                   <label for="cuaca" class="form-label">Cuaca</label>
                   <select name="cuaca" id="cuaca" class="form-select" required>
                       <option value="" selected disabled>Pilih Cuaca</option>
                       <option value="cerah">Cerah</option>
                       <option value="hujan">Hujan</option>
                       <option value="berawan">Berawan</option>
                   </select>
               </div>
               <div class="mb-3">
                   <label for="total_wo" class="form-label">Total WO</label>
                   <input type="text" class="form-control" id="total_wo" name="total_wo" required>
               </div>
               <div class="mb-3">
                   <label for="total_vcc" class="form-label">Total VCC</label>
                   <input type="text" class="form-control" id="total_vcc" name="total_vcc" required>
               </div>
               <div class="mb-3">
                   <label for="yantek_performance" class="form-label">Yantek Performance</label>
                   <input type="text" class="form-control" id="yantek_performance" name="yantek_performance"
                       required>
               </div>
               <div class="mb-3">
                   <label for="rating_plnmobile" class="form-label">Rating PLN Mobile</label>
                   <input type="text" class="form-control" id="rating_plnmobile" name="rating_plnmobile" required>
               </div>
               <div class="mb-3">
                   <label for="rpt_rct" class="form-label">RPT RCT</label>
                   <input type="text" class="form-control" id="rpt_rct" name="rpt_rct" required>
               </div>
               <div class="mb-3">
                   <label for="kinerja_pmt" class="form-label">Kinerja PMT</label>
                   <input type="text" class="form-control" id="kinerja_pmt" name="kinerja_pmt" required>
               </div>
               <div class="mb-3">
                   <label for="anomali_wo" class="form-label">Anomali WO</label>
                   <input type="text" class="form-control" id="anomali_wo" name="anomali_wo" required>
               </div>
               <div class="mb-3">
                   <label for="safety_performance" class="form-label">Safety Performance</label>
                   <input type="text" class="form-control" id="safety_performance" name="safety_performance"
                       required>
               </div>
               <div class="mb-3">
                   <label for="tidak_padam" class="form-label">Tidak Padam</label>
                   <input type="text" class="form-control" id="tidak_padam" name="tidak_padam" required>
               </div>
               <div class="mb-3">
                   <label for="padam" class="form-label">Padam</label>
                   <input type="text" class="form-control" id="padam" name="padam" required>
               </div>
               <div class="mb-3">
                   <label for="beban_sistem" class="form-label">Beban Sistem</label>
                   <input type="text" class="form-control" id="beban_sistem" name="beban_sistem" required>
               </div>
               <div class="mb-3">
                   <label for="target_p2tl" class="form-label">Target P2TL</label>
                   <input type="text" class="form-control" id="target_p2tl" name="target_p2tl" required>
               </div>
               <div class="mb-3">
                   <label for="realisasi_p2tl" class="form-label">Realisasi P2TL</label>
                   <input type="text" class="form-control" id="realisasi_p2tl" name="realisasi_p2tl" required>
               </div>
               <div class="mb-3">
                   <label for="top_performance" class="form-label">Top Performance</label>
                   <select name="top_performance" id="top_performance" class="form-select" required>
                       <option value="" selected disabled>Pilih Top Performance</option>
                       <option value="ULP Demak">ULP Demak</option>
                       <option value="ULP Tegowanu">ULP Tegowanu</option>
                       <option value="ULP Purwodadi">ULP Purwodadi</option>
                       <option value="ULP Wirosari">ULP Wirosari</option>
                   </select>
               </div>
               <div class="mb-3">
                   <label for="bottom_performance" class="form-label">Top Performance</label>
                   <select name="bottom_performance" id="bottom_performance" class="form-select" required>
                       <option value="" selected disabled>Pilih Top Performance</option>
                       <option value="ULP Demak">ULP Demak</option>
                       <option value="ULP Tegowanu">ULP Tegowanu</option>
                       <option value="ULP Purwodadi">ULP Purwodadi</option>
                       <option value="ULP Wirosari">ULP Wirosari</option>
                   </select>
               </div>
               <div class="mb-3">
                   <label for="ganti_meter_tua_prabayar" class="form-label">Ganti Meter Tua Prabayar</label>
                   <input type="text" class="form-control" id="ganti_meter_tua_prabayar" name="ganti_meter_tua_prabayar" required>
               </div>
               <div class="mb-3">
                   <label for="ganti_meter_tua_pascabayar" class="form-label">Ganti Meter Tua Pascabayar</label>
                   <input type="text" class="form-control" id="ganti_meter_tua_pascabayar" name="ganti_meter_tua_pascabayar" required>
               </div>
               <div class="mb-3">
                   <label for="saldo_meter_tua" class="form-label">Saldo Meter Tua</label>
                   <input type="text" class="form-control" id="saldo_meter_tua" name="saldo_meter_tua" required>
               </div>
               <div class="mb-3">
                   <label for="pelanggan_vvip" class="form-label">Pelanggan VVIP</label>
                   <input type="text" class="form-control" id="pelanggan_vvip" name="pelanggan_vvip" required>
               </div>
               <div class="mb-3">
                   <label for="pelanggan_vip" class="form-label">Pelanggan VIP</label>
                   <input type="text" class="form-control" id="pelanggan_vip" name="pelanggan_vip" required>
               </div>
               <div class="mb-3">
                   <label for="pelanggan_prioritas" class="form-label">Pelanggan Prioritas</label>
                   <input type="text" class="form-control" id="pelanggan_prioritas" name="pelanggan_prioritas" required>
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
