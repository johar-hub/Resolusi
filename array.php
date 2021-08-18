<?php
// ARRAY (variable yang dapat menampung banyak nilai)
//catetan : nilai array memiliki index yang diawali dari angka 0
//cara menampilkan seluruh isi array hanya bisa pakai print_r();/var_dump();
//untuk menampilkan isi array secar spesifik gunakan echo $arr[index];
$mhs = ["johar", "saputra", "irsandi"];

print_r($mhs);
echo"<br>";
var_dump($mhs);
echo"<br>";
echo $mhs[0];


// MENAMBAH NILAI BARU PADA ARRAY
$mhs[] ="didit";
echo"<br>";
var_dump($mhs);
$mhs[] ="mamad";
echo"<br>";
var_dump($mhs);
echo"<br>";

//ARRAY MULTI
$mahasiswa =[
    ["johar", "17123", "sistem informasi", "johar@gmail.com"],
    ["didit", "17112323", "teknik informatika", "didit@gmail.com"]
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
            background :salmon;
            width: 100px;
            height: 100px;
            line-height:100px;
            text-align:center;
            float: left;
            margin:10px 15px 15px 0;
        }
        .clear{
            clear:both;
        }
    </style>
</head>
<body>
    <h3>dibawah menggunakan for</h3>
    <?php
    for ($i=0; $i < count($mhs); $i++) :
    ?>
    <div class=kotak><?= $mhs[$i]; ?></div>
    <?php endfor;?>
    <div class="clear"></div>
    <h3>dibawah menggunakan forech</h3>
    
    <?php

    foreach ($mhs as $a ) :    
    ?>
    <div class="kotak"><?= $a;?></div>
    <?php endforeach;?>
   <div class="clear"></div>
   <h1>Data Mahasiswa</h1>
    
        <?php foreach ($mahasiswa as $mhsw) :
        
        ?>
        <ul>
            <li>Nama : <?=$mhsw[0];?></li>
            <li>NPM : <?=$mhsw[1];?></li>
            <li>Jurusan : <?=$mhsw[2];?></li>
            <li>Email : <?=$mhsw[3];?></li>
        </ul>
        <?php endforeach;?>
    
</body>
</html>
