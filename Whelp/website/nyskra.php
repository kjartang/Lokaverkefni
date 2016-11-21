<?php
 include "connect.php";
	$sql = "INSERT INTO user (name, username, email, password)
	VALUES ('$_POST['name']', '$_POST['username']', '$_POST['email']', '$_POST['password']')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
//http://stackoverflow.com/questions/15407802/using-a-submit-button-to-insert-an-entry-into-a-mysql-database-via-php
?>