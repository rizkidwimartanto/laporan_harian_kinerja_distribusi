<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanHarianController extends Controller
{
    public function index(){
      return view('index');
    }
    public function admin(){
      return view('admin');
    }
    public function create(){
      return view('tambah_laporan');
    }
}
