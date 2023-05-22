<!DOCTYPE html>
<html>
<head>
    <title>Form Pemeriksaan Kesehatan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Form Pemeriksaan Kesehatan</h2>
        <form method="POST" action="{{ route('submit') }}">
            @csrf

            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda">
            </div>

            <div class="form-group">
                <label for="tanggal_pemeriksaan">Tanggal Pemeriksaan:</label>
                <input type="date" class="form-control" id="tanggal_pemeriksaan" name="tanggal_pemeriksaan">
            </div>

            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir/Usia:</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
            </div>

            <div class="form-group">
                <label>Jenis Kelamin:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="radio_pria" value="Pria">
                    <label class="form-check-label" for="radio_pria">
                        Pria
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="radio_wanita" value="Wanita">
                    <label class="form-check-label" for="radio_wanita">
                        Wanita
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label for="tekanan_darah">Tekanan Darah:</label>
                <input type="text" class="form-control" id="tekanan_darah" name="tekanan_darah" placeholder="Contoh: 120/80 mmHg">
            </div>

            <div class="form-group">
                <label for="asam_urat">Asam Urat:</label>
                <input type="text" class="form-control" id="asam_urat" name="asam_urat" placeholder="Masukkan nilai asam urat">
            </div>

            <div class="form-group">
                <label for="kolesterol_total">Kolesterol Total:</label>
                <input type="text" class="form-control" id="kolesterol_total" name="kolesterol_total" placeholder="Masukkan nilai kolesterol total">
            </div>

            <div class="form-group">
                <label for="gula_darah">Gula Darah:</label>
                <input type="text" class="form-control" id="gula_darah" name="gula_darah" placeholder="Masukkan nilai gula darah">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
