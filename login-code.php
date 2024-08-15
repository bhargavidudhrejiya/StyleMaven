<?php
include "connection.php";
session_start();
$email=$_POST['email'];
$password=$_POST['password'];

$qadmin = "SELECT * from admins where email='$email' and password='$password'";
$quser = "SELECT * from users where email='$email' and password='$password'";


$rsAdmin = mysqli_query($con,$qadmin);
$rsUser = mysqli_query($con,$quser);

if( $rowAdmin = mysqli_fetch_array($rsAdmin)){
            $_SESSION["admin"] = $rowAdmin;
            header("Location:admin-home.php");
}else if( $rowUser = mysqli_fetch_array($rsUser)){
        $_SESSION["user"] = $rowUser;
        header("Location:index.php");
}else{
    echo "fail to login";
}
?>