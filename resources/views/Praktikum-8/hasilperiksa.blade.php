<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pemeriksaan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Hasil Pemeriksaan</h2>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>Nama:</td>
                    <td>{{ $nama }}</td>
                </tr>
                <tr>
                    <td>Tanggal Pemeriksaan:</td>
                    <td>{{ $tanggal_pemeriksaan }}</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir/Usia:</td>
                    <td>{{ $tanggal_lahir }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin:</td>
                    <td>{{ $jenis_kelamin }}</td>
                </tr>
                <tr>
                    <td>Tekanan Darah:</td>
                    <td>{{ $tekanan_darah }}</td>
                </tr>
                <tr>
                    <td>Asam Urat:</td>
                    <td>{{ $asam_urat }}</td>
                </tr>
                <tr>
                    <td>Kolesterol Total:</td>
                    <td>{{ $kolesterol_total }}</td>
                </tr>
                <tr>
                    <td>Gula Darah:</td>
                    <td>{{ $gula_darah }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
