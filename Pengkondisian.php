<?php
// Pengulangna/Percabangan (IF..ELSE, IF .. ELSE IF...ELSE, TERNARY, SWITCH)

// IF..ELSE IF...ELSE
$x = 20;
if ($x < 10) {
    echo "true";
}else if($x === 20) {
    echo "sama";
} else {
    echo "false";
}

// SWITCH
//aturan tidak bisa menggunakan kondisi harus langsung nilainya, aksi break; opsional
// contoh case 3<5
$angka = 3;
switch ($angka) {
    case 1:
        echo "<br>SWITCH angka 1";
        break;
    case 2:
        echo "<br>SWITCH angka 2";
        break;
    case 3:
        echo "<br>SWITCH angka 3";
        break;
    default:
        echo "<br>SWITCH angka salah";
        break;
}
// contoh break;
$makanan = "daging";
switch ($makanan) {
    case 'susu':
    case 'daging':
    case 'nasi':
        echo "<br>Makanan/Minuman SEHAT!";
        break;
    case 'alkohol':
    case 'burger':
    case 'martabak':
    echo "<br>Makanan/Minuman TIDAK SEHAT!";
        break;
    default:
        echo "<br>Makanan/Minuman SALAH!";
        break;
}

//TERNARY
//sebuah operator kondisi yang ringkas hanya ada 2 pilihan true dan false jika true maka akan menampilkan nilai ke 1, jika false akan menampilkan nilai ke 2
// (Conditional statement) ? Statement_1 : Statement_2;
//contoh :
$ternary = 1;
echo ($ternary === 1) ? "<br>true atau benar" : "<br>false atau salah";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th {
            background: gray;
        }
        .warna{
            background: blue;
        }
    </style>
</head>
<body>
   
    <table border = "1"; cellpadding ="10";>
        <!-- Pembuatan table tag html terpisah dengan PHP -->
        <thead>
            <?php
            for ($i=1; $i <=5; $i++) : 
            ?>
            <th><?= $i;?></th>
            <?php endfor;?>
        </thead>
        <tbody>
            <?php 
            for ($i=1; $i <=5 ; $i++) : 
            ?>
            <?php if ($i % 2 == 0) :
            ?>    
            <tr class="warna";>
            <?php
            else :?>
            <tr>
            <?php endif;?>
                <?php
                for ($j=1; $j <=5 ; $j++) : 
                
                ?>
                <td><?= "$i, $j";?></td>
                <?php endfor;?>
            </tr>
            <?php endfor;?>
        </tbody>
    </table>

</body>
</html>