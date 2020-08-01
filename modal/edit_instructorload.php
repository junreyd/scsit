<?php include('../config/db.php');
if (isset($_POST['submit'])){
	$grade_id=$_POST['grade_id'];
	$instructor_id=$_POST['instructor_id'];
	$code=$_POST['code'];
		 mysql_query("update grades set subject_id='$code',instructor_id='$instructor_id' where grade_id='$grade_id'")or die(mysql_error());?>
		 <script type="text/javascript">
alert('Subject Successfully added');
window.location="instructorload.php<?php echo '?instructor_id='.$get_id;  ?>";
</script>
<?php
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body class="container-fluid">
<div class="row-fluid">
<div id="edit_instructorload<?php echo $id;?>" class="modal fade">
  <div class="modal-dialog modal-md">
           <div class="modal-content">
              <div class="modal-header">
              		<div class="col-md-12">
              <div class="alert alert-info alert-info"><i class="fa fa-book"></i>&nbsp;Assign Subject</div>
                    </div>         
      <div class="modal-body" style="padding:40px;">
<form class="form-horizontal" method="post">
				<input type="hidden" name="instructor_id" value="<?php echo $get_id; ?>" />
				<input type="hidden" name="grade_id" value="<?php echo $id; ?>" /> 
			<?php
			$instructor_query = mysql_query("select * from instructor where instructor_id = '$get_id' ");
			$instructor_row = mysql_fetch_array($instructor_query);
			$instructor_course_id = $instructor_row['course'];

			$course_query = mysql_query("select * from course where code = '$instructor_course_id'")or die(mysql_error());
			$course_row = mysql_fetch_array($course_query);
			$course_id =  $course_row['course_id'];
			?>
			<div class="form-group">
        <div class="row">
			<div class="col-md-5">
            	<label class="control-label" >Subject Code</label>
            	</div>
			<div class="col-md-4">
			<select name="code" class="form-control input-sm" required>
			<option value="<?php echo $subject_row['subject_id'];?>"><?php echo $subject_row['code'];?></option>
			<option></option>
			<?php  
				$query = mysql_query("select * from subject   ")or die(mysql_error());
				while($row = mysql_fetch_array($query)){ ?>				
			<option value="<?php echo $subject_row['subject_id']; ?>"><?php echo $row['code']; ?></option>	
			<?php
				}
				?>
				</select>
				</div>
</div>
</div>
		<div class="modal-footer">
				<button name="submit" type="submit" class="btn btn-info"><i class="fa fa-save"></i>&nbsp;Save and Update</button>
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