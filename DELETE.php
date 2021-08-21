<?php
require "functions.php";

if (delete($_GET["id"]) > 0) {
    echo "<script>
                alert('Data berhasil dihapus');
                document.location.href ='php_mysql.php';
            </script>";
} else { 
    echo "<script>
                alert('Data tidak berhasil dihapus');
                document.location.href ='php_mysql.php';
            </script>";
}
?>