<?php require_once('include/navbar_student.php');
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <title>Student</title>
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
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
<body class="container-fluid"><?php require_once('../modal/edit_profile.php'); ?>
<br><br><br>
<div class="well">
    <div class="alert alert-info"><i class="fa fa-users"></i>&nbsp;Students Table</div>
    <label><h4>FILTER by:</h4></label>
    <form method="POST" class="form-inline" action="sort_student.php">
        Course:
        <select name="course" class="form-control" required>
            <option></option>
            <?php $course_query = mysql_query( "select * from course") or die(mysql_error());
            while ($course_row = mysql_fetch_array($course_query)) {

                ?>
                <option><?php echo $course_row['code']; ?></option>
            <?php } ?></select>
        &nbsp;&nbsp;&nbsp;&nbsp;Year Level:
        <select name="year_level" class="form-control" required>
            <option></option>
            <option>First Year</option>
            <option>Second Year</option>
            <option>Third Year</option>
            <option>Fourth Year</option>
        </select>
        &nbsp;&nbsp;&nbsp;&nbsp;Semester:
        <select name="semester" class="form-control" required>
            <option></option>
            <option>First</option>
            <option>Second</option>
            <option>Summer</option>
        </select>
        &nbsp;&nbsp;&nbsp;&nbsp;Schoolyear:
        <select name="schoolyear" class="form-control" required>
            <option></option>
            <option>2016-2017</option>
            <option>2017-2018</option>
            <option>2018-2019</option>
            <option>2019-2020</option>
        </select>
        <button type="submit" name="sort_student" class="btn btn-default"><i class="glyphicon glyphicon-check"></i>&nbsp;Submit
        </button>
    </form>

    <br>
    <div class="row-fluid">
        <input style="color:red; float:right; width:300px;" type="text" id="myInput" onKeyUp="myFunction()"
               placeholder="Search for names.." class="form-control">
    </div>
    <table class="table  table-bordered" id="myTable">

        <a href="add_student.php" class="btn btn-default"><i class="fa fa-plus"></i>&nbsp;Add Student</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="accept_student.php" class="btn btn-default"><i class="glyphicon glyphicon-plus-sign"></i>&nbsp;Accept
            Student</a>

        <thead>
        <br><br>
        <tr>
            <th>#</th>
            <th>Student_No</th>
            <th>Name</th>
            <th>Course</th>
            <th>Year Level</th>
            <th>Semester</th>
            <th>School year</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $a = 0;// where status='enrolled' order by student_id asc
        $student_query = mysql_query("select * from enrollment where status='enrolled' order by student_id asc") or die(mysql_error());
        while ($row = mysql_fetch_array($student_query)) {

            $a++;
            $id = $row['student_id']; ?>
            <tr>
                <td><?php echo $a; ?></td>
                <td><?php echo $row['student_no']; ?></td>
                <td><?php echo $row['firstname'] . " " . $row['middlename'] . " " . $row['lastname']; ?></td>
                <td><?php echo $row['course']; ?></td>
                <td><?php echo $row['year_level']; ?></td>
                <td><?php echo $row['semester']; ?></td>
                <td><?php echo $row['schoolyear']; ?></td>
                <td><a title="view Grades" id="<?php echo $id; ?>"
                       href="view_grade.php<?php echo '?student_id=' . $id; ?>" style="text-decoration: none;">View
                        Grade</a>||
                    <a title="Edit" id="<?php echo $id; ?>" href="edit_student.php<?php echo '?student_id=' . $id; ?>"
                       style="text-decoration: none;">Edit</a></td>
            </tr>

            <?php
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>

