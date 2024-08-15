<?php
session_start();
include ("connection.php");
$name=$_POST['name'];
$email=$_POST['email'];
$contact_number=$_POST['contact_number'];
$address=$_POST['address'];
$password=$_POST['password'];

$q="INSERT INTO users(name,email,contact_number,address,password)  VALUES ('$name','$email','$contact_number','$address','$password')";
 
$rs=mysqli_query($con,$q);

if($rs){

    echo "success" ;
}
else{
    echo'fail';
}
?>