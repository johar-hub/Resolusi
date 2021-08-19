<?php
//GET SUPERGLOBAL / penangkap data

if ( !isset($_GET["nama"])||!isset($_GET["id"])||!isset($_GET["brand"])||!isset($_GET["harga"])||!isset($_GET["gambar"]) ) {
    header("Location: GET_REQUEST.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPERGLOBAL $_GET/Menangkap data request GET</title>
    <style>
        .gambar {
            width: 150px;
            height: 150px;
        }
        .clear{
            clear:both;
        }
    </style>
</head>
<body>
    <ul>
            <li>
                    Id : <?= $_GET["id"];?>
            </li>
              <li>
                    Nama : <?= $_GET["nama"];?>
            </li>
              <li>
                    Brand : <?= $_GET["brand"];?>
            </li>
              <li>
                    Harga : <?= $_GET["harga"];?>
            </li>
                    <img src="<?= $_GET["gambar"];?>" alt="" class="gambar">
    </ul>
    <a href="GET_REQUEST.php">Kembali ke halaman utama</a>
</body>
</html>