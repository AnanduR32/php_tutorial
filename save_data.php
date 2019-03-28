<?php
if(isset($_POST['submit'])){
	$conn = new mysqli("localhost","root",'',"ar32");
	if($conn->connect_error){
		die("connection failed: ".$conn->connect_eror);
	}
	$sql_check="SELECT * from register where name like '_POST[txtname]' and Password like '_POST[Password]'";
	$result=$conn->query($sql_check);
	if($result->num_rows>0){
		echo "This username and password already Exists";
	}
	else if($result->num_rows==0){
		$sql="INSERT INTO registration(Name,Address,Gender,Password,Role)VALUES('$_GET[txtname]','$_GET[txtaddress]','$_GET[gender]','$_GET[Password]','$_GET[Role]')";
		if($conn->query($sql)===TRUE){
			echo "New record created succesfully";
		}
		else{
			echo "Error: ".$sql."<br>".$conn->error;
		}
		$conn->close();
?>