<?php 
	$sql = "SELECT * FROM restaurants";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["location"]. " " . $row["open"]. "<br>";
    }
} else {
    echo "0 results";
}
 ?>