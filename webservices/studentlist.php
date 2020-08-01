<?php
echo "<pre>";
include("../config/bootstrap.php");
include("../config/db.php");
if($_REQUEST['secret_key']=='allowed'){
	$query = "SELECT * FROM students";
	$result = mysqli_query($con, $query);
	$data = mysqli_fetch_assoc($result);
	echo json_encode(['status'=>'success','data'=>$data]);
	die;	
}
echo "Access denied";
die;
