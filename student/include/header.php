<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Header</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.css">
<body class="container">
<div class="span12">
<div class="pull-left">
<img src="../images/gradingheader.jpg" style="height:190px; width:100%; margin-top:70px;">
<br><br>
<div class="alert alert-info">&nbsp;Welcome to SCSIT Pre Enrollment with Online Grade Inquiry
							<div class="pull-right">
					
							<i class="fa fa-calendar"></i>
								<?php
								$Today = date('y:m:d');
								$new = date('l, F d, Y', strtotime($Today));
								echo $new;
								?>
							</div>
					</div>
				</div>
				</div>
</body>
</html>
