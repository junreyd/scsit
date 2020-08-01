<?php
session_start();
session_destroy();
header('location:../new_work/index.php');
?>