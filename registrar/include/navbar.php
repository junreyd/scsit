<!--//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['user_id']) || (trim($_SESSION['user_id']) == '')) {
    header("location: index.php");
    exit();
}
$session_id=$_SESSION['user_id'];

$user_query  = mysql_query("select * from admin where user_id = '$session_id'")or die(mysql_error());
$user_row =mysql_fetch_array($user_query);
$get_id  = $user_row['user_id'];-->
<?php
require_once('../config/db.php'); 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Navbar</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css">
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
							<li class="active">
                               <a href="home.php"><i class="glyphicon glyphicon-home"></i>&nbsp;Home</a>
                                </li>
									<li class="">
                               <a href="student.php">&nbsp;Student</a>
                                </li>
								<li class="">
                               <a href="course.php"></i>&nbsp;Course</a>
                                </li>						
								<li class="">
                               <a href="subjects.php">&nbsp;Subject</a>
                                </li>
                                <li class="">
                               <a href="user.php">&nbsp;User</a>
                                </li>
                                <li class="">
                               <a href=""><i class="fa fa-folder"></i>&nbsp;Inquiry</a>
                                </li>
                <li class="">
                               <a href="#"></i>&nbsp;Logout</a>
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
