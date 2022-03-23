<?php
	$servername = getenv('MYSQL_DBHOST');
	$username = getenv('MYSQL_DBUSER');
	$password = getenv('MYSQL_DBPASS');
	$dbname = getenv('MYSQL_DBNAME');

	$conn = new mysqli($servername, $username, $password, $dbname);

	if($conn->connect_error){
		die("Connection Failed:".$conn->connect_error);
	}
?>