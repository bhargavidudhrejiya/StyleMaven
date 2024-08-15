<?php
//Orders.php
include "connection.php";
session_start();
    $username=$_SESSION['user'];
    $c_date=time();
    $date=date("Y-m-d",$c_date);
    

    $qcart = "select * from carts where uid=" . $username['uid'];
    $rscart = mysqli_query($con,$qcart);
    print $qcart;

    while($rowCart= mysqli_fetch_array($rscart)){

    $pid = $rowCart['pid'];

    $qProduct= "select * from products where pid=$pid";
    $rsProduct = mysqli_query($con,$qProduct);

    $rowProduct= mysqli_fetch_array($rsProduct);

    $price = $rowProduct["price"];
   


    $user_id=$username['uid'];
    $address=$_POST['shipping_address'];
    $q="insert into orders(odate,pid,uid,shipping_address,price) values('$date','$pid','$user_id','$address','$price')";
    $rs = mysqli_query($con,$q);

    print $q;
    }

    $qDelete = "delete from carts where uid=" . $username['uid'];
    $rsDelete = mysqli_query($con,$qDelete);

    header("Location:order.php");
?>