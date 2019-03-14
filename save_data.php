<?php
	$conn = new mysqli("localhost","root",'',"ar32");
	if($conn->connect_error){
		die("connection failed: ".$conn->connect_eror);
	}
	$sql="INSERT INTO registration(Name,Address,Gender)VALUES('$_GET[txtname]','$_GET[txtaddress]','$_GET[gender]')";
	if($conn->query($sql)===TRUE){
		echo "New record created succesfully";
	}
	else{
		echo "Error: ".$sql."<br>".$conn->error;
	}
	$conn->close();
?>