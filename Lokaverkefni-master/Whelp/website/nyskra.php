<?php
 include "connect.php";
	$sql = "INSERT INTO user (name, username, email, password)
	VALUES ('".$_POST["name"]."','".$_POST["username"]."','".$_POST["email"]."','".$_POST["password"]."')";

	if ($conn->query($sql) === TRUE) {
	    echo "New user created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>