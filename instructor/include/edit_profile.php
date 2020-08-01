<?php include('../config/db.php');
if(isset($_POST['edit_profile'])){
$instructor_id=$_POST['instructor_id'];
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$password=$_POST['password'];
mysql_query("update instructor set fullname='$fullname',username='$username',password='$password' where instructor_id='$instructor_id'") or die(mysql_error());?>
	<script type="text/javascript">
	alert('Successfully updated');
	window.location="home.php";
	</script>
	<?php
	}
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add User</title>
</head>
<body>
<div class="row-fluid">
 <div class="modal fade" id="edit_profile<?php echo $get_id;?>">  
  <div class="modal-dialog modal-md">
           <div class="modal-content">
              <div class="modal-header">
			  <div class="col-md-12">
                        <div class="alert alert-info alert-info">
                            <i class="fa fa-pencil"></i>&nbsp;Manage Profile
                        </div>
                    </div>         
              <div class="modal-body" style="padding-left:75px;">
               <form action="" method="post">
               <input type="hidden" name="instructor_id" value="<?php echo $instructor_row['instructor_id'];?>">
				 <div class="form-group">
				 <div class="row"> 
				 <label class="col-md-4 control-label">Firstname</label>
				 <div class="col-md-6">
                  <input type="text" class="form-control" name="fullname" placeholder="Firstname here" value="<?php echo $instructor_row['fullname'];?>">
                </div>
				</div>
				</div>
				 <div class="form-group">
				<div class="row">
				<label class="col-md-4 control-label">Username</label>
				 <div class="col-md-6">
				 <input type="text" name="username" class="form-control"  placeholder="Username here" value="<?php echo $instructor_row['username'];?>">
				 </div>
				 </div>
				 </div>
				 <div class="form-group">
				<div class="row">
				<label class="col-md-4 control-label">Password</label>
				 <div class="col-md-6">
				 <input type="password" name="password" class="form-control"  placeholder="Password here" value="<?php echo $instructor_row['password'];?>">
				 </div>
				 </div>
				 </div>
		<div class="modal-footer">
					 <button type="submit" name="edit_profile" class="btn btn-info"/><i class="fa fa-save"></i> Save and Update</button>
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
