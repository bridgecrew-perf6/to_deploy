<?php 
	include ('config.php');
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST)){
			$rfid_code = mysqli_real_escape_string($conn, $_POST['rfid_code']);
			$temperature = mysqli_real_escape_string($conn, $_POST['temperature']);

			// get the user the rfid_code
			$sql = "INSERT INTO logs(rfid_code, temperature) VALUES('$rfid_code', '$temperature')";
			if($result = mysqli_query($conn, $sql)){
				echo "record added";
			}
		}
	}else{
		echo "not post";
	}
?>