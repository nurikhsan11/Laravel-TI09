<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\KategoriProduk;
use App\Models\Pesanan;
use Illuminate\support\facades\DB;

class DetailProdukController extends Controller
{
    public function index()
    {
        $produk = DB::table('produk')
            ->join(
                'kategori_produk',
                'produk.kategori_produk_id',
                '=',
                'kategori_produk.id'
            )
            ->select('produk.*', 'kategori_produk.nama as nama_kategori')
            ->get();
        return view('detailproduk', compact('produk'));
    }
}
