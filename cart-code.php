<?php
session_start();
if(isset($_SESSION['user'])){
include "connection.php";
$username=$_SESSION['user'];
$pid = $_GET['pid'];
$uid = $username['uid']; // session var
$qty = 1;

$q=" INSERT INTO carts(cid,pid,uid,qty) values('$cid','$pid','$uid','$qty')";

$rs = mysqli_query($con,$q);

if($rs){
    
    header("Location:mycart.php");
}
else{
  echo "fail";
}
}
else{
  header("Location:login.php") ;
}

?>