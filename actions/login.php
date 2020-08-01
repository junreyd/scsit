<?php
include("../config/bootstrap.php");
include("../config/db.php");
//print_r($_REQUEST);
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$query = "SELECT * FROM student WHERE email='$email' and password='$password'";
$result = mysql_query($query)or die(mysql_error());
//print_r($result);
$found = mysql_fetch_assoc($result);
//print_r($found); exit();
if($found){
    if(!isset($_SESSION['auth'])){
        $_SESSION['auth'] = [];
        header("location:".SITE_URL.'student.php');
        
    }    
    $_SESSION['auth']['student'] = $found;     
}else{    
    $msg='Login details fail try again';
    
    header("location:".SITE_URL.'index.php?loginmsg='.$msg);
}

?>