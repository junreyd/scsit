<?php require_once('include/navbar_user.php'); 
  require_once('../modal/edit_profile.php'); ?> 

<!DOCTYPE html>
<html>
<head>
    <title>Course</title>
</head>
<body class="container-fluid">
<br><br><br>
<div class="well">
    <div class="alert alert-info"><i class="fa fa-user"></i>&nbsp;User Table</div>
    <table class="table table-bordered">
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#add_user"><i
                class="fa fa-plus"></i>&nbsp;Add User
        </button>
        <?php include('../modal/add_user.php'); ?>
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
        $query = mysql_query("select * from admin order by admin_id asc") or die(mysql_error());
        while ($admin = mysql_fetch_array($query)) {
            $a++;
            $id = $admin['admin_id']; ?>
            <tr>
                <td><?php echo $a; ?></td>
    <td><?php echo $admin['firstname']."".$admin['lastname']; ?></td>
    <td><?php echo $admin['username'];?></td>
<td><?php echo $admin['password'];?></td>
                <td><a href="#edit_user<?php echo $id; ?>" id="<?php echo $id; ?>" title="Edit" data-toggle="modal" style="text-decoration: none;">Edit</a></td>
              <?php include('../modal/edit_user.php'); ?>
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
