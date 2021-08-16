<?php
    // Standart output : echo, print, print_r(khusus mencetak isi array) "debuging", var_dump (melihat isi variable) "debuging"

    // penulisan string bisa " atau '
    // contoh :
    echo "echo";
    echo true;
    echo false;
    print "print";
    print_r("print_r");
    var_dump("var_dump");

    // Penulisan syntax Php
   /*  
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    1. Php didalam HTML


    <h1><?php echo "judul"; ?></h1>
     <p><?php echo "johar"; ?></p>
    
     2. HTML didalam PHP
     <?php echo "<h1>Judul</h1>";?> 
        
    </body>
    </html>
    
    */

    // VARIABLE  & TIPE DATA
    // aturan VARIABLE tidak boleh diawali dengan angka ($1nama) harus $nama1/$nama_1
    // 1. variable
    $nama = "johar";

    //Operator
    //aritmatika + - * / %

    $x = 1;
    $y = 2;

    $xy = $x + $y;

    // penggabungan string 
    //.
    $nama_depan = "johar";
    $nama_belakang = "saputra";
    
    //Assigment/penugasan
    //=, +=, -=, *=, /=, %=, .=
    $a = 1;
    $a += 5;
    echo "Assigment $a"; 

    //Perbandingan
    // >, <, >=, <=
    var_dump(1 >5);

    
    // Identitas
    // ==, ===, !=, !==
    var_dump(1 == 1);
    var_dump(1 === "1");

    //Logika
    // &&, ||, !
    var_dump(5 <10 && 5 % 2 == 0);
    // false
    var_dump(5 <10 || 5 % 2 == 0);
    // true
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "nama saya $nama";?></h1>
    <p><?php echo "arimatika $xy";?></p>
    <p><?php echo $nama_depan . " ". $nama_belakang?></p>
</body>
</html>