<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class APIInfrastrukturController extends Controller {  
  //INFRASTRUKTUR Panjang Jalan Yang Dibangun dan Ditingkatkan (PJDD) - [m_28_jalan]
	public function pjddIndex(Request $request)
	{
    $data = \DB::table('m_28_jalan')
    ->select(\DB::raw('
      tahun,
      panjang,
      status_data
    '))    
    ->orderBy('tahun', 'desc')
    ->get();

    return response()->json([
      'status'=>'100',
      'message'=>'INFRASTRUKTUR Panjang Jalan Yang Dibangun dan Ditingkatkan (PJDD) - [m_28_jalan]',
      'result'=>$data
    ], 200);
  }
  //INFRASTRUKTUR Persentase Rumah Tangga yang menggunakan air bersih (PRT) - [m_29_air]
	public function prtIndex(Request $request)
	{
    $data = \DB::table('m_29_air')
    ->select(\DB::raw('
      tahun,
      nilai,
      status_data
    '))    
    ->orderBy('tahun', 'desc')
    ->get();

    return response()->json([
      'status'=>'100',
      'message'=>'INFRASTRUKTUR Persentase Rumah Tangga yang menggunakan air bersih (PRT) - [m_29_air]',
      'result'=>$data
    ], 200);
  }
  //INFRASTRUKTUR  Persentase Tingkat Kemantapan Jalan (PTKJ) - [m_37_kemantapan_jalan]
	public function ptkjIndex(Request $request)
	{
    $data = \DB::table('m_37_kemantapan_jalan')
    ->select(\DB::raw('
      tahun,
      kemantapan_jalan,
      status_data
    '))    
    ->orderBy('tahun', 'desc')
    ->get();

    return response()->json([
      'status'=>'100',
      'message'=>'INFRASTRUKTUR  Persentase Tingkat Kemantapan Jalan (PTKJ) - [m_37_kemantapan_jalan]',
      'result'=>$data
    ], 200);
  }
}