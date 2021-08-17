<?php
// PENGULANGAN (for, while, do...while, foreach: pengulangan khusus array)  


// FOR
/* for ($i=0; $i <= 5; $i++) { 
    echo $i;
} */

// WHILE
// $a=1;
// while ($a <= 10) {
//     echo "$a <br>";
//      $a++;
// }

// DO...WHILE
// Perbedaan nya while dengan syntax di bawah adalah lakukan terlebih dahulu baru cek kondisi
/* $a=1;
do {
    echo "$a <br>";
    $a++;
} while ($a <= 3); */
// ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <table border = "1"; cellpadding ="10";>
    <!-- Pembuatan table menjadikan tag HTML sebagai string php -->
    <!--<thead>
            <?php 
            for ($i=1; $i <= 5; $i++) { 
                echo "<th>$i</th>";
            }
            ?>
        </thead>
        <tbody>
            <?php
                for ($i=1; $i <=3 ; $i++) { 
                    echo "<tr>";
                    for ($j=1; $j<=5; $j++) { 
                        echo "<td>$i, $j</td>";
                }
                    echo"</tr>";
                }
            ?>
        </tbody>-->
        
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
            for ($i=1; $i <=3 ; $i++) : 
            ?>
            <tr>
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