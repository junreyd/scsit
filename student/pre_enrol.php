<?php require_once('../config/db.php'); 
if(isset($_POST['submit'])){
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
  $course=$_POST['course'];
  $semester=$_POST['semester'];
  $schoolyear=$_POST['schoolyear'];
  $father=$_POST['father'];
  $fatheroccup=$_POST['fOccu'];
  $mother=$_POST['mother'];
  $motheroccup=$_POST['mOccu'];
  $parentsaddress=$_POST['parentsaddress'];
  $parentscontact=$_POST['parentscontact'];
  $guardian=$_POST['guardian'];
  $guardianadd=$_POST['guardianadd'];
  $nso=$_POST['nso'];
  $diploma=$_POST['diploma'];
  $form137=$_POST['form'];
  $certificate=$_POST['certificate'];
  $payment=$_POST['payment'];
  $student_status=$_POST['student_status'];
  $status='pending';

$query=mysql_query("select * from enrollment where firstname='$firstname' and middlename='$middlename' and lastname='$lastname'and age='$age' and status='$status' and gender='$gender' and birthplace='$birthplace' and address='$address' and civilstatus='$civilstatus' and nationality='$nationality' and religion='$religion' and contact='$contact' and email='$email'
and year_level='$year_level' and semester='$semester' and schoolyear='$schoolyear' and father='$father' and fatheroccup='$fatheroccup' and mother='$mother' and motheroccup='$motheroccup' and parentsaddress='$parentsaddress' and parentscontact='$parentscontact' and guardian='$guardian' and guardianadd='$guardianadd'and nso='$nso' and diploma='$diploma' and form137='$form137' and certificate='$certificate' and payment='$payment' and student_status='$student_status'")or die(mysql_error());
  $count=mysql_num_rows($query);
  if ($count > 0) {?>
  
  <script>
    alert('Application already exist');
    window.location="pre_enrol.php";
  </script>

  <?php }else{
mysql_query("INSERT into enrollment (`firstname`,`middlename`,`lastname`,`age`,`gender`,`birthday`,`birthplace`,`address`,`status`,`civilstatus`,`nationality`,`religion`,`email`,`contact`,`year_level`,`semester`,`schoolyear`,`course`,`father`,`fatheroccup`,`mother`,`motheroccup`,`parentsaddress`,`parentscontact`,`guardian`,`guardianadd`,`nso`,`diploma`,`form137`,`certificate`,`student_status`) VALUES ('$firstname','$middlename','$lastname','$age','$gender','$birthday','$birthplace','$address','$status','$civilstatus','$nationality','$religion','$email','$contact','$year_level','$semester','$schoolyear','$course','$father','$fatheroccup','$mother','$motheroccup','$parentsaddress','$parentscontact','$guardian','$guardianadd','$nso','$diploma','$form137','$certificate','$student_status')")or die(mysql_error());
?>
  <script>
    alert('Application successfully submitted');
    window.location="index.php";
  </script>
<?php
}
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Pre_enrol</title>
</head>
<body class="container-fluid">
<?php require_once('include/navbar.php');?>
<div class="well" style="margin-top:70px;">
    <fieldset>
      <legend>New Student</legend>   
<form action="" method="post">
    <div class="form-group">
        <div class="row">
          <div class="col-md-4">
            <label class="col-md-4 control-label" >LastName:</label>
            <div class="col-md-8">
              <input class="form-control input-sm" name="lName" placeholder="Last Name" type="text">
            </div>
          </div>
          <div class="col-md-4">
            <label class="col-md-4 control-label">Firstname:</label>
            <div class="col-md-8">
              <input class="form-control input-sm" name="fName" placeholder="First Name" type="text">
            </div>
          </div>
          <div class="col-md-4">
            <label class="col-md-4 control-label">Middlename:</label>
            <div class="col-md-8">
              <input class="form-control input-sm" name="mName" placeholder="Middle Name" type="text">
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
              <option></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>
           <div class="col-md-4">
                <label class="col-md-4 control-label">Birth Date</label>
                <div class="col-md-8">
                    <div class="input-group">
                    <input class="form-control" size="11" type="date" name="bdate">
                </div>
              </div>
           </div>
          <div class="col-md-4">
            <label class="col-md-4 control-label">Birth place</label>
            <div class="col-md-8">
              <input class="form-control input-sm" name="bplace" placeholder="Birth Place" type="text">
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
              <option></option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <label class="col-md-4 control-label">Age</label>
            <div class="col-md-8">
              <input class="form-control input-sm" name="age" placeholder="age" type="number">
            </div>
          </div>
          <div class="col-md-4">
            <label class="col-md-4 control-label">Nationality</label>
            <div class="col-md-8">
              <input class="form-control input-sm"name="nationality" placeholder="Nationality" type="text">
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-md-4">
            <label class="col-md-4 control-label">Religion</label>
            <div class="col-md-8">
              <input class="form-control input-sm" name="religion" placeholder="Religion" type="text">
            </div>
          </div>
          <div class="col-md-4">
            <label class="col-md-4 control-label">Contact</label>
            <div class="col-md-8">
              <input class="form-control input-sm" name="contact" placeholder="Contact Number" type="text">
            </div>
          </div>
          <div class="col-md-4">
            <label class="col-md-4 control-label">Email*</label>
            <div class="col-md-8">
              <input class="form-control input-sm" name="email" placeholder="Email address" type="email">
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-md-8">
            <label class="col-sm-2 control-label">Home</label>
            <div class="col-md-10">
              <input class="form-control input-sm" name="address" placeholder=
              "Home Address" type="text">
            </div>
          </div>
        <div class="col-md-4">
        <label class="col-md-4 control-label" >Course</label>
        <div class="col-md-8">
          <select class="form-control input-sm" name="course">
          <option></option>
   <?php
   $query=mysql_query("select * from course") or die(mysql_error());
   while ($result=mysql_fetch_array($query)) {?>
  <option value="<?php echo $result['code'];?>"><?php echo $result['code'];?></option>
   <?php
   }
   ?>
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
         <option></option>
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
         <option></option>
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
         <option></option>
      <option value="2016-2017">2016-2017</option>
      <option value="2017-2018">2017-2018</option>
      <option value="2018-2019">2018-2019</option>
      <option value="2019-2020">2019-2020</option>  
      </select> 
      </div>
      </div>
    </div>
    </div>
    <div class="form-group">
      <div class="row"> 
        <div class="col-md-4">
        <label class="col-md-4 control-label">Status</label>
        <div class="col-md-6">
         <select class="form-control input-sm" name="student_status">
     <option></option>
      <option value="irregular">Irregular</option>
      <option value="regular">Regular</option>  
      </select> 
        </div>
        </div>    
    </div>
    </div>
    </fieldset>
    <fieldset>
      <legend>Secondary Details</legend>
      <div class="form-group">
        <div class="row">
          <div class="col-md-6">
            <label class="col-md-4 control-label">Father</label>

            <div class="col-md-8">
              <input class="form-control input-sm" name="father" placeholder="Father" type="text">
            </div>
          </div>

          <div class="col-md-6">
            <label class="col-md-4 control-label">Occupation</label>
     <div class="col-md-8">
              <input class="form-control input-sm" name="fOccu" placeholder="Occupation" type="text">
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-md-6">
            <label class="col-md-4 control-label">Mother</label>
            <div class="col-md-8">
              <input class="form-control input-sm" name="mother" placeholder="Mother" type="text">
            </div>
          </div>
          <div class="col-md-6">
            <label class="col-md-4 control-label" >Occupation</label>
            <div class="col-md-8">
              <input class="form-control input-sm" name="mOccu" placeholder="Occupation" type="text">
            </div>
          </div>
        </div>
      </div>
<div class="form-group">
        <div class="row">
          <div class="col-md-6">
      <label class="col-md-4 control-label">Parents Address</label>
      <div class="col-md-8">
      <input class="form-control input-sm" name="parentsaddress" placeholder="Address" type="text">
           </div>
       </div>
       <div class="col-md-6">
       <label class="col-md-4 control-label">Parents Contact</label>
       <div class="col-md-8">
       <input class="form-control input-sm" name="parentscontact" placeholder="Contact" type="number">
       </div>
       </div>
       </div>
       </div>
      <div class="form-group">
        <div class="row">
          <div class="col-md-6">
            <label class="col-md-4 control-label" for="guardian">Guardian</label>
            <div class="col-md-8">
              <input class="form-control input-sm" id="guardian" name="guardian" placeholder="Guardian" type="text">
            </div>
          </div>

          <div class="col-md-6">
            <label class="col-md-4 control-label" for="guardianAdd">Address</label>

            <div class="col-md-8">
              <input class="form-control input-sm" id="guardianAdd" name="guardianadd" placeholder="Guardian Address" type="text">
            </div>
          </div>
        </div>
      </div>
    </fieldset>
    <fieldset>
      <legend>Other Details</legend>
      <div class="form-group">
        <div class="row">
          <div class="col-md-6">
            <label class="col-md-4 control-label" for="boarding">Requirements</label>

            <div class="col-md-8">
              <div class="checkbox">
                <label><input name="nso" type="checkbox" value="yes">NSO</label>
              </div>
              <div class="checkbox">
                <label><input name="diploma" type="checkbox" value="yes">Diploma</label>
              </div>
              <div class="checkbox">
                <label><input name="form" type="checkbox" value="yes"> Form 137</label>
              </div>
              <div class="checkbox">
                <label><input name="certificate" type="checkbox" value="yes"> Certificate of Transfer</label>
              </div>
            </div>
          </div>
        </div>
      </div>
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
          <button class="btn btn-info" name="submit" type="submit"><i class="fa fa-save"></i>&nbsp;Submit</button>
        </div>
      </div>
    </div>
  </form>
</div>
</div>
</body>
</html>
