<?php include('../config/db.php');
if(isset($_POST['add_user'])){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysql_query("select * from admin where firstname='$firstname' and lastname='$lastname' and username='$username' and password='$password'") or die(mysql_error());
$count=mysql_num_rows($query);
if($count > 0){?>
<script type="text/javascript">
alert('User already exist');
window.location="user.php";
</script>
<?php }else{
mysql_query("insert into admin(`firstname`,`lastname`,`username`,`password`)values('$firstname','$lastname','$username','$password')")or die(mysql_error());
?>
<script type="text/javascript">
alert('User successfully added');
window.location="user.php";
</script>
<?php
}
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
 <div class="modal fade" id="add_user">  
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
				 <div class="form-group">
				 <div class="row"> 
				 <label class="col-md-4 control-label">Firstname</label>
				 <div class="col-md-6">
                  <input type="text" class="form-control" name="firstname" placeholder="Firstname here">
                </div>
				</div>
				</div>
				<div class="form-group">
				 <div class="row"> 
				 <label class="col-md-4 control-label">Lastname</label>
				 <div class="col-md-6">
                  <input type="text" class="form-control" name="lastname" placeholder="Lastname here">
                </div>
				</div>
				</div>
				 <div class="form-group">
				<div class="row">
				<label class="col-md-4 control-label">Username</label>
				 <div class="col-md-6">
				 <input type="text" name="username" class="form-control"  placeholder="Username here">
				 </div>
				 </div>
				 </div>
				 <div class="form-group">
				<div class="row">
				<label class="col-md-4 control-label">Password</label>
				 <div class="col-md-6">
				 <input type="password" name="password" class="form-control"  placeholder="Password here">
				 </div>
				 </div>
				 </div>
		<div class="modal-footer">
					 <button type="submit" name="add_user" class="btn btn-info"/><i class="fa fa-save"></i> Save and Add</button>
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
