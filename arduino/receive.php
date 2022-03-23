<?php 
	include ('config.php');
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST)){
			$rfid_code = $_POST['rfid_code'];
			$temperature = $_POST['temperature'];

			// get the user the rfid_code
			$sql = "SELECT Firstname, Lastname, Address, Contact FROM neeco_user_data_table WHERE UC='$rfid_code'";
			$result = mysqli_query($conn, $sql);

			
			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_assoc($result)){
					$first_name = $row['Firstname'];
					$last_name = $row['Lastname'];
					$address = $row['Address'];
					$contact = $row['Contact'];

					$sql = "INSERT INTO complete_user_logs(Firstname, Lastname, Address, Contact, temperature) VALUES('$first_name', '$last_name', '$address', '$contact', '$temperature')";

					if(mysqli_query($conn, $sql)){
						echo "New Record added";
					}
				}
			}
		}
	}else{
		echo "not post";
	}
?>