<!DOCTYPE html>
<html>
<head>
    <title>Hasil Input</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Hasil Input</h2>
        <table class="table">
            <tbody>
                <tr>
                    <td>Nama:</td>
                    <td>{{ $nama }}</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>{{ $email }}</td>
                </tr>
                <tr>
                    <td>Lokasi:</td>
                    <td>{{ $lokasi }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin:</td>
                    <td>{{ $jenisKelamin }}</td>
                </tr>
                <tr>
                    <td>Skill:</td>
                    <td>{{ $skill }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
