<?php
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, POST');
	header("Access-Control-Allow-Headers: X-Requested-With");

    $servername = "localhost";
    $username = "asterlot_admin";
    $password = "monopoly1234";
    $db="asterlot_monopoly";
    $conn = mysqli_connect($servername, $username, $password,$db);

    $player_number=$_POST['player_number'];
	$player_name=$_POST['player_name'];
	$time_started=$_POST['time_started'];
	$current_location=$_POST['current_location'];
	$dice_number=$_POST['dice_number'];
	$moved_location=$_POST['moved_location'];
	$quiz_title=$_POST['quiz_title'];
	$quiz_category=$_POST['quiz_category'];
	$quiz_completed_range=$_POST['quiz_completed_range'];
	$time_ended=$_POST['time_ended'];
    $game_date_time=$_POST['game_date_time'];

	$sql = "INSERT INTO `user_data` (`player_number`, `player_name`, `time_started`, `current_location`, `dice_number`, `moved_location`, `quiz_title`, `quiz_category`, `quiz_completed_range`, `time_ended`, `game_date_time`) VALUES ('$player_number', '$player_name', '$time_started', '$current_location', '$dice_number', '$moved_location', '$quiz_title', '$quiz_category', '$quiz_completed_range', '$time_ended', '$game_date_time');";

	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode Could not connect"=>201));
	}
	mysqli_close($conn);
?>