<?php include('../config/db.php');
	if (isset($_POST['submit'])){
	$test = $_POST['test'];
	for($b = 1; $b <=  $test; $b++)
	{
	$student_id=$_POST['student_id'];	
	$codes = "code".$b;
	$code=$_POST[$codes];
	$year_level=$_POST['year'];
	$semester=$_POST['semester'];
	$remarks='Active';
	
	$subject_query  = mysql_query("select * from subject where subject_id = '$code' ")or die(mysql_error());
	$subject_row = mysql_fetch_array($subject_query);
	$unit =  $subject_row['unit']; 
	
	$query = mysql_query("select * from  grades where  subject_id = '$code' and student_id = '$student_id'")or die(mysql_error());
	$count = mysql_num_rows($query);
	if ($count > 0){ ?>
	<script>
	alert('Subject Already Added');
	</script>
	<?php }else{
	 mysql_query("insert into grades (subject_id,student_id,year_level,semester,unit,remarks) values('$code','$student_id','$year_level','$semester','$unit','$remarks')")or die(mysql_error());
  }
  }
  }
	?>

<!DOCTYPE html>
<html>
<head>
<title>Untitled Document</title>
</head>
<body class="container-fluid">
<div class="row-fluid">
<div id="add_sub_reg<?php echo $get_id;?>" class="modal fade">
  <div class="modal-dialog modal-md">
           <div class="modal-content">
              <div class="modal-header">
              		<div class="col-md-12">
              <div class="alert alert-info alert-info"><i class="fa fa-book"></i>&nbsp;Assign Subject</div>
                    </div>         
      <div class="modal-body" style="padding:40px;">
<form class="form-horizontal" method="post">
				<input type="hidden" name="student_id" value="<?php echo $get_id; ?>" /> 
			<?php
			$student_query = mysql_query("select * from enrollment where student_id = '$get_id' ");
			$student_row = mysql_fetch_array($student_query);
			$student_course_id = $student_row['course'];
			$year = $student_row['year_level'];
			$term = $student_row['semester'];
	
		
			$course_query = mysql_query("select * from course where code = '$student_course_id'")or die(mysql_error());
			$course_row = mysql_fetch_array($course_query);
			$course_id =  $course_row['course_id'];
			?>
			<div class="form-group"> 
				<input type="hidden" name="year" value="<?php echo $year ?>">
				<input type="hidden" name="semester" value="<?php echo $term ?>">				
				<option></option>
				<?php
				$a=0;				
				$query = mysql_query("select * from subject where course_id='$course_id' and year = '$year' and semester = '$term'  ")or die(mysql_error());
				while($row = mysql_fetch_array($query)){
				$a++;
				?>
				<input type="hidden" name="code<?php echo $a; ?>" value="<?php echo $row['subject_id']; ?>">
				SUBJECT:&nbsp;&nbsp;<input type="text" class="form-control"  value="<?php echo $row['code']; ?>" disabled>
				<?php } ?>
				<input type="hidden" name="test" value="<?php echo $a; ?>">
				
			</div>
		<div class="modal-footer">
				<button name="submit" type="submit" class="btn btn-info"><i class="fa fa-save"></i>&nbsp;Assign</button>
			<button class="btn btn-default" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i>&nbsp;Close</button>
		</div>
		</form>
    </div>
	</div>
</div>
</div>
</div>
</div>	
</body>
</html>
