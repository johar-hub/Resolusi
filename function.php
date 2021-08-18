<?php
//DATE
//parameter date ada l (hari), d(tanggal), M(bulan), m(angka bulan), Y(tahun)
//https://www.php.net/manual/en/datetime.format.php
//syntax date(parameter)
echo "date ";
echo date("l d-M-Y");

//TIME
//UNIX timestamp / EPOCH time adalah detik yang sudah berlalu sejak 1 januari 1970
// syntax : time();

echo "<br>time ";
echo time();
echo "<br>";
//menghitung 100 hari kedepan dari sekarang
echo date("l", time()+60*60*24*100);//php tolong tampilkan date(hari, yang waktunya ditambah 60detik*60menit*24jam*100hari)

// MKTIME membuat detik sendiri
//mktime(0,0,0,0,0,0);
//urutannya (jam, menit, detik, bulan, tanggal, tahun);
echo "<br>mktime ";
echo date("l", mktime(0,0,0,30,1,2000));

//strtotime
// MKTIME membuat tanggal bulan dan tahun sendiri
echo "<br>strtotime ";
echo date("l", strtotime("17 aug 2021"));

//STRING
/* strln();//untuk menghitung panjang sebauh string
strcmp();//untuk membandingkan 2 buah string
explode();//untuk memecah sebuah string menjadi array
htmlspecialchars();//untuk menjaga kita dari hacker
 */
//UTILITY//bantuan
/* var_dump();//untuk mencetak isi dari variable
isset();//untuk mengecek apakah sebuah variable udah pernah dibikin atau belum
empty();//untuk mengecek variable apakah datanya kosong atau ada
die();//untuk memberhentikan program kita
sleep();//untuk memberhentikan sementara program kita
 */
// user-defined-function (fungsi buatan sendiri)
function salam($nama = "admin"){

    return "selamat datang $nama";
}

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
    <h1><?= salam("johar");?></h1>
</body>
</html>