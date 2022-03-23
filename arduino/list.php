<?php 
	include ('config.php');
	$sql = "SELECT * FROM logs";
	$results = mysqli_query($conn, $sql);

	if(mysqli_num_rows($results) > 0){
		while($row = mysqli_fetch_assoc($results)){
			echo "rfid: ".$row['rfid_code']." temperature: ".$row['temperature']."<br>";
		}
	}
?>