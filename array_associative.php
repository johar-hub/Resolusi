<?php
// ARRAY
$total_angka =[
    [1,2,3,],
    [5,6,7],    
    [8,9,10]
];

//ARRAY ASSOCIATIVE
$barang =[
    [
        "id" => 1,
        "nama" => "Xiaomi 3s",
        "Brand" => "Xiaomi",
        "harga" => 2500,
        "gambar" => "gambar-min.jpg"
    ],
    [
        "id" => 2,
        "nama" => "Samsung Galaxy S7",
        "Brand" => "Samsung",
        "harga" => 5500,
        "gambar" => "gambar2-min.jpg"
    ],
    [
        "id" => 3,
        "nama" => "Iphone X",
        "Brand" => "Iphone",
        "harga" => 10000,
        "gambar" => "gambar3-min.jpg"
    ],
    [
        "id" => 4,
        "nama" => "Vivo F3",
        "Brand" => "Vivo",
        "harga" => 1500,
        "gambar" => "gambar4-min.jpg"
    ],
    [
        "id" => 5,
        "nama" => "Asus ROG 3",
        "Brand" => "ASUS",
        "harga" => 15000,
        "gambar" => "gambar5-min.jpg"
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
        .kotak {
            width: 150px;
            height: 70px;
            background:salmon;
            margin:20px;
            text-align:center;
            line-height:70px;
            float:left;

        }
        .clear{
            clear:both;
        }
    </style>
</head>
<body>
    <!-- <?php foreach ($total_angka as $angka) :?>
        <?php foreach ($angka as $a) :?>    
        <div class="kotak"><?= $a;?></div>
        <?php endforeach;?>
        <div class="clear"></div>
    <?php endforeach;?> -->
    <ul>
        <?php foreach ($barang as $hp):?>
            <img src="<?= $hp["gambar"];?>" alt="">
            <li>ID :<?= $hp["id"];?></li>
            <li>Nama : <?= $hp["nama"];?></li>
            <li>Brand : <?= $hp["Brand"];?></li>
            <li>Harga : <?= $hp["harga"];?></li>
        <?php endforeach;?>
    </ul>
</body>
</html>