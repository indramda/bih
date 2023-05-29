<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSosialModel;

class SosialAkhbAdminController extends Controller
{
    public function akhbIndex()
    {
      $data = DataSosialModel::orderBy('tahun', 'desc')->get();
  
      return view('admin.sosial.akhb_tampil', [
        'title' => 'Angka Kelangsungan Hidup Bayi (AKHB)',
        'data' => $data
      ]);
    }
}