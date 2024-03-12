<?php

$mahasiswa = [[
    "nama" => "Hikmal Maulana",
    "nrp" => "233040091",
    "jurusan" => "Teknik Informatika",
    "email" => "hikmal767@gmail.com",
    "gambar" => "hikmal.jpg"   
], [
    "nama" => "Jamal",
    "nrp" => "233040092",
    "jurusan" => "Teknik Mesin",
    "email" => "jamal@gmail.com",
    "gambar" => "jamal.jpg"   
], [
    "nama" => "Asep",
    "nrp" => "233040093",
    "jurusan" => "Teknik Pangan",
    "email" => "asep@gmail.com",
    "gambar" => "asep.jpg"   
], [
    "nama" => "Saepudin",
    "nrp" => "233040094",
    "jurusan" => "Teknik Industri",
    "email" => "saepudin@gmail.com",
    "gambar" => "saepudin.jpg"   
], [
    "nama" => "suprianto",
    "nrp" => "233040095",
    "jurusan" => "Teknik Sipil",
    "email" => "suprianto@gmail.com",
    "gambar" => "suprianto.jpg"   
], [
    "nama" => "Herman",
    "nrp" => "233040096",
    "jurusan" => "Ilmu hukum",
    "email" => "herman@gmail.com",
    "gambar" => "herman.jpg"   
], [
    "nama" => "Mulyadi",
    "nrp" => "233040097",
    "jurusan" => "Kedokteran",
    "email" => "mulyadi@gmail.com",
    "gambar" => "mulyadi.jpg"   
], [
    "nama" => "Supardi",
    "nrp" => "233040098",
    "jurusan" => "Akutansi",
    "email" => "supardi@gmail.com",
    "gambar" => "supardi.jpg"   
], [
    "nama" => "Sutrisno",
    "nrp" => "233040099",
    "jurusan" => "Management",
    "email" => "sutrisno@gmail.com",
    "gambar" => "sutrisno.jpg"   
], [
    "nama" => "Suparman",
    "nrp" => "233040100",
    "jurusan" => "Psikologi",
    "email" => "suparman@gmail.com",
    "gambar" => "suparman.jpg"   
]]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        .container {
            width: 93%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin: auto;
            background-color: #ddd;
            border: 1px solid black;
        }
        li {
            list-style: none;
        }

        h1 {
            text-align: center;
        }

        img {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <div class="container">

        <?php foreach($mahasiswa as $mhs) : ?>
            <ul>
                <li>
                    <img src="img/<?= $mhs["gambar"] ?>" width="150px" height="200px">
                </li>
                <li>Nama : <?= $mhs["nama"]; ?></li>
                <li>NRP : <?= $mhs["nrp"]; ?></li>
                <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
                <li>Email : <?= $mhs["email"]; ?></li>
            </ul>
        <?php endforeach; ?>
    </div>

</body>
</html>