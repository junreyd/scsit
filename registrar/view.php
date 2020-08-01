<?php require_once('include/navbar_instructor.php');
 require_once('../modal/edit_profile.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>View Subject</title>
</head>
<?php $get_id = $_GET['subject_id'];?>
<body class="container-fluid">
<br><br><br>
<div class="well">
<div class="alert alert-info"><i class="fa fa-users"></i>&nbsp;Instructors Load Table</div>
<?php
		$subject_query=mysql_query("select * from subject where subject_id = '$get_id'")
		or die(mysql_error());
			$row = mysql_fetch_array($subject_query);
			$instructor_id=$row['instructor_id'];

        $instructor_query=mysql_query("select * from instructor where instructor_id = '$instructor_id'")
        or die(mysql_error());
            $instructor_row = mysql_fetch_array($instructor_query);    
			?>
			<div class="row" style="margin-left:10px;">
                <span><strong>Instructor Name:&nbsp;</strong><?php echo $instructor_row['fullname']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<span><strong>Subject Code:&nbsp;</strong><?php echo $row['code']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span><strong>Subject Title:&nbsp;</strong><?php echo $row['title']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				</div>
				<br>
	<table class="table table-bordered">
<thead>
        <tr>
            <br><br>
            <th>#</th>
            <th>Fullname</th>
            <th>Year level</th>
            <th>School year</th>
        </tr>
        </thead>
<?php
        $a = 0;
        $query = mysql_query("select * from grades where subject_id = '$get_id'") or die(mysql_error());
        while ($subject_row = mysql_fetch_array($query)) {
            $a++;
            $id=$subject_row['subject_id'];	
            $student_id=$subject_row['student_id'];

            $student_query = mysql_query("select * from enrollment where student_id = '$student_id'") or die(mysql_error());
        while ($student_row = mysql_fetch_array($student_query)) {
            ?>
            <tr>
                <td><?php echo $a; ?></td>
    <td><?php echo $student_row['firstname'] . " " . $student_row['middlename'] . " " . $student_row['lastname']; ?></td>
                <td><?php echo $student_row['year_level'] ?></td>
                <td><?php echo $student_row['schoolyear'] ?></td>
              </tr>
  <?php
       } }
        ?>
  </table>
</div>
</body>
</html>
<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.js"></script>	