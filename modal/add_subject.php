<?php include('../config/db.php');
if (isset($_POST['add_sub'])) {
    $year = $_POST['level'];
    $semester = $_POST['semester'];
    $code = $_POST['code'];
    $title = $_POST['subject'];
    $unit = $_POST['unit'];
    $pre_requisite = $_POST['pre'];
    $course_id = $_POST['course'];
    $instructor_id=$_POST['instructor'];
    $query = mysql_query("select * from subject where year='$year' and semester='$semester' and code='$code' and title='$title' and unit='$unit' and pre_requisite='$pre_requisite' and course_id='$course_id'") or die(mysql_error());
    $count = mysql_num_rows($query);
    if ($count > 0) {
        ?>
        <script type="text/javascript">
            alert('Subject already exist');
            window.location = "subjects.php";
        </script>
    <?php } else {
        mysql_query("insert into subject(`year`,`semester`,`code`,`title`,`unit`,`pre_requisite`,`course_id`,`instructor_id`)values('$year','$semester','$code','$title','$unit','$pre_requisite','$course_id','$instructor_id')") ?>
        <script type="text/javascript">
            alert('Successfully added');
            window.location = "subjects.php";
        </script>
        <?php
    }
}
?>
<div class="modal fade" id="add_subject">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-md-12">
                    <div class="alert alert-info alert-info">
                        <i class="fa fa-book"></i>&nbsp;Add Subject
                    </div>
                </div>
                <div class="modal-body" style="padding-left:75px;">
                    <form action="" method="post">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4 control-label">Year Level</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="level">
                                        <option></option>
                                        <option value="First year">First year</option>
                                        <option value="Second year">Second year</option>
                                        <option value="Third year">Third year</option>
                                        <option value="Fourth year">Fourth year</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4 control-label">Semester</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="semester">
                                        <option></option>
                                        <option value="first">First</option>
                                        <option value="second">Second</option>
                                        <option value="summer">Summer</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4 control-label">Code</label>
                                <div class="col-md-6">
                                    <input class="form-control input-md" name="code" placeholder="Code" type="text"
                                           required/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4 control-label">Subject Title</label>
                                <div class="col-md-6">
                                    <input class="form-control input-md" name="subject" placeholder="Subject Title"
                                           type="text" required/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4 control-label">Unit</label>
                                <div class="col-md-6">
                                    <input class="form-control input-md" name="unit" placeholder+"Unit" type="text"
                                    required/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4 control-label">Pre Requisite(s)</label>
                                <div class="col-md-6">
                                    <select name="pre" class="form-control">
                                        <option></option>
                                       <?php
        $subject = mysql_query("select * from subject") or die(mysql_error());
        while ($row = mysql_fetch_array($subject)) {
                                            ?>
<option value="<?php echo $row['subject_id']; ?>"><?php echo $row['code']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4 control-label">Course</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="course">
                                    <option></option>
                                 <?php
    $course_query = mysql_query("select * from course") or die(mysql_error());
            while ($course_row = mysql_fetch_array($course_query)) {
                                            ?>
        <option value="<?php echo $course_row['course_id']; ?>"><?php echo $course_row['code']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
               <div class="form-group">
                <div class="row">
                <label class="col-md-4 control-label">Instructor</label>
                <div class="col-md-6">
                <select name="instructor" class="form-control">
                <option></option>
                 <?php 
                $instructor_query=mysql_query("select * from instructor") or die(mysql_error());
                while($instructor=mysql_fetch_array($instructor_query)){
                    ?>
        <option value="<?php echo $instructor['instructor_id'];?>"><?php echo $instructor['fullname'];?>
        </option>
                    
                <?php   }?>
                </select>
                </div>
                </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="add_sub" class="btn btn-info"/>
                    <i class="fa fa-save"></i> Save and Add</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i>
                        Close
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

