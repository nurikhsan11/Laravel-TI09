<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
 <div class="card mt-5">
<div class="card-body">
<h3 class="text-center">Form Biodata</h3><br/>
{{-- menampilkan error validasi --}}
@if (count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif <br/>
<form action="{{url('hasil')}}" method="post">
{{ csrf_field() }}
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">NAMA</label> 
    <div class="col-8">
      <input id="nama" name="nama" value="{{old('nama')}}" placeholder="Isi nama anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="ttl" class="col-4 col-form-label">TTL</label> 
    <div class="col-8">
      <input id="ttl" name="ttl" value="{{old('ttl')}}" placeholder="tempat tanggal lahir anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">jenis kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="radio_0" type="radio" class="custom-control-input" value="laki-laki"> 
        <label for="radio_0" class="custom-control-label">laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="radio_1" type="radio" class="custom-control-input" value="perempuan"> 
        <label for="radio_1" class="custom-control-label">perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="hobi" class="col-4 col-form-label">Hobi</label> 
    <div class="col-8">
      <input id="hobi" name="hobi" value="{{old('hobi')}}" placeholder="hobi anda" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
