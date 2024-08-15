<?php
include "connection.php";

$pname=$_POST['pname'];
$price=$_POST['price'];
$cat_name=$_POST['cat_name'];
$img1= "img/" . $_FILES['img1']['name'];
move_uploaded_file( $_FILES['img1']['tmp_name'],$img1);
$size=$_POST['size'];
$color=$_POST['color'];

$q="INSERT INTO products(pname,price,cat_id,img1,size,colour) values ('$pname','$price','$cat_name','$img1','$size','$color')";

$rs=mysqli_query($con,$q);

if($rs){
    echo header("Location:view-product.php");
}
else{
    echo $con->error;
}
?>