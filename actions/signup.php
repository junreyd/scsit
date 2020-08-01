<?php
echo "<pre>";
include("../config/bootstrap.php");
include("../config/db.php");
print_r($_REQUEST);
$fullname = $_REQUEST['fullname'];
$password = $_REQUEST['password'];
$email = $_REQUEST['email'];
$query = "SELECT * FROM student WHERE  email='$email' and password='$password'";
//echo $query;
$result = mysql_query($query)or die(mysql_error());
//print_r($result);
$found = mysql_fetch_assoc($result);
//print_r($found); exit();
if ($found) {
    echo $msg = 'you have already registered on this website please login';
   header("location:".SITE_URL.'index.php?loginmsg='.$msg);
} else {
    //insert data;

    $insertquery =mysql_query("INSERT INTO student(fullname,email,password) VALUES('$fullname','$email','$password')")or die(mysql_error());
$query =mysql_query("SELECT * FROM student WHERE email='$email' and password='$password'")or die(mysql_error());
  $found = mysql_fetch_assoc($query);

    if(!isset($_SESSION['auth'])){
        $_SESSION['auth'] = [];
        header("location:".SITE_URL.'student.php');

    }
    //set session
    $_SESSION['auth']['student'] = $found;
}

?>