@extends('admin.layout.appadmin')
@section('content')
<table class="table table-striped">
    <tbody>
        <tr>
            <td>ID</td>
            <td>{{$kproduk->id}}</td>
        </tr>
        <tr>
            <td>Nama Kategori Produk</td>
            <td><{{$kproduk->nama}}</td>
        </tr>
    </tbody>
</table>
@endsection