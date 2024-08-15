<?php
//contact_process.php
	include("connection.php");
	$message = $_POST['message'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];

	$q="insert into contact(message,name,email,subject) values('$message','$name','$email','$subject')";

	$rs = mysqli_query($con,$q);

	if($rs){
    	echo "success";
	}
	else{
 	   echo $con->error;
	}
?>