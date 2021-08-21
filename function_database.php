<?php

//Koneksi database MYSQL dengan mysqli
// Sytnax : $db = mysqli_connect("link", "username", "password", "nama database");

$db = mysqli_connect("localhost", "root", "", "belajar");//CARI KAMARNYA





// buat function untuk mengambil table/LEMARI, dan menaruh datanya/BAJU secara rapih di wadah
function query($query) {
    // buat perintah ambil variable global yang ingin di pakai di function
    global $db;

    // syntax : $result = mysqli_query($variable koneksi database, "perintahnya");
    $result = mysqli_query($db, $query);//AMBIL LEMARI Dari KAMAR 

    // Buat Variable array kososng untuk menampung data dari table dengan rapih
    $rows= [];//WADAH untuk BAJU

    //Ambil data dari table
    //mysqli_fetch_row()//mengembalikan array numerik
    //mysqli_fetch_assoc()//mengembalikan array associative
    //mysqli_fetch_array()//mengembalikan array numerik dan associative
    //mysqli_fetch_object($result->$variable)//mengembalikan nilai array secara object
    // while ($brg = mysqli_fetch_assoc($result)) {
    //     var_dump($brg);
    // }

    // Buat perulangan untuk mengambil data table lalu simpan ke variable array
    while ($row = mysqli_fetch_assoc($result)) {//AMBIL BAJU DARI (LEMARI YANG ADA DI KAMAR)
        $rows[] = $row;//SIMPAN BAJUNYA DI WADAH
    }
    // kembalikan nilai yang sudah di simpan
    return $rows;//KEMBALIKAN KE USER
}


/* 1. CARI RUMAHNYA
            requery "rumah.php";

2. CARI KAMAR DI RUMAH TERSEBUT
            $RUMAH = mysqli_connect("sebelah mana KAMARNYA", "ORANG YANG BISA MASUK" "BUK kunci kamarnya" "Kamar siapa");

3. SURUH TEMEN LU BUAT AMBILIN SEMUA PAKAIAN YANG ADA DI LEMARI ($PERINTAH)
            $TOTAL_PAKAIAN = PESAN("SELECT * FROM LEMARI_KAMAR_TEMEN")

4. RESPON TEMEN DARI PESAN TERSEBUT
            function PESAN ($PERINTAH) {
                global $RUMAH; //PILIH RUMAH TEMEN

                MASUK KERUMAHNYA BUKA LEMARI PAKAIAN YANG ADA DI KAMARNYA
                $LEMARI = mysqli_query($RUMAH, $PERINTAH);

                SIAPIN TEMPAT PAKAIAN UNTUK MENYIMPAN PAKAIAN AGAR RAPIH
                $WADAH = [];

                SIMPAN SELURUH PAKAIAN YANG ADA DI LEMARINYA KE WADAH SAMPAI HABIS
                while($PAKAIAN = mysqli_fetch_assoc($LEMARI)){
                    $WADAH = $PAKAIAN;
                }
                KASIH WADAHNYA KE GW
                return $WADAH;
            } 
5. GW LIHAT SATU SATU TOTAL PAKAIANNYA DARI WADAHNYA DAN GW NOMERIN PAKAIANNYA
    $NOMER = 1;
    
    foreach($TOTAL_PAKAIAN => $LIHAT) :
    
        BERI NOMER UNTUK PAKET PAKAIAN
        <td> <?= $NOMER;?> </td>
    
        MACAM MACAM PAKAIANNYA DALAM SATU NOMER
        <td> <?= $LIHAT["BAJU"];?> </td>
        <td> <?= $LIHAT["CELANA"];?> </td>
        <td> <?= $LIHAT["JAKET"];?> </td>
    endforeach;

    NOMER AKAN BERTAMBAH SESUAI PAKET YANG DILIHAT
    $NOMER++;

    
*/
?>