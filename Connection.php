<?php
	$servername = "localhost";	
	$username = "root";
	$password = "dhruvy09";
	$DBName= "dhruv";
$conn = new mysqli($servername, $username, $password, $DBName);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>