@extends('admin.layout.appadmin')
@section('content')
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td>ID</td>
                    <td>{{$produk->id}}</td>
                </tr>
                <tr>
                    <td>Kode</td>
                    <td>{{$produk->kode}}</td>
                </tr>
                <tr>
                    <td>Nama Produk</td>
                    <td>{{$produk->nama}}</td>
                </tr>
                <tr>
                    <td>Harga jual</td>
                    <td>{{$produk->harga_jual}}</td>
                </tr>
                <tr>
                    <td>Harga beli</td>
                    <td>{{$produk->harga_beli}}</td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td>{{$produk->stok}}</td>
                </tr>
                <tr>
                    <td>Min stok</td>
                    <td>{{$produk->min_stok}}</td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td>{{$produk->deskripsi}}</td>
                </tr>
                <tr>
                    <td>Kategori produk id</td>
                    <td>{{$produk->kategori_produk_id}}</td>
                </tr>
            </tbody>
        </table>
@endsection