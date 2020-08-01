<?php include('../config/db.php');
if(isset($_POST['add_course'])){
$code=$_POST['code'];
$title=$_POST['title'];
$query=mysql_query("select * from course where code='$code' and title='$title'") or die(mysql_error());
$count=mysql_num_rows($query);
if($count > 0){?>
<script type="text/javascript">
alert('Course already exist');
window.location="course.php";
</script>
<?php }else{
mysql_query("insert into course(`code`,`title`)values('$code','$title')")or die(mysql_error());
?>
<script type="text/javascript">
alert('Course successfully added');
window.location="course.php";
</script>
<?php
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Add Course</title>
</head>
<body>
<div class="row-fluid">
 <div class="modal fade" id="add_course">  
  <div class="modal-dialog modal-md">
           <div class="modal-content">
              <div class="modal-header">
			  <div class="col-md-12">
                        <div class="alert alert-info alert-info">
                            <i class="fa fa-book"></i>&nbsp;Add Course
                        </div>
                    </div>         
              <div class="modal-body" style="padding-left:75px;">
               <form action="" method="post">
				 <div class="form-group">
				 <div class="row"> 
				 <label class="col-md-4 control-label">Code</label>
				 <div class="col-md-6">
                  <input type="text" class="form-control" name="code" placeholder="Code">
                </div>
				</div>
				</div>
				<div class="form-group">
				<div class="row">
				<label class="col-md-4 control-label">Description</label>
				 <div class="col-md-6">
				 <input type="text" name="title" class="form-control"  placeholder="Course Title">
				 </div>
				 </div>
				 </div>
		<div class="modal-footer">
					 <button type="submit" name="add_course" class="btn btn-info"/><i class="fa fa-save"></i> Save and Add</button>
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
