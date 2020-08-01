<?php require_once('include/navbar_subject.php');
 require_once('../modal/edit_profile.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Subject</title>
</head>
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
    if (td.innerHTML.toUpperCase().indexOf(filter)  > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
<body class="container-fluid">
<?php include('../modal/add_subject.php'); ?>
<br><br><br>
<div class="well">
	<div class="alert alert-info"><i class="fa fa-book"></i>&nbsp;Subject Table</div>
	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#add_subject"><i class="fa fa-plus"></i>&nbsp;Add Subject</button>
	<div class="row-fluid">
						<label><h4>FILTER by:</h4></label>
						<form  method = "POST" class="form-inline" action="sort_subject.php">
						Year Level
						<select name="year" class="form-control" required>
						<option></option>
						<option value="first year">First Year</option>
						<option value="second year">Second Year</option>
						<option value="third year">Third Year</option>
						<option value="fourth year">Fourth Year</option>
						</select>
										&nbsp;&nbsp;&nbsp;&nbsp;
						Semester
						<select name="semester" class="form-control"required>
						<option></option>
						<option value="first">1st</option>
						<option value="second">2nd</option>
						<option value="summer">summer</option>
						</select>
											&nbsp;&nbsp;&nbsp;&nbsp;
						Course 
						<select name="course_id" class="form-control" required>
						<option></option>
						<?php
						$query=mysql_query("select * from course") or die(mysql_error());
						while($row=mysql_fetch_array($query)){ ?>
						<option value="<?php echo $row['course_id']; ?>"><?php echo $row['code']; ?></option>
						<?php } ?>
						</select>
						<button type="submit" name="submit" class="btn btn-default"><i class="glyphicon glyphicon-check"></i>&nbsp;Submit</button>
						</form>
						</div>
<div class="row-fluid">
<input style="color:red; float:right; width:300px;" type="text" id="myInput" onKeyUp="myFunction()" placeholder="Search for Subject Title.." class="form-control">
</div><br><br>
					 <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="myTable">   
                         <thead>
                           <tr>
                           <th>#</th>
                           <th>Code</th>
                            <th>Subject Title</th>                                 
                            <th>Unit</th>                                 
                          <th>Year Level</th>                                 
                           <th>Term</th>                                 
                         <th>Pre-Requisites</th>                                 
                         <th>Course</th>  
                         <th>Instructor</th>                               
                       </tr>
                      </thead>
                    <tbody>
                     <?php 
					if (isset($_POST['submit'])){
					$year = $_POST['year'];
					$semester = $_POST['semester'];
					$course_id = $_POST['course_id']; 
					}?>
                   <?php 
                    $a=0;
            $user_query=mysql_query("select * from subject where semester = '$semester' and year = '$year' and course_id ='$course_id' ")or die(mysql_error());
					while($row=mysql_fetch_array($user_query))
					{
					$id=$row['subject_id']; 
					$course_id=$row['course_id']; 
					$instructor_id=$row['instructor_id'];
					$a++;								
					$course_query = mysql_query("select * from course where course_id = '$course_id' ")or die(mysql_error());
					$course_row = mysql_fetch_array($course_query);
					$instructor_query = mysql_query("select * from instructor where instructor_id = '$instructor_id' ") or die(mysql_error());
           			$instructor_row = mysql_fetch_array($instructor_query);
					?>
					<tr>				
					<td><?php echo $a; ?></td>	
                    <td><?php echo $row['code']; ?></td> 
                     <td><?php echo $row['title']; ?></td> 
                 	<td><?php echo $row['unit']; ?></td> 
                   <td><?php echo $row['year']; ?></td> 
                   <td><?php echo $row['semester']; ?></td> 
                   <td><?php echo $row['pre_requisite']; ?></td> 
                   <td><?php echo $course_row['code']; ?></td> 
                   <td><?php echo $instructor_row['fullname'];?></td>
   
	</td>
   </tr>
<?php } ?>
                           
      </tbody>
       </table>
 	</div>		
			</div>
		</div>
    </div>
	</div>
</body>
</html>
<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.js"></script>


