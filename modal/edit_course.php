<?php include('../config/db.php');
	if (isset($_POST['edit_course'])){
	
	$course_id=$_POST['course_id'];
	$code=$_POST['code'];
	$title=$_POST['title'];

	mysql_query("update course set code='$code', title='$title' where course_id='$course_id'")or die(mysql_error()); ?>
	<script type="text/javascript">
	alert('Successfully updated');
	window.location="course.php";
	</script>
	<?php
	}
	?>
<!DOCTYPE html>
<html >
<head>
<title>Edit Course</title>
</head>
<body>
<div class="row-fluid">
 <div class="modal fade" id="edit_course<?php echo $id;?>" >  
  <div class="modal-dialog modal-md">
           <div class="modal-content">
              <div class="modal-header">
			  <div class="col-md-12">
                        <div class="alert alert-info alert-info">
                            <i class="fa fa-book"></i>&nbsp;Manage Course
                        </div>
                    </div>         
              <div class="modal-body" style="padding-left:75px;">
               <form action="" method="post">
				 <div class="form-group">
				 <div class="row"> 
				 <label class="col-md-4 control-label">Code</label>
				 <div class="col-md-6">
				 <input type="hidden" name="course_id" value="<?php echo $course['course_id'];?>">
                  <input type="text" class="form-control" name="code" placeholder="Code" value="<?php echo $course['code'];?>">
                </div>
				</div>
				</div>
				<div class="form-group">
				<div class="row">
				<label class="col-md-4 control-label">Description</label>
				 <div class="col-md-6">
				 <input type="text" name="title" class="form-control" placeholder="Course Title" required value="<?php echo $course['title']?>">
				 </div>
				 </div>
				</div>
				<div class="modal-footer">
					 <button type="submit" name="edit_course" class="btn btn-info"/><i class="fa fa-save"></i> Save and Update</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        
    </div>	
	</div>	
	</div>
</body>
</html>

