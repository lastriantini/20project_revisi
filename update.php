<?php
    require 'index.php';
    $id = $_GET['id'];
    $student = query("SELECT * FROM students WHERE id = $id")[0];


    if ( isset($_POST["submit"])) {

        if (  ubahData( $_POST ) > 0  ) {
            echo "
         <script>
            alert('data berasil di ubah')
            document.location.href ='index.php';
            </script>      
         
         ";
     } else {
        echo "
        <script>
            alert('data gagal di ubah')
            document.location.href ='index.php';
            </script>  
         ";    
     }
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Siswa</title>
</head>
<body>
        
       <form action = "" method ="post">
                <input type ="hidden" name ="id" id ="" value="<?= $student["id"]?>"><br>
                <label for = "" >nama</label>
                <input type ="text" name ="nama" id ="" value="<?= $student["nama"]?>"><br>
                <label for = "" >nis</label>
                <input type ="text" name ="nis" id =""value="<?= $student["nis"]?>"><br>
                <label for = "" >rombel</label>
                <input type ="text" name ="rombel" id =""value="<?= $student["rombel"]?>"><br>
                <label for = "" >rayon</label>
                <input type ="text" name ="rayon" id =""value="<?= $student["rayon"]?>"><br>
                <label for = "" >status</label>
                <input type ="text" name ="status" id =""value="<?= $student["status"]?>"><br>
                <button type="submit" name="submit">Kirim</button>
       </form>

</body>
</html>