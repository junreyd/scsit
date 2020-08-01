<?php 
  require_once('include/navbar.php');
  require_once('../config/db.php'); 
		if(isset($_POST['submit'])){
	$student_id=$_POST['student_id'];
	$student_no=$_POST['student'];
  $name=$_POST['fullname'];
	$firstname=$_POST['fName'];
	$middlename=$_POST['mName'];
	$lastname=$_POST['lName'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
  $birthday=$_POST['bdate'];
	$birthplace=$_POST['bplace'];
	$address=$_POST['address'];
	$civilstatus=$_POST['civilstatus'];
	$nationality=$_POST['nationality'];
	$religion=$_POST['religion'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$year_level=$_POST['year_level'];
	$semester=$_POST['semester'];
  $course=$_POST['course'];
	$schoolyear=$_POST['schoolyear'];
	$status='enrolled';

$result=mysql_query("UPDATE enrollment SET student_no='$student_no',firstname='$firstname',middlename='$middlename',lastname='$lastname',age='$age',gender='$gender',birthday='$birthday',birthplace='$birthplace',address='$address',civilstatus='$civilstatus',nationality='$nationality',religion='$religion',contact='$contact',email='$email',year_level='$year_level',semester='$semester',schoolyear='$schoolyear',status='$status',course='$course' WHERE student_id='$student_id'") or die(mysql_error());
$query=mysql_query("insert into inquiry(`student_no`,`name`,`year_level`,`semester`)values('$student_no','$name','$year_level','$semester')")or die(mysql_error());
if($result){?>
<script type="text/javascript">
alert('Student Successfully Enrolled');
window.location="student.php";
</script>
<?php }else{ ?>
<script type="text/javascript">
alert('failed to Enrolled Student');
window.location="view_student.php";
</script>
<?php
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Untitled Document</title>
</head>
<body class="container-fluid">
<?php $get_id = $_GET['student_id']; ?>
<?php 
  
$query=mysql_query("select * from enrollment where student_id='$get_id'")or die(mysql_error());
		$row=mysql_fetch_array($query);?>	
<div class="well" style="margin-top:70px;">
    <fieldset>
      <legend>New Student</legend>   
<form action="" method="post">
<div class="form-group"> 
<div class="row">
<div class="col-md-4">
<label class="col-md-4 control-label" >Student #:</label>
<div class="col-md-8">
<input type="hidden" name="student_id" value="<?php echo $get_id;?>">
<input type="hidden" name="fullname" value="<?php echo $row['firstname'].''.$row['middlename'].''.$row['lastname'];?>">
  <input class="form-control input-sm" name="student" placeholder="Student #" type="text" value="<?php echo 'ID00'.$get_id; ?>" readonly>
      </div>
      </div>
          </div>
          </div>
      <div class="form-group">
        <div class="row">
          <div class="col-md-4">
            <label class="col-md-4 control-label" >LastName:</label>
            <div class="col-md-8">
              <input class="form-control input-sm" name="lName" placeholder="Last Name" type="text" value="<?php echo $row['lastname'];?>">
            </div>
          </div>
          <div class="col-md-4">
            <label class="col-md-4 control-label">Firstname:</label>
            <div class="col-md-8">
              <input class="form-control input-sm" name="fName" placeholder="First Name" type="text" value="<?php echo $row['firstname'];?>">
            </div>
          </div>
          <div class="col-md-4">
            <label class="col-md-4 control-label">Middlename:</label>
            <div class="col-md-8">
              <input class="form-control input-sm" name="mName" placeholder="Middle Name" type="text" value="<?php echo $row['middlename'];?>">
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-md-4">
            <label class="col-md-4 control-label">Gender</label>

            <div class="col-md-8">
              <select class="form-control input-sm" name="gender">
              <option><?php echo $row['gender'];?></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>
           <div class="col-md-4">
                <label class="col-md-4 control-label">Birth Date</label>
                <div class="col-md-8">
                    <div class="input-group">
                    <input class="form-control" size="11" type="date" name="bdate" value="<?php echo $row['birthday'];?>">
                </div>
              </div>
           </div>
          <div class="col-md-4">
            <label class="col-md-4 control-label">Birth place</label>
            <div class="col-md-8">
              <input class="form-control input-sm" name="bplace" placeholder="Birth Place" type="text" value="<?php echo $row['birthplace'];?>">
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-md-4">
            <label class="col-md-4 control-label">Civil Status</label>
            <div class="col-md-8">
              <select class="form-control input-sm" name="civilstatus">
              <option><?php echo $row['civilstatus'];?></option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <label class="col-md-4 control-label">Age</label>
            <div class="col-md-8">
              <input class="form-control input-sm" name="age" placeholder="age" type="number" value="<?php echo $row['age'];?>">
            </div>
          </div>
          <div class="col-md-4">
            <label class="col-md-4 control-label">Nationality</label>
            <div class="col-md-8">
              <input class="form-control input-sm"name="nationality" placeholder="Nationality" type="text" value="<?php echo $row['nationality'];?>">
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-md-4">
            <label class="col-md-4 control-label">Religion</label>
            <div class="col-md-8">
              <input class="form-control input-sm" name="religion" placeholder="Religion" type="text" value="<?php echo $row['religion'];?>">
            </div>
          </div>
          <div class="col-md-4">
            <label class="col-md-4 control-label">Contact</label>
            <div class="col-md-8">
              <input class="form-control input-sm" name="contact" placeholder="Contact Number" type="text" value="<?php echo $row['contact'];?>">
            </div>
          </div>
          <div class="col-md-4">
            <label class="col-md-4 control-label">Email</label>
            <div class="col-md-8">
              <input class="form-control input-sm" name="email" placeholder="Email address" type="email" value="<?php echo $row['email'];?>">
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-md-8">
            <label class="col-sm-2 control-label">Home</label>
            <div class="col-md-10">
              <input class="form-control input-sm" name="address" placeholder="Home Address" type="text" value="<?php echo $row['address'];?>">
            </div>
          </div>
        <div class="col-md-4">
        <label class="col-md-4 control-label" >Course</label>
        <div class="col-md-8">
          <select class="form-control input-sm" name="course">
		  <?php 
				$query=mysql_query("select * from course") or die(mysql_error());
				while($roww=mysql_fetch_array($query)){?>
				<option><?php echo $row['course'];?></option>
				<option value="<?php echo $roww['code'];?>"><?php echo $roww['code'];?></option>
				<?php } ?>
      </select> 
        </div>
        </div> 
	 </div>
      </div>
		<div class="form-group">
      <div class="row"> 
	  <div class="col-md-4">
        <label class="col-md-4 control-label">Year Level</label>
        <div class="col-md-6">
         <select class="form-control input-sm" name="year_level">
         <option><?php echo $row['year_level'];?></option>
      <option value="First year">1st yr</option>
      <option value="Second year">2nd yr</option>  
      <option value="Third year">3rd yr</option>
	  <option value="Fourth year">4th yr</option>
      </select> 
        </div>
        </div>   
        <div class="col-md-4">
        <label class="col-md-4 control-label">Semester</label>
        <div class="col-md-6">
         <select class="form-control input-sm" name="semester">
         <option><?php echo $row['semester']?></option>
      <option value="First">First</option>
      <option value="Second">Second</option>  
      <option value="Second">Summer</option>  
      </select> 
        </div>
        </div>
        <div class="col-md-4">
        <label class="col-md-4 control-label">SY</label>
        <div class="col-md-6">
         <select class="form-control input-sm" name="schoolyear">
         <option><?php echo $row['schoolyear'];?></option>
      <option value="2016-2017">2016-2017</option>
      <option value="2017-2018">2017-2018</option>
      <option value="2018-2019">2018-2019</option>
      <option value="2019-2020">2019-2020</option>  
      </select> 
      </div>
      </div>
	  </div>
	  </div>
</fieldset>
    <div class="form-group">
      <div class="row">
        <div class="col-md-6">
          <div class="col-md-6"></div>
        </div>
       <div class="col-md-6" style="text-align: right">
          <button class="btn btn-info" name="submit" type="submit"><i class="fa fa-save"></i>&nbsp;Accept</button>
        </div>
      </div>
    </div>
  </form>
</div>
</div>
</body>
</html>
