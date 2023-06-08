<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\KategoriProduk;
use Illuminate\support\facades\DB;

class ProduksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //perintah ini menggunakan eloquent
        $kategori_produk =KategoriProduk::all();
        //perintah ini menggunakan query builder
        //$kategori_produk = DB::table('kategori_produk')->get();
        //untuk mengarahkan ke file produk
        $produk = DB::table('produk')
            ->join(
                'kategori_produk',
                'produk.kategori_produk_id',
                '=',
                'kategori_produk.id'
            )
            ->select('produk.*', 'kategori_produk.nama as nama_kategori')
            ->get();
        return view('admin.produk.produk', compact('produk'));
        return view('admin.produk.kategori_produk', compact('kategori_produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
