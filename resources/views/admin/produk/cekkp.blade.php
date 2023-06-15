@extends('admin.layout.appadmin')
@section('content')
<form method="POST" action="{{url('/kategori_produk/show')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    @foreach ($kproduk as $kp)
    <table class="table table-striped">
        <tbody>
            <tr>
                <td>ID</td>
                <td>{{$kp->id}}</td>
            </tr>
            <tr>
                <td>Nama Kategori Produk</td>
                <td>{{$kp->nama}}</td>
            </tr>
        </tbody>
    </table>
    @endforeach
</form>
@endsection
