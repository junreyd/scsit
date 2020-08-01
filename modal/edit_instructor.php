<?php include('../config/db.php');
	if (isset($_POST['edit_instructor'])){
	
	$instructor_id=$_POST['instructor_id'];
	$fullname=$_POST['fullname'];
	$username=$_POST['username'];
	$password=$_POST['password'];

	mysql_query("update instructor set fullname='$fullname', username='$username' ,password='$password' where instructor_id='$instructor_id'")or die(mysql_error()); ?>
	<script type="text/javascript">
	alert('Successfully updated');
	window.location="instructor.php";
	</script>
	<?php
	}
	?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add Course</title>
</head>
<body>
<div class="row-fluid">
 <div class="modal fade" id="edit_instructor<?php echo $id;?>">  
  <div class="modal-dialog modal-md">
           <div class="modal-content">
              <div class="modal-header">
			  <div class="col-md-12">
                        <div class="alert alert-info alert-info">
                            <i class="fa fa-book"></i>&nbsp;Edit Instructor
                        </div>
                    </div>         
              <div class="modal-body" style="padding-left:75px;">
               <form action="" method="post">
				 <div class="form-group">
				 <div class="row"> 
				 <label class="col-md-4 control-label">Fullname</label>
				 <div class="col-md-6">
				 <input type="hidden" name="instructor_id" value="<?php echo $instructor['instructor_id'];?>">
                  <input type="text" class="form-control" name="fullname" placeholder="Fullname" value="<?php echo $instructor['fullname'];?>">
                </div>
				</div>
				</div>
			<div class="form-group">
				 <div class="row"> 
				 <label class="col-md-4 control-label">Username</label>
				 <div class="col-md-6">
                  <input type="text" class="form-control" name="username" placeholder="***@yahoo.com" value="<?php echo $instructor['username'];;?>">
                </div>
				</div>
				</div>
			<div class="form-group">
				<div class="row">
				<label class="col-md-4 control-label">Password</label>
				 <div class="col-md-6">
				 <input type="text" name="password" class="form-control"  placeholder="******" value="<?php echo $instructor['password'];?>">
				 </div>
				 </div>
				 </div>
		<div class="modal-footer">
					 <button type="submit" name="edit_instructor" class="btn btn-info"/><i class="fa fa-save"></i> Save and Update</button>
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
