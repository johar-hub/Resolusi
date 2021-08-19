<?php

//GET adalah sebuah variable superglobal yang dapat mengirim dan menerima data dari halaman lain
//aturannya variable get harus memiliki request(pengiriman/pembuatan) data, dan Penangkap Data(superglobal)
//Get request adalahpengiriman data melalui url
//contoh Get request: <a href="get_superglobal.php?key=nilai"></a>
//data diatas yaitu key=nilai akan dikirim ke $_GET yang ada di halaman get_superglobal.php


//ARRAY ASSOCIATIVE
$barang =[
    [
        "id" => 1,
        "nama" => "Xiaomi 3s",
        "brand" => "Xiaomi",
        "harga" => 2500,
        "gambar" => "gambar2-min.jpeg"
    ],
    [
        "id" => 2,
        "nama" => "Samsung Galaxy S7",
        "brand" => "Samsung",
        "harga" => 5500,
        "gambar" => "gambar3-min.jpg"
    ],
    [
        "id" => 3,
        "nama" => "Iphone X",
        "brand" => "Iphone",
        "harga" => 10000,
        "gambar" => "gambar5-min.jpg"
    ],
    [
        "id" => 4,
        "nama" => "Vivo F3",
        "brand" => "Vivo",
        "harga" => 1500,
        "gambar" => "gambar4-min.jpg"
    ],
    [
        "id" => 5,
        "nama" => "Asus ROG 3",
        "brand" => "ASUS",
        "harga" => 15000,
        "gambar" => "gambar-min.jpg"
    ]
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .clear{
            clear:both;
        }
    </style>
</head>
<body>
    <ul>
        <?php foreach ($barang as $hp):?>
            <li>
                <a href="GET_SUPERGLOBAL.php?id=<?= $hp["id"];?>&nama=<?= $hp["nama"];?>&brand=<?= $hp["brand"];?>&harga=<?= $hp["harga"];?>&gambar=<?= $hp["gambar"];?>">
                    Nama : <?= $hp["nama"];?>
                </a>
            </li>
        <?php endforeach;?>
    </ul>
</body>
</html>