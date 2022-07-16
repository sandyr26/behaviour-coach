<?php
    $servername = "localhost";
    $username = "asterlot_admin";
    $password = "monopoly1234";
    $db="asterlot_monopoly";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT DISTINCT `game_date_time` FROM `user_data`;";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "game_date_time: " . $row["game_date_time"];
	}
	} else {
		echo "0 results";
	}
	$conn->close();
    
?>