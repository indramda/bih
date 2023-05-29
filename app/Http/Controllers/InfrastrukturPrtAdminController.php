<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSosialModel;

class InfrastrukturPrtAdminController extends Controller
{
    public function prtIndex()
    {
      $data = DataSosialModel::orderBy('tahun', 'desc')->get();
  
      return view('admin.infrastruktur.prt_tampil', [
        'title' => 'Persentase Rumah Tangga yang menggunakan air bersih (PRT)',
        'sumber' => 'BPS',
        'data' => $data
      ]);
    }
}