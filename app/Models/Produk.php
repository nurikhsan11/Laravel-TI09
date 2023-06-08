<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//query builder

//eloquent

class Produk extends Model
{
    use HasFactory;
    //memanggil tabel yang akan dikelola
    protected $table = 'produk';
    //mendeklarasikan kolom yang ada di dalam tabel
    protected $fillable = [
        'kode',
        'nama',
        'harga_jual',
        'harga_beli',
        'stok',
        'min_stok',
        'deskripsi',
        'kategori_produk_id'
    ];
    public function kategoriproduk(){
        return $this->belongsTo(KategoriProduk::class);
    }

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class);
    }
}
