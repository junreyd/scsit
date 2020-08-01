<?php
require_once('../config/db.php');
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['admin_id']) || (trim($_SESSION['admin_id']) == '')) {
    header("location: ../login.php");
    exit();
}
$session_id=$_SESSION['admin_id'];

$admin_query  = mysql_query("select * from admin where admin_id = '$session_id'")or die(mysql_error());
$admin_row =mysql_fetch_array($admin_query);
$get_id  = $admin_row['admin_id']; 
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
<style>
 ul li:hover > ul {
    display:block;
}
body { 
     background:#edf0f5 ;
 }
</style>
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
                               <a href="instructor.php"><i class="fa fa-users"></i>&nbsp;Instructor</a>
                                </li>             
                                <li class="">
                               <a href="course.php"><i class="fa fa-graduation-cap"></i>&nbsp;Course</a>
                                </li>                       
                                <li class="">
                               <a href="subjects.php"><i class="fa fa-book"></i>&nbsp;Subject</a>
                                </li>
               <li class="">
                               <a href="user.php"><i class="fa fa-user"></i>&nbsp;User</a>
                                </li>
                                <li class="">
                               <a href="inquire.php"><i class="fa fa-folder"></i>&nbsp;Inquiry</a>
                                </li>
                                <!--                <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $user_row['firstname'];?></a> 
                         <ul class="dropdown-menu">
                         <li class="">
 <a href="#edit_profile<?php echo $get_id; ?>" id="<?php echo $get_id; ?>" title="Edit" data-toggle="modal" style="text-decoration: none;"><i class="fa fa-wrench"></i>&nbsp;Manage Profile</a></td>
                </li>     -->
                            <li class="">
                               <a href="logout.php"><i class="fa fa-sign-out"></i>&nbsp;Logout</a>
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
