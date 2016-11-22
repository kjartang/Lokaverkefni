<?php

	$sql = "SELECT id, name, open FROM restaurants";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	     // output data of each row
	     while($row = $result->fetch_assoc()) {
	         echo "<div class='veitingastadir'>". $row["name"]. " " . $row["open"]. "</div>";
	     }
	} else {
	     echo "0 results";
	}
?>