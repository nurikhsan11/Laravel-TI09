<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForminputController extends Controller
{
    public function index()
    {
        return view('forminput');
    }

    public function array()
    {
        $ar_skill = ["PHP", "MySQL", "Javascript", "HTML", "CSS"];
        $ar_lokasi = ["Blora", "Demak", "kudus", "Pati", "Rembang", "Grobogan"];

        return view('forminput', compact('ar_skill', 'ar_lokasi'));
    }

    public function processForm(Request $request)
    {
        // Validasi inputan
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'lokasi' => 'required',
            'jenis_kelamin' => 'required',
            'skill' => 'required',
        ]);
        $nama = $request->input('nama');
        $email = $request->input('email');
        $lokasi = $request->input('lokasi');
        $jenisKelamin = $request->input('jenis_kelamin');
        $skill = $request->input('skill');

        // Tampilkan hasil input
        return view('hasilskill', compact('nama', 'email', 'lokasi', 'jenisKelamin', 'skill'));
    }
}
