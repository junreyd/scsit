<?php include('../config/db.php');
if(isset($_POST['edit_user'])){
$admin_id=$_POST['admin_id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$password=$_POST['password'];
mysql_query("update admin set firstname='$firstname',lastname='$lastname',username='$username',password='$password' where admin_id='$admin_id'") or die(mysql_error());?>
	<script type="text/javascript">
	alert('Successfully updated');
	window.location="user.php";
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
 <div class="modal fade" id="edit_user<?php echo $id;?>">  
  <div class="modal-dialog modal-md">
           <div class="modal-content">
              <div class="modal-header">
			  <div class="col-md-12">
                        <div class="alert alert-info alert-info">
                            <i class="fa fa-user"></i>&nbsp;Add User
                        </div>
                    </div>         
              <div class="modal-body" style="padding-left:75px;">
               <form action="" method="post">
               <input type="hidden" name="admin_id" value="<?php echo $admin['admin_id'];?>">
				 <div class="form-group">
				 <div class="row"> 
				 <label class="col-md-4 control-label">Firstname</label>
				 <div class="col-md-6">
                  <input type="text" class="form-control" name="firstname" placeholder="Firstname here" value="<?php echo $admin['firstname'];?>">
                </div>
				</div>
				</div>
				<div class="form-group">
				<div class="row">
				<label class="col-md-4 control-label">Lastname</label>
				 <div class="col-md-6">
				 <input type="text" name="lastname" class="form-control"  placeholder="Lastname here" value="<?php echo $admin['lastname'];?>">
				 </div>
				 </div>
				 </div>
				 <div class="form-group">
				<div class="row">
				<label class="col-md-4 control-label">Username</label>
				 <div class="col-md-6">
				 <input type="text" name="username" class="form-control"  placeholder="Username here" value="<?php echo $admin['username'];?>">
				 </div>
				 </div>
				 </div>
				 <div class="form-group">
				<div class="row">
				<label class="col-md-4 control-label">Password</label>
				 <div class="col-md-6">
				 <input type="password" name="password" class="form-control"  placeholder="Password here" value="<?php echo $admin['password'];?>">
				 </div>
				 </div>
				 </div>
		<div class="modal-footer">
					 <button type="submit" name="edit_user" class="btn btn-info"/><i class="fa fa-save"></i> Save and Update</button>
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
