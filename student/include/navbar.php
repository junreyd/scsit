<?php
include_once("../config/db.php");
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['usertype']) || (trim($_SESSION['usertype']) == '')) {
    header("location: index.php");
    exit();
}
$session_id=$_SESSION['usertype'];

$user_query  = mysql_query("select * from users where usertype = '$session_id'")or die(mysql_error());
$user_row =mysql_fetch_array($user_query);
$get_id  = $user_row['user_id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Navbar</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.css">
<body class="container-fluid">
	<div class="navbar navbar-fixed-top navbar-inverse">
					<div class="navbar-inner">
					  <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
							<li class="">
                               <a href="index.php"><i class="fa fa-home"></i>&nbsp;Home</a>
                                </li>
					    <li>
                            <a href="pre_enrol.php"><i class="fa fa-folder"></i>&nbsp;Enrol</a>
                        </li>
                            <li class="">
                               <a href="logout.php"><i class="fa fa-sign-out"></i>&nbsp;Logout</a>
                                </li>
                    </ul>
                </li>     
                            </ul>
                        </div>
                    </div>
                </div>
				</div>
				</div>
				
	<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.js"></script>			
</body>
</html>
