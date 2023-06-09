<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use App\Models\KategoriProduk;

class KategoriProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori_produk = DB::table('kategori_produk')
        ->select('kategori_produk.*')
        ->get();
    //perintah join diatas untuk menggabungkan tabel produk dan kategori_produk
    return view('admin.produk.kategori_produk', compact('kategori_produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori_produk = DB::table('kategori_produk')->get();
        $produk = DB::table('produk')->get();
        return view('admin.produk.createKProduk', compact('kategori_produk', 'produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kategori_produk = new KategoriProduk;
        $kategori_produk->nama = $request->nama;
        $kategori_produk->save();
        return redirect('kategori_produk');
        

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kproduk = DB::table('kategori_produk')->where('id', $id)->get();
        return view('admin.produk.cekkp',compact('kproduk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $kproduk = DB::table('kategori_produk')->where('id', $id)->get();
        return view('admin.produk.modifkategoriproduk', compact(
            'kproduk'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, )
    {
        $kategori_produk = KategoriProduk::find($request->id);
        $kategori_produk->nama = $request->nama;
        $kategori_produk->save();
        return redirect('kategori_produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('kategori_produk')->where('id', $id)->delete();
    }
}
