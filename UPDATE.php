<?php

//1
// KONEKSI DATABASE
require "functions.php";

//2
// TANGKAP LINK ID
$id = $_GET["id"];
//3
//AMBIL SELURUH DATA DI TABLE SESUAI ID
$update = query("SELECT * FROM tb_barang WHERE id=$id;")[0];

// 4
//JIKA USER PENCET TOMBOL SUMBIT 
if (isset($_POST["submit"])) {
    // CEK DAN LAKUKAN PEMANGGILAN FUNCTION APAKAH DATA BERHASIL DIUBAH ATAU TIDAK
    if (update($_POST) > 0) {
        // JIKA BERHASIL TAMPILKAN PESAN DIBAWAH
        echo "<script>
                alert('Data berhasil diubah');
                document.location.href ='php_mysql.php';
            </script>";
    } else {
    // JIKA GAGAL KIRIM PESAN DIBAWAH
    $id = $_GET['id'];
    echo mysqli_error($db);
    }
} 



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UBAH DATA</title>
</head>
<body>
    <a href="php_mysql.php">Kembali</a>
    <form action="" method="POST">
        <ul>
            <input type="hidden" value= <?= $update["id"];?> name="id">
            <li>
                <label for="nama">Nama :</label>
                <input type="text" id="nama" name="nama" required value=<?= $update["nama"];?>>
                <!-- kasih required agar user tidak mengisi data kosong -->
            </li>
            <li>
                <label for="merek">Merek :</label>
                <input type="text" id="merek" name="brand" required value=<?= $update["brand"];?>>
            </li>
            <li>
                <label for="harga">Harga :</label>
                <input type="text" id="harga" name="harga" required value=<?= $update["harga"];?>>
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" id="gambar" name="gambar" required value=<?= $update["gambar"];?>>
            </li>
            <li>
                <button type="submit" name="submit">Kirim!</button>
            </li>
        </ul>
    </form>
</body>
</html>
