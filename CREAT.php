<?php

// KONEKSI DATABASE
require "functions.php";

//JIKA USER PENCET TOMBOL SUMBIT 

if (isset($_POST["submit"])) {
    // CEK DAN LAKUKAN PEMANGGILAN FUNCTION APAKAH DATA BERHASIL DITAMBAHKAN ATAU TIDAK
    if (create($_POST) > 0) {
        // JIKA BERHASIL TAMPILKAN PESAN DIBAWAH
        echo "<script>
                alert('Data berhasil ditambah');
                document.location.href ='php_mysql.php';
            </script>";
    } else {
    // JIKA GAGAL KIRIM PESAN DIBAWAH
    echo "<script>
                alert('Data tidak berhasil ditambah');
                document.location.href ='CREAT.php';
            </script>";
    

    }
} 



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA</title>
</head>
<body>
    <a href="php_mysql.php">Kembali</a>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" id="nama" name="nama" required>
                <!-- kasih required agar user tidak mengisi data kosong -->
            </li>
            <li>
                <label for="merek">Merek :</label>
                <input type="text" id="merek" name="brand" required>
            </li>
            <li>
                <label for="harga">Harga :</label>
                <input type="text" id="harga" name="harga" required>
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" id="gambar" name="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Kirim!</button>
            </li>
        </ul>
    </form>
</body>
</html>
