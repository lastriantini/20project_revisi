

<?php
$server = mysqli_connect("localhost", "root", "", "latihan_xpplg");
session_start();





if(isset($_POST["submit"] )) {

$username = $_POST["user"];
$password = $_POST["password"];
$email= $_POST["email"];
$sql = "SELECT * FROM db_login 
        WHERE username = '$username' AND password = '$password' AND email = '$email' ";

$query = mysqli_query($server, $sql);
$hasil =  mysqli_num_rows($query);
if(mysqli_num_rows($query)){

if (isset($_SESSION['username'])) {
    header('location:home.php');
}else{
    $sql = "SELECT * FROM db_login 
        WHERE username = '$username' AND password = '$password' AND Email = '$email' ";
    $query = mysqli_query($server, $sql);

    if (mysqli_num_rows($query)> 0) {
        $array = mysqli_fetch_assoc($query);
        $_SESSION['username'] = $array['username'];//membuat atau register sesi


        // header('location:home.php');
        }
    }

    }else{
        $eror = true;
        }
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title>Login</title>
</head>
<body>  
    <!-- <style>
    .halaman1{
    text-align: center;
	padding: 30px 20px;	
	border:2px solid white;
	border-radius: 10px;
    width: 20%;
    height: 20%;
    margin-left: 550px;
    margin-top: 250px;
        } -->
    </style>
<div class = "halaman1">
<br> <center><h2>Login</h2></center></br>
        <?php if(isset($eror)) : ?>
            <i style="color: red; font-style: italic;">Username sudah terdaftar</i>
        <?php endif;?>
        <form action="p.php" method="post">   
            Username :<br><input type="text"  name="user"> </input></br>
            Password :<br><input type="password" name="password"></input></br>
            Email:<br><input type="text" name="email"></input></br>
           
            
            <input type = "submit" name = "submit" value="Masukkan">
        </form>
</body>
</html>