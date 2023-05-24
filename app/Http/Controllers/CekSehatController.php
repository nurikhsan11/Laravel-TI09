<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CekSehatController extends Controller
{
    public function index()
    {
        return view('Praktikum-8/CekSehat');
    }

    public function submit(Request $request)
    {
        // Proses penyimpanan data ke database atau melakukan validasi data

        // Contoh pengambilan data dari form
        $nama = $request->input('nama');
        $tanggal_pemeriksaan = $request->input('tanggal_pemeriksaan');
        $tanggal_lahir = $request->input('tanggal_lahir');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $tekanan_darah = $request->input('tekanan_darah');
        $asam_urat = $request->input('asam_urat');
        $kolesterol_total = $request->input('kolesterol_total');
        $gula_darah = $request->input('gula_darah');

        // Lakukan operasi logika atau tampilkan hasil di halaman lain

        return view('Praktikum-8/hasilperiksa', compact('nama', 'tanggal_pemeriksaan', 'tanggal_lahir', 'jenis_kelamin', 'tekanan_darah', 'asam_urat', 'kolesterol_total', 'gula_darah'));
    }
}
