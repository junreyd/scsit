<?php require_once('include/navbar_student.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>View Grades</title>
</head>
<?php $get_id = $_GET['student_id'];?>
<body class="container-fluid">
<br><br><br>
<div class="well">
<?php
			$student_query=mysql_query("select * from enrollment where student_id = '$get_id'")or die(mysql_error());
			$row = mysql_fetch_array($student_query);
			$year_level = $row['year_level'];
			$semester = $row['semester'];
			$term = $row['semester'];
			?>
			<div class="row" style="margin-left:10px;">
				<span><strong>STUDENT NUMBER:</strong><?php echo $row['student_no']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<span><strong>STUDENT NAME:</strong><?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<span><strong>COURSE:</strong><?php echo $row['course']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<span>
				<span><strong><?php echo $row['year_level']; ?> :</strong> <?php echo $row['semester']; ?>&nbsp; semester&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				</span>
				<?php include('../modal/add_sub.php');?>
 </div>
 <button type="button" class="btn btn-info" data-toggle="modal" data-target="#send_grade" style="float:right;"><i class="fa fa-send"></i>&nbsp;Send Grades</button>
<button onClick="window.print()"; class="btn btn-info" style="float: right;" ><i class="fa fa-print"></i>&nbsp;Print</button>
<?php include('../modal/send_grade.php');?>					
			<legend><i class="fa fa-file"></i>&nbsp;Grades Table</legend>
			                <table class="table table-bordered">                      
                                <thead>
                                    <tr>
                                    	<th>#</th>
                                        <th>Code</th>
                                        <th>Subject</th>
                                        <th>Units</th>                                 
                                        <th>Gen Ave.</th>       
                                        <th>Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>


                       
            <?php                    
			$a=0;
			$user_query=mysql_query("select * from grades where student_id = '$get_id' and year_level='$year_level' and semester='$semester'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$a++;
									$id=$row['grade_id'];
									$remarks = $row['remarks'];
									$subject_id = $row['subject_id'];
									
									$subject_query = mysql_query("select * from subject where subject_id = '$subject_id'")or die(mysql_error());
									while($subject_row=mysql_fetch_array($subject_query)){

									?>
									<tr>
									<td><?php echo $a; ?></td>
                                    <td><?php echo $subject_row['code']; ?></td> 
                                    <td><?php echo $subject_row['title']; ?></td> 
                                    <td><?php echo $subject_row['unit']; ?></td>                    
                                    <td><?php echo $row['gen_ave'];?></td> 
									<td><?php echo $row['remarks'];?></td>
								</tr>    
									<?php } } ?>
					<tr>
								   <td></td>
								   <td></td> 
								   <td>Number of Units:</td> 
								   <td style="color: blue;"> 					
								   <?php
                            $result = mysql_query("SELECT sum(unit) FROM grades  where student_id = '$get_id' and year_level = '$year_level' and semester = '$term'") or die(mysql_error());
                            while ($rows = mysql_fetch_array($result)) {
                                ?>
						
								 <?php echo $rows['sum(unit)']; ?>
							
                            <?php } ?>
							
									</td> 
								   <td></td> 
								   <td></td> 
								</tr>				
									</tbody>
									</table>
								
<?php include('../instructor/include/grading_system.php');?>
</div>			
</body>

</html>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
 