<?php
include "connect.php";
	
	if(!isset($_POST['search'])) {
		header("Location:FrontPage.php");
	}

	$search_sql = "SELECT * FROM restaurant WHERE name LIKE '%". $_POST['search'] . "%' OR location LIKE '%" . $_POST['search'] . "%' ' ";
	$search_query = mysqli_query(($conn, $search_sql));
	if(mysqli_num_rows($conn, $search_query) != 0) {

		$search_rs = mysqli_fetch_assoc($conn, $search_query);		
	}


	if(mysqli_num_rows($conn, $search_query) != 0) {
		do {
			echo "<br> Name: ". $row["name"]. "</br>";
		} while ($search_rs = mysqli_num_rows($conn, $search_query));

	}else {
		echo "No results found";
	}

?>