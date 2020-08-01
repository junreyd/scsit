<?php include('../config/db.php');
	if (isset($_POST['send'])){
	$student_id=$_GET['student_id'];
	$content=$_POST['content'];
	$status='Done';
	mysql_query("update inquiry set content='$content',status='$status' where student_id='$student_id'")or die(mysql_error()); ?>
	<script type="text/javascript">
	alert('Successfully updated');
	window.location="inquire.php";
	</script>
	<?php
	}
	?>
<!DOCTYPE html>
<html>
<head>
<title>Add Course</title>
</head>
<body>
<?php $get_id = $_GET['student_id'];?>
<div class="row-fluid">
 <div class="modal fade" id="send_grade">  
  <div class="modal-dialog modal-md">
           <div class="modal-content">
              <div class="modal-header">
			  <div class="col-md-12">
                        <div class="alert alert-info alert-info">
                            <i class="fa fa-send"></i>&nbsp;Send Grades
                        </div>
                    </div>  
                    <input type="hidden" name="student_id" value="<?php echo $get_id;?>">       
              <div class="modal-body" style="padding-left:75px;">
               <form action="" method="post">
				 <div class="form-group">
				 <div class="row"> 
				 <label class="col-md-4 control-label">Grades</label>
				 <div class="col-md-6">
 <?php                    
		
			$user_query=mysql_query("select * from grades where student_id = '$get_id' and year_level='$year_level' and semester='$semester'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['grade_id'];
									$remarks = $row['remarks'];
									$subject_id = $row['subject_id'];
			$subject_query = mysql_query("select * from subject where subject_id = '$subject_id'")or die(mysql_error());
									while($subject_row=mysql_fetch_array($subject_query)){?>

				<textarea name="content" style="width:170px; height:150px;">
								
									Code: <?php echo $subject_row['code']; ?> 
                                    Title: <?php echo $subject_row['title']; ?> 
                                    Unit: <?php echo $subject_row['unit']; ?>                    
                                    Grade: <?php echo $row['gen_ave'];?>
									Remarks: <?php echo $row['remarks'];?>
								    
				</textarea>
				<?php } }?>
                  </div>
				</div>
				</div>
				<div class="modal-footer">
					 <button type="submit" name="send" class="btn btn-info"/><i class="fa fa-send"></i> Send</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
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
