<?php
require 'index.php';
$students = query("SELECT * FROM barang");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>koneksi ke database</title>
</head>
<body>
<form action="" method="post">
      
    <table border=1>
    <thead>
            <tr>
                <td>barang1</td>
                <td>barang2</td>
                <td>aksi</td>
                
            
            </tr>
        <tbody>
           <?php foreach($students as $student){?>
            <tr>
                <td><?php echo $student["barang1"]?></td>
                <td><?php echo $student["barang2"]?></td>
                <td>
                    <a href="delet.php?id=<?=$student["barang1"]?>">hapus</a>
                    |
                    <!-- <a href="update.php?id=<?=$student["barang1"]?>">ubah</a> -->
                </td>
           
            </tr>
            <?php }?>
        </tbody>
    </table>

</body>
</html>