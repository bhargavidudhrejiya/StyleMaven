<?php
include "connection.php";

$cat_name=$_POST['cat_name'];

$q="INSERT INTO category(cat_name) values ('$cat_name')";

$rs=mysqli_query($con,$q);

if($rs){
    echo  header("Location: view-category.php");;
}
else{
    echo $con->error;
}
?>