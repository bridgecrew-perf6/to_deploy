<?php
	include "config.php";

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$device_id = $_POST["device_id"];
		$message = $_POST["message"];

		$sql = "INSERT INTO `messages`(`device_id`, `message`) VALUES('$device_id', '$message')";

		if(mysqli_query($conn, $sql)){
			echo "addded successfully";
		}else{
			echo "failed";
		}
	}
?>