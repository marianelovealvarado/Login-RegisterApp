<?php
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "register";

	$Firstname = $_POST['Firstname'];
	$Lastname = $_POST['Lastname'];
    $MI = $_POST['MI'];
	$Dateofbirth = $_POST['Dateofbirth'];
    $Gender = $_POST['Gender'];
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO register VALUES('$Firstname','$Lastname','$MI','$Dateofbirth','$Gender')";
	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>