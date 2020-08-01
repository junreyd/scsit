<?php require_once('include/navbar_course.php'); 
 require_once('../modal/edit_profile.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <title>Course</title>
</head>
<body class="container-fluid">
<br><br><br>
<div class="well">
    <div class="alert alert-info"><i class="fa fa-graduation-cap"></i>&nbsp;Course Table</div>
    <table class="table table-bordered">
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#add_course"><i
                class="fa fa-plus"></i>&nbsp;Add Course
        </button>
        <?php include('../modal/add_course.php'); ?>
        <thead>
        <tr>
            <br><br>
            <th>#</th>
            <th>Code</th>
            <th>Course Title</th>
            <th>Action</th>
        </tr>
        </thead>
        <?php
        $a = 0;
        $query = mysql_query("select * from course order by course_id asc") or die(mysql_error());
        while ($course = mysql_fetch_array($query)) {
            $a++;
            $id = $course['course_id']; ?>
            <tr>
                <td><?php echo $a; ?></td>
                <td><?php echo $course['code']; ?></td>
                <td><?php echo $course['title'] ?></td>
                <td><a href="#edit_course<?php echo $id; ?>" id="<?php echo $id; ?>" title="Edit" data-toggle="modal" style="text-decoration: none;">Edit</a></td>
                <?php include('../modal/edit_course.php'); ?>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
</body>
</html>
<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.js"></script>	
