<?php 

include("../config/bootstrap.php");
session_destroy();
header("location:".SITE_URL);

?>