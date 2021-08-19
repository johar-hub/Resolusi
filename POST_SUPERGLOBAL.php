<!--     
    > POST SUPERGLOBAL merupakan sebuah variable superglobal yang dapat menerima data dari halaman lain.
    
    > $_POST cara kerjanya tidak seperti Get yang pengiriman datanya melalui url sehingga dapat dilihat olehorang lain, tapi dia mengirim data di belakang layar sehingga tidak dapat dilihat oleh orang lain
    > Pengiriman data ke POST harus melalui inputan bisa textbox, radio button, checkbox, text area dll, yang pengirimannya menggunakan button sumbit
    
    > syntax PENERIMA:

   <?= $_POST["nama_key_yang_diterima"];?>
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
    <?php
    if (!isset($_POST["nama"])) {
        header("Location: POST_REQUEST.php");
    }
    
    ?>
     <h1>Hallo selamat Datang, <?= $_POST["nama"];?></h1>  
</body>
</html>