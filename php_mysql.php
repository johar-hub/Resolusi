<?php

// KONEKSI DATABASE
// Buat halaman untuk menampung koneksi database dan function
//cara menyambungkan ke halaman lain
require "functions.php";

// buat variable untuk menampung data function dengan perintah "SELECT * FROM nama_table"
$total_brg = query("SELECT * FROM tb_barang");//PARAMETER UNTUK USER MELAKUKAN PENGAMBILAN BAJU DI LEMARI


//UNTUK CEK APAKAH ERROR ATAU TIDAK
/* if (!$result) {
    echo mysqli_error($db);
} */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Koneksi Database MYSQL dengan php</title>
</head>
<body>
    <a href="CREAT.php"><button>Tambah Data !</button></a>
    
    <table border="1" cellpadding="5" >
        <thead>
            <th>No</th>
            <th>Id</th>
            <th>Aksi</th>
             <th>Gambar</th>
            <th>Nama</th>
            <th>Brand</th>
            <th>Harga</th>
           
        </thead>
        <tbody>
           <?php 
           $no=1;
           foreach ($total_brg as $brg):?>
            <tr>
                <td><?= $no;?></td>
                <td><?= $brg["id"];?></td>
                <td><a href="">Ubah</a>|<a href="DELETE.php?id=<?= $brg["id"];?>" onclick="return confirm('Anda Yakin Data dengan Id = <?= $brg['id']?> ingin dihapus ?');">Hapus</a></td>
                <td><img src="<?= $brg["gambar"];?>" alt="" width=100></td>
                <td><?= $brg["nama"];?></td>
                <td><?= $brg["brand"];?></td>
                <td><?= $brg["harga"];?></td>
                
            </tr>
            
            <?php $no++; endforeach;?>
        </tbody>
    </table>
    
</body>
</html>
