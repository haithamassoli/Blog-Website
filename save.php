<?php
	include './include/conn.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['password'];
	$sql = "INSERT INTO `users`( `name`, `email`, `password`) 
	VALUES ('$name','$email','$password')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>