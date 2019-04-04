<?php
	$servername="localhost";
	$username="root";
	$password="";
	$database="ar32";
	$conn = new mysqli($servername,$username,$password,$database);
	if($conn->connect_error){
		die("connection failed: ".$conn->connect_eror);
	}
	$name=$_GET['txtname'];
	$addr=$_GET['txtaddress'];
	$mail=$_GET['txtmail'];
	$dob=$_GET['txtdob'];
	$sex=$_GET['gender'];
	$sql="INSERT INTO registration(name,addr,email,dob,gender)VALUES('$name','$addr','$mail','$dob','$sex')";
	if($conn->query($sql)===TRUE){
		echo "New record created succesfully";
	}
	else{
		echo "Error: ".$sql."<br>".$conn->error;
	}
	$conn->close();
?>
