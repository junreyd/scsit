<?php include('../config/db.php');
if(isset($_POST['edit_sub'])){
$subject_id=$_POST['id'];
$semester=$_POST['semester'];
$code=$_POST['code'];
$title=$_POST['title'];
$unit=$_POST['unit'];
$pre_requisite=$_POST['pre'];
$course_id=$_POST['course'];
$instructor_id=$_POST['instructor'];
$result=mysql_query("update subject set subject_id='$subject_id',semester='$semester',code='$code',title='$title',unit='$unit',pre_requisite='$pre_requisite',course_id='$course_id',instructor_id='$instructor_id' where subject_id='$subject_id'")or die(mysql_error());
if($result){?>
<script type="text/javascript">
alert('Successfully updated');
window.location="subjects.php";
</script>
<?php }else{?>
<script type="text/javascript">
alert('Failed to update');
window.location="subjects.php";
</script>
<?php 
}
}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Edit Subject</title>
</head>
<body>
<div class="row-fluid">
<div id="edit_subject<?php echo $row['subject_id']; ?>" class="modal fade">
	<div class="modal-dialog modal-md">
	<div class="modal-content">
              <div class="modal-header">
			  <div class="col-md-12">
                        <div class="alert alert-info alert-info">
                            <i class="fa fa-book"></i>&nbsp;Manage Subject
                        </div>
                    </div>
		<div class="modal-body" style="padding-left:70px;">
	<form action="" method="post">
				 <div class="form-group">
				 <div class="row"> 
	<input type="hidden" name="id" value="<?php echo $row['subject_id']; ?>" required>
				 <label class="col-md-4 control-label">Year Level</label>
				 <div class="col-md-6">
                  <select class="form-control" name="level">
				<option><?php echo $row['year'];?></option>
				<option value="first year">First year</option>
				<option value="second year">Second year</option>
                 <option value="third year">Third year</option>
                 <option value="fourth year">Fourth year</option>
                    		</select>
                </div>
				</div>
				</div>
				<div class="form-group">
				<div class="row">
				<label class="col-md-4 control-label">Semester</label>
				 <div class="col-md-6">
				 <select class="form-control" name="semester">
				 <option><?php echo $row['semester'];?></option>
				 <option value="first">First</option>
				 <option value="second">Second</option>
				 <option value="summer">Summer</option>
				 </select>
				 </div>
				 </div>
				 </div>
				 <div class="form-group">
				<div class="row">
				<label class="col-md-4 control-label">Code</label>
				 <div class="col-md-6">
                   <input class="form-control input-md"  name="code" placeholder="Code" type="text" value="<?php echo $row['code'];?>"required/>
                </div>
				</div>
				</div>
				<div class="form-group">
				<div class="row">
				<label class="col-md-4 control-label">Subject Title</label>
				<div class="col-md-6">
				<input class="form-control input-md" name="title" placeholder="Subject Title" type="text" value="<?php echo $row['title'];?>"required/>
				</div>
				</div>
				</div>
				<div class="form-group">
				<div class="row">
				<label class="col-md-4 control-label">Unit</label>
				<div class="col-md-6">
				<input class="form-control input-md" name="unit" placeholder+"Unit" type="text" value="<?php echo $row['unit'];?>" required/>
				</div>
				</div>
				</div>
				<div class="form-group">
				<div class="row">
				<label class="col-md-4 control-label">Pre Requisite(s)</label>
				<div class="col-md-6">
				<select name="pre" class="form-control">
				<option value="<?php echo $row['subject_id'];?>"><?php echo $row['pre_requisite'];?></option>
				<option></option>
				<?php 
				$query=mysql_query("select * from subject") or die(mysql_error());
				while($rowss=mysql_fetch_array($query)){?>
				<option value="<?php echo $rowss['code'];?>"><?php echo $rowss['code'];?></option>
					
				<?php	}?>
				</select>
				</div>
				</div>
				</div>
				<div class="form-group">
				<div class="row">
				<label class="col-md-4 control-label">Course</label>
				<div class="col-md-6">
				<select class="form-control" name="course">
			<?php 
			$course_id = $course_row['course_id'];
	$course_query = mysql_query("select * from course where course_id = '$course_id' ") or die(mysql_error());
									?>
<option value="<?php echo $course_row['course_id']; ?>"><?php echo $course_row['code']; ?></option>
									<?php   ?>
			<?php 
	$course_query = mysql_query("select * from course") or die(mysql_error());
	while($course_row = mysql_fetch_array($course_query)){
									?>
<option value="<?php echo $course_row['course_id']; ?>"><?php echo $course_row['code']; ?></option>
									<?php  } ?>
			</select>
				</div>
				</div>
				</div>
				<div class="form-group">
				<div class="row">
				<label class="col-md-4 control-label">Instructor</label>
				<div class="col-md-6">
				<select class="form-control" name="instructor">
			<?php 
			$instructor_id = $instructor_row['instructor_id'];
	$instructor_query = mysql_query("select * from instructor where instructor_id = '$instructor_id' ") or die(mysql_error());
									?>
<option value="<?php echo $instructor_row['instructor_id']; ?>"><?php echo $instructor_row['fullname']; ?>
</option>
				<?php   ?>
			<?php 
	$instructor_query = mysql_query("select * from instructor") or die(mysql_error());
	while($instructor_row = mysql_fetch_array($instructor_query)){
									?>
<option value="<?php echo $instructor_row['instructor_id']; ?>"><?php echo $instructor_row['fullname']; ?>
</option>
									<?php  } ?>
			</select>
				</div>
				</div>
				</div>
				<div class="modal-footer">
					 <button type="submit" name="edit_sub" class="btn btn-info"/><i class="fa fa-save"></i> Save and Update</button>
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
