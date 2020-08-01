<?php include('../config/db.php');
include('include/navbar_instructor.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body class="container-fluid">
<br><br><br>
<div class="well">
    <div class="alert alert-info"><i class="fa fa-users"></i>&nbsp;Instructors Table</div>
    <table class="table table-bordered">
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#add_instructor"><i
                class="fa fa-plus"></i>&nbsp;Add Instructor
        </button>
        <br>
        <br>
        
 <?php include('../modal/add_instructor.php'); ?>
 
        <thead>
        <tr>
            <br><br>
            <th>#</th>
            <th>Fullname</th>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        </thead>
        <?php
        $a = 0;
        $query = mysql_query("select * from instructor order by fullname asc") or die(mysql_error());
        while ($instructor = mysql_fetch_array($query)) {
            $a++;
            $id = $instructor['instructor_id']; ?>
            <tr>
                <td><?php echo $a; ?></td>
                <td><?php echo $instructor['fullname']; ?></td>
                <td><?php echo $instructor['username']; ?></td>
                <td><?php echo $instructor['password']; ?></td>
                <td>
                <a href="instructorload.php<?php echo '?instructor_id=' . $id; ?>" title="Assign Subject" style="text-decoration: none;">Instructor load</a>&nbsp;||
                <a href="#edit_instructor<?php echo $id; ?>" id="<?php echo $id; ?>" title="Edit" data-toggle="modal"
                       style="text-decoration: none;">Edit</a></td>
                <?php include('../modal/edit_instructor.php'); ?>
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
