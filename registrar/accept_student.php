<?php require_once('include/navbar_student.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Accept</title>
</head>
<body class="container-fluid">
<br><br><br>
<div class="well">
<div class="alert alert-info"><i class="fa fa-users"></i>&nbsp;Accept Students Table
					</div>
	<label><h4>FILTER by:</h4></label>
	<form  method = "POST" class="form-inline" action="">
	<label>Course</label> 
<select name="year_level" class="form-control" style="height:30px; width:100px;" required>
<option></option>
<?php $course_query = mysql_query("select * from course") or die(mysql_error());
		while($course_row = mysql_fetch_array($course_query)){?>
	<option><?php echo $course_row['code']; ?></option>
	<?php  } ?>
	</select>
<label>&nbsp;&nbsp;&nbsp;&nbsp;Year Level</label>
<select name="year_level" class="form-control" style="height:30px; width:150px;" required>
<option></option>
<option>First Year</option>
<option>Second Year</option>
<option>Third Year</option>
<option>Fourth Year</option>
</select>
<button type="submit" name="" class="btn btn-default"><i class="glyphicon glyphicon-check"></i>&nbsp;Submit</button>
</form>
 <br>
                            <table class="table  table-bordered">
                             
				<a href="student.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp;Back</a>
                                <thead>
								<br><br>
                                    <tr>
                                        <th>Name</th>                                
                                        <th>Course</th> 
										<th>Gender</th>										                               
                                        <th>Year Level</th>                                 
                                        <th>Semester</th>                                 
                                        <th>Status</th>                              
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php 
									$result=mysql_query("select * from enrollment where status='pending' order by student_id asc");
								while($row=mysql_fetch_array($result)){
									$id=$row['student_id'];?>
								<tr>
								<td><?php echo $row['firstname']." " .$row['lastname'];?></td>
								<td><?php echo $row['course'];?></td>
								<td><?php echo $row['gender'];?></td>
								<td><?php echo $row['year_level'];?></td>
								<td><?php echo $row['semester'];?></td>
								<td><?php echo $row['status'];?></td>
								<td><a href="view_student.php?student_id=<?php echo $row['student_id'];?>" style="text-decoration:none" title="View">View</td>
								</tr>
								<?php } ?>
</div>
</body>
</html>
