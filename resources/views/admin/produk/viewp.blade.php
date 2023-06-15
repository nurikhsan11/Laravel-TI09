@extends('admin.layout.appadmin')
@section('content')
<form method="POST" action="{{url('/produk/view')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    @foreach ($produk as $p)
    <table class="table table-striped">
        <tbody>
            <tr>
                <td>ID</td>
                <td>{{$p->id}}</td>
            </tr>
            <tr>
                <td>Kode</td>
                <td>{{$p->kode}}</td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td>{{$p->nama}}</td>
            </tr>
            <tr>
                <td>Harga jual</td>
                <td>{{$p->harga_jual}}</td>
            </tr>
            <tr>
                <td>Harga beli</td>
                <td>{{$p->harga_beli}}</td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>{{$p->stok}}</td>
            </tr>
            <tr>
                <td>Min stok</td>
                <td>{{$p->min_stok}}</td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>{{$p->deskripsi}}</td>
            </tr>
            <tr>
                <td>Kategori produk id</td>
                <td>{{$p->kategori_produk_id}}</td>
            </tr>
        </tbody>
    </table>
</form>
@endforeach
@endsection