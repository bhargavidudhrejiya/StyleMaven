<?php
include "connection.php";
session_start();
    $message=$_POST['review'];
    $username=$_SESSION['user'];
    $c_date=time();
    $date=date("Y-m-d",$c_date);
    $user_id=$username['uid'];
    $q="insert into reviews(uid,rdate,message) values('$user_id','$date','$message')";
    $rs = mysqli_query($con,$q);

    if($rs){
        header("Location:review.php");
    }
    else{
        echo $con->error;
    }
?>