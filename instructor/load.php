<?php include('../config/db.php');
include('include/navbar.php');
include('include/edit_profile.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>View Subject</title>
</head>
<?php $get_id = $_GET['subject_id'];?>
<body class="container-fluid">
<br>
<div class="well">
<div class="alert alert-info"><i class="fa fa-users"></i>&nbsp;Instructors Load Table</div>
<?php
        $subject_query=mysql_query("select * from subject where subject_id = '$get_id'")
        or die(mysql_error());
            $row = mysql_fetch_array($subject_query);
        $instructor_query=mysql_query("select * from instructor where instructor_id='$session_id'")or die(mysql_error());
        $row1=mysql_fetch_array($instructor_query);
           ?>
			<div class="row" style="margin-left:10px;">
            <span><strong>Instructor Name:</strong>&nbsp;<?php echo $row1['fullname']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<span><strong>Code:</strong>&nbsp;<?php echo $row['code']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <span><strong>Title:</strong>&nbsp;<?php echo $row['title']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                
<table class="table table-bordered">
<thead>
        <tr>
            <br><br>
            <th style="font-size: 14px;">#</th>
            <th style="font-size: 14px;">Students Fullname</th>
            <th style="font-size: 14px;">Year Level</th>
            <th style="font-size: 14px;">Code</th>
            <th style="font-size: 14px;">Units</th>
            <th style="font-size: 14px;">Final Ave.</th>
            <th style="font-size: 14px;">Remarks</th>
            <th style="font-size: 14px;">Action</th>
        </tr>
        </thead>
<?php
        $a = 0;
        $query = mysql_query("select * from grades where subject_id = '$get_id'") or die(mysql_error());
        while ($instructor = mysql_fetch_array($query)) {
            $a++;
            $id=$instructor['grade_id'];
            $subject_id = $instructor['subject_id'];
            $student_id=$instructor['student_id'];
            
            $student_query=mysql_query("select * from enrollment where student_id='$student_id'")or die(mysql_error());
                            while($student=mysql_fetch_array($student_query)){

            $subject_query = mysql_query("select * from subject where subject_id = '$subject_id'")or die(mysql_error());
							while($subject_row=mysql_fetch_array($subject_query)){
									?>
            <tr>
                <td style="font-size: 14px;"><?php echo $a; ?></td>
                <td style="font-size: 14px;"><?php echo $student['firstname'] . " " . $student['middlename'] . " " . $student['lastname']; ?></td>
                <td style="font-size: 14px;"><?php echo $student['year_level'];?></td>
                <td style="font-size: 14px;"><?php echo $subject_row['code']; ?></td>
                <td style="font-size: 14px;"><?php echo $subject_row['unit']; ?></td>
                <td width="100"><?php echo $instructor['gen_ave'];?></td> 
                <td style="font-size: 14px;"><?php echo $instructor['remarks'];?> </td> 
                <td style="font-size: 14px;"><a href="#add_grade<?php echo $id; ?>" id="<?php echo $id;?>" data-toggle="modal" title="Update" style="text-decoration: none;" >Update Grade</a>                                                              
                                <?php include('../modal/add_grade.php');?>
                                    </td>
  </tr>
  <?php
       } } } 
        ?>
  </table>
  <?php include_once('include/grading_system.php');?>
</div>
</body>
</html>
<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.js"></script>	