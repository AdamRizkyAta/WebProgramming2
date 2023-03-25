<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <title>lingkaran || webprog2</title>
</head>

<body>

    <div class="container mt-5">
        <h2>
            Nama : Adam Rizky Ata Rialdi <br>
            NIM/Kelas : 17200474 / 17.6J.01
        </h2>
        <div class="card mt-3">
            <div class="card-body">
                <h3>Menghitung Luas Lingkaran (L = phi * Jari * Jari)</h3>
                <hr>
                <p>Nilai phi = 3.14</p>
                <p>Nilai Jari = 8</p>
                <p>Luasnya = ?</p>
                <hr <?php
                    $phi = 3.14;
                    $jari = 8;
                    echo '
                      <p>Nilai Phi = ' . $phi . '</p>
                      <p>Nilai Jari = ' . $jari . '</p>
                      <p>Luasnya = ' . $phi * $jari *$jari . '</p>';
                    ?> </div>
            </div>
        </div>


        <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>