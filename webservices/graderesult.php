<?php
  
$servername = "localhost";
$username = "id3464613_junrey";
$password = "junr3y";
$dbname = "id3464613_conn";
$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	$query = " Select * FROM graderesult";
	
	$result = mysqli_query($conn, $query);
	$number_of_rows = mysqli_num_rows($result);
	
	$temp_array  = array();
	if($number_of_rows > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$temp_array[] = $row;
		}
	}
	
	header('Content-Type: application/json');
	echo json_encode(array("students"=>$temp_array));
	mysqli_close($conn);
?>