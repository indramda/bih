<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSosialModel;

class KependudukanJpbkuAdminController extends Controller
{
    public function jpbkuIndex()
    {
      $data = DataSosialModel::orderBy('tahun', 'desc')->get();
  
      return view('admin.kependudukan.3jpbku_tampil', [
        'title' => 'Jumlah Penduduk Berdasarkan Kelompok Umur (JPBKU)',
        'sumber' => 'BPS',
        'data' => $data
      ]);
    }
    public function jpbku_04Tahun()
    {
      $data = DataSosialModel::orderBy('tahun', 'desc')->get(); 

      return view('admin.kependudukan.A_jpbku_04Tahun_tampil', [
        'title' => 'Jumlah Penduduk Berdasarkan Kelompok Umur (JPBKU)',
        'sumber' => '0-4 Tahun',
        'data' => $data
      ]);
    }
    public function jpbku_59Tahun()
    {
      $data = DataSosialModel::orderBy('tahun', 'desc')->get(); 

      return view('admin.kependudukan.B_jpbku_59Tahun_tampil', [
        'title' => 'Jumlah Penduduk Berdasarkan Kelompok Umur (JPBKU)',
        'sumber' => '5-9 Tahun',
        'data' => $data
      ]);
    }
    public function jpbku_1014Tahun()
    {
      $data = DataSosialModel::orderBy('tahun', 'desc')->get(); 

      return view('admin.kependudukan.C_1014Tahun_tampil', [
        'title' => 'Jumlah Penduduk Berdasarkan Kelompok Umur (JPBKU)',
        'sumber' => '10-14 Tahun',
        'data' => $data
      ]);
    }
    public function jpbku_1519Tahun()
    {
      $data = DataSosialModel::orderBy('tahun', 'desc')->get(); 

      return view('admin.kependudukan.D_jpbku_1519Tahun_tampil', [
        'title' => 'Jumlah Penduduk Berdasarkan Kelompok Umur (JPBKU)',
        'sumber' => '15-19 Tahun',
        'data' => $data
      ]);
    }
    public function jpbku_2024Tahun()
    {
      $data = DataSosialModel::orderBy('tahun', 'desc')->get(); 

      return view('admin.kependudukan.E_jpbku_2024Tahun_tampil', [
        'title' => 'Jumlah Penduduk Berdasarkan Kelompok Umur (JPBKU)',
        'sumber' => '20-24 Tahun',
        'data' => $data
      ]);
    }
    public function jpbku_2529Tahun()
    {
      $data = DataSosialModel::orderBy('tahun', 'desc')->get(); 

      return view('admin.kependudukan.F_jpbku_2529Tahun_tampil', [
        'title' => 'Jumlah Penduduk Berdasarkan Kelompok Umur (JPBKU)',
        'sumber' => '25-29 Tahun',
        'data' => $data
      ]);
    }

    public function jpbku_3034Tahun()
    {
      $data = DataSosialModel::orderBy('tahun', 'desc')->get(); 

      return view('admin.kependudukan.G_jpbku_3034Tahun_tampil', [
        'title' => 'Jumlah Penduduk Berdasarkan Kelompok Umur (JPBKU)',
        'sumber' => '30-34 Tahun',
        'data' => $data
      ]);
    }
    public function jpbku_3539Tahun()
    {
      $data = DataSosialModel::orderBy('tahun', 'desc')->get(); 

      return view('admin.kependudukan.H_jpbku_3539Tahun_tampil', [
        'title' => 'Jumlah Penduduk Berdasarkan Kelompok Umur (JPBKU)',
        'sumber' => '35-39 Tahun',
        'data' => $data
      ]);
    }
    public function jpbku_4044Tahun()
    {
      $data = DataSosialModel::orderBy('tahun', 'desc')->get(); 

      return view('admin.kependudukan.I_jpbku_4044Tahun_tampil', [
        'title' => 'Jumlah Penduduk Berdasarkan Kelompok Umur (JPBKU)',
        'sumber' => '40-44 Tahun',
        'data' => $data
      ]);
    }
    public function jpbku_4549Tahun()
    {
      $data = DataSosialModel::orderBy('tahun', 'desc')->get(); 

      return view('admin.kependudukan.J_jpbku_4549Tahun_tampil', [
        'title' => 'Jumlah Penduduk Berdasarkan Kelompok Umur (JPBKU)',
        'sumber' => '45-49 Tahun',
        'data' => $data
      ]);
    }
    public function jpbku_5054Tahun()
    {
      $data = DataSosialModel::orderBy('tahun', 'desc')->get(); 

      return view('admin.kependudukan.K_jpbku_4549Tahun_tampil', [
        'title' => 'Jumlah Penduduk Berdasarkan Kelompok Umur (JPBKU)',
        'sumber' => '50-54 Tahun',
        'data' => $data
      ]);
    }
    public function jpbku_5459Tahun()
    {
      $data = DataSosialModel::orderBy('tahun', 'desc')->get(); 

      return view('admin.kependudukan.L_jpbku_5459Tahun_tampil', [
        'title' => 'Jumlah Penduduk Berdasarkan Kelompok Umur (JPBKU)',
        'sumber' => '54-59 Tahun',
        'data' => $data
      ]);
    }
    public function jpbku_6064Tahun()
    {
      $data = DataSosialModel::orderBy('tahun', 'desc')->get(); 

      return view('admin.kependudukan.M_jpbku_6064Tahun_tampil', [
        'title' => 'Jumlah Penduduk Berdasarkan Kelompok Umur (JPBKU)',
        'sumber' => '60-64 Tahun',
        'data' => $data
      ]);
    }
    public function jpbku_6569Tahun()
    {
      $data = DataSosialModel::orderBy('tahun', 'desc')->get(); 

      return view('admin.kependudukan.N_jpbku_6569Tahun_tampil', [
        'title' => 'Jumlah Penduduk Berdasarkan Kelompok Umur (JPBKU)',
        'sumber' => '65-69 Tahun',
        'data' => $data
      ]);
    }
    public function jpbku_7074Tahun()
    {
      $data = DataSosialModel::orderBy('tahun', 'desc')->get(); 

      return view('admin.kependudukan.O_jpbku_7074Tahun_tampil', [
        'title' => 'Jumlah Penduduk Berdasarkan Kelompok Umur (JPBKU)',
        'sumber' => '70-74 Tahun',
        'data' => $data
      ]);
    }
    public function jpbku_75Tahun()
    {
      $data = DataSosialModel::orderBy('tahun', 'desc')->get(); 

      return view('admin.kependudukan.P_jpbku_75Tahun_tampil', [
        'title' => 'Jumlah Penduduk Berdasarkan Kelompok Umur (JPBKU)',
        'sumber' => '75+ Tahun',
        'data' => $data
      ]);
    }

}
