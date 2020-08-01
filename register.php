<?php include("config/bootstrap.php") ?>
<?php include("config/db.php") ?>

<?php
if (isset($_POST['submit'])) {
$firstname = $_POST['fName'];
$middlename = $_POST['mName'];
$lastname = $_POST['lName'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$birthday=$_POST['bdate'];
$birthplace = $_POST['bplace'];
$address = $_POST['address'];
$civilstatus = $_POST['civilstatus'];
$nationality = $_POST['nationality'];
$religion = $_POST['religion'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$year_level = $_POST['year_level'];
$course = $_POST['course'];
$semester = $_POST['semester'];
$schoolyear = $_POST['schoolyear'];
$status = 'pending';
$student_id = $_SESSION['auth']['student']['student_id'];
$student_no = $_SESSION['auth']['student']['student_no'];

$query=mysql_query("INSERT into enrollment (`student_no`,`student_id`,`firstname`,`middlename`,`lastname`,`age`,`gender`,`birthplace`,`birthday`,`address`,`status`,`civilstatus`,`nationality`,`religion`,`email`,`contact`,`year_level`,`semester`,`schoolyear`,`course`) VALUES ('$student_no','$student_id','$firstname','$middlename','$lastname','$age','$gender','$birthplace','$birthday','$address','$status','$civilstatus','$nationality','$religion','$email','$contact','$year_level','$semester','$schoolyear','$course')")or die(mysql_error());
?>
    <script>
        alert('Application successfully submitted');
        window.location = "register.php?message='Application successfully submitted'";
    </script>
<?php

}
?>
<?php
$pageTitle = "Registration";
include("includes/header.php") ?>
<div class="blog">
    <div class="container">
        <?php if($_GET['message']){ ?>
        <div class="alert alert-success">
            <?php echo $_GET['message']; ?>
        </div>
        <?php } ?>
        <h3 class="tittle-agileits-w3layouts">Fill up Form</h3>
        <form action="" method="post">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label class="col-md-4 control-label">Student #:</label>
                        <div class="col-md-8">
                            <input class="form-control input-sm" name="student" placeholder="Student #" type="text"
                                   readonly>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label class="col-md-4 control-label">LastName:</label>
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
                                <input class="form-control" size="11" type="date" name="bdate" value="">
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
                            <input class="form-control input-sm" name="nationality" placeholder="Nationality"
                                   type="text">
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
                            <input class="form-control input-sm" name="contact" placeholder="Contact Number"
                                   type="text">
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
                        <label class="col-md-4 control-label">Course</label>
                        <div class="col-md-8">
                            <select class="form-control input-sm" name="course">
                                <option></option>
        <?php $course_query = mysql_query( "select * from course") or die(mysql_error());
            while ($result = mysql_fetch_array($course_query)) {
                ?>
  <option value="<?php echo $result['code'];?>"><?php echo $result['code'];?></option> 
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
                                <option></option>
                                <option value="first year">1st yr</option>
                                <option value="second year">2nd yr</option>
                                <option value="third year">3rd yr</option>
                                <option value="fourth year">4th yr</option>
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
                        <div class="col-md-6">
                            <div class="col-md-6"></div>
                        </div>
                        <div class="col-md-6" style="text-align: right">

                            <button class="btn btn-success" name="submit" type="submit"><i class="fa fa-check"></i>&nbsp;Submit
                            </button>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</div>
<?php include("includes/footer.php") ?>