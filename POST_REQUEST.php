<!--     
    > POST REQUEST merupakan sebuah variable superglobal yang dapat menerima data dari halaman lain.
    
    > $_POST cara kerjanya tidak seperti Get yang pengiriman datanya melalui url sehingga dapat dilihat olehorang lain, tapi dia mengirim data di belakang layar sehingga tidak dapat dilihat oleh orang lain
    > Pengiriman data ke POST harus melalui inputan bisa textbox, radio button, checkbox, text area dll, yang pengirimannya menggunakan button sumbit
    
    > syntax pengirim:

    <form action="lokasi_halaman.php" method="POST">
        <input type="text" name="nama_key_untuk_POST">
        <button type="submit" name="submit">Kirim</button>

    </form> 
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="POST_SUPERGLOBAL.php" method="POST">
        NAMA : <input type="text" name="nama">
        <button type="submit" name="submit">Kirim</button>
    </form>  
    <?php
     if (isset($_POST["submit"])):?>
        <h1>Selamat datang, <?= $_POST["nama"];?></h1>
     <?php endif;?>  
     <br>
    <form action="" method="POST">
        Nama untuk halaman ini : <input type="text" name="nama">
        <button type="submit" name="submit">Kirim</button>
    </form>   
        



</body>
</html>