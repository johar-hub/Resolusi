 <?php
 $error = false;
        // ketika user tekan tombol sumbit 
            if (isset($_POST["submit"])) {
                // maka cek apakah username dan passwordnya benar
                // jika benar
                if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
                    header("Location: admin1.php");
                }
                // jika salah
                else {
                    // buat variable error dan isi nilainya true
                    $error = true;
                }
                    
            }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
</head>
<body>
    <h1>Halaman Login Admin</h1>
    <?php 
        if ($error === true):
    ?>
    <p color="red">Username / Password Salah!</p>
    <?php endif;?>
    <ul>
    <form action="" method="POST">
       
        <li>
            <label for="username">Username</label>
            <input type="text" id="username" name="username">
        </li>
        <li>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </li>
        <li>
            <button type="submit" name="submit">Login</button>
        </li>
    </form>
    </ul>
</body>
</html>