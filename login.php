<?php
include('config/db.php');
if(isset($_POST['submit'])){
  session_start();
$account_type = $_POST['usertype'];
$username = $_POST['username'];
$password = $_POST['password'];

$query=mysql_query("select *from admin where username='$username' and password='$password'")or die(mysql_error());
  $cnt=mysql_num_rows($query);
  $row=mysql_fetch_array($query);

$query1=mysql_query("select *from instructor where username='$username' and password='$password'")or die(mysql_error());
  $cnt1=mysql_num_rows($query);
  $row1=mysql_fetch_array($query1);

  if($account_type == 'Admin'){
    header('location:registrar/home.php');
$_SESSION['admin_id']=$row['admin_id'];

  }
  else if($account_type == 'Instructor'){
    header('location:instructor/home.php');
    $_SESSION['instructor_id']=$row1['instructor_id'];
  }
  }
?>

<!DOCTYPE html>
<html>
<head>
<meta>
<title>Login Page</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap-theme.css">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<style>
body { 
     background:#edf0f5 ;
 }
</style>
</head>
<body class="container-fluid">
<br><br><br>
<div class="row-fluid" style="margin-left:35%;padding-top:5%;">
<div class="col-md-5" style="text-align:center;">
  <form action="" method="POST">  
            <div class="form-group" >
            <h1 style="text-align:center;"><strong><span>Login</span><span  style="color:skyblue;"> Here</span></strong></h1>
              <hr style="border-color:skyblue">
      <label class="col-md-2">Usertype:</label>
      <select type="text" name="usertype" class="form-control"  required>
        <option></option>
        <option value="Admin">Admin</option>
        <option value="Instructor">Instructor</option>
      </select>
      </div>
            <div class="form-group">
            <label class="col-md-2">Username:</label>
              <input type="text" placeholder="Enter Username" class="form-control" name="username" required>
            </div>
            <div class="form-group">
            <label class="col-md-2">Password:</label>
              <input type="password" placeholder="Enter Password" class="form-control" name="password" required>
            </div>
            <br>
            <button type="submit" class="btn btn-info" name="submit"><i class="glyphicon glyphicon-log-in"></i> Login</button>
          </form>
         </div>
</div>
</div>
  </div>
    <div style="margin-top:35%; text-align:center;">
    <hr style="border-color:skyblue">
    <p>&copy; 2017 SCSIT . All Rights Reserved | Proudly <a href=""> BSIT Team </a></p>

  <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
