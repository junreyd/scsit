<?php
include('include/navbar_instructor.php');
        include('../config/db.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>View Subject</title>
</head>
<?php $get_id = $_GET['instructor_id'];?>
<body class="container-fluid">
<br><br><br>
<div class="well">
<div class="alert alert-info"><i class="fa fa-users"></i>&nbsp;Instructors Load Table</div>
<?php
        $instructor_query=mysql_query("select * from instructor where instructor_id = '$get_id'")
        or die(mysql_error());
            $row = mysql_fetch_array($instructor_query);
            $fullname = $row['fullname'];
            ?>
            <div class="row" style="margin-left:10px;">
                <span><strong>Instructor Name:</strong><?php echo $row['fullname']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                </div>
                <br>
    <table class="table table-bordered">
<thead>
        <tr>
            <br><br>
            <th>#</th>
            <th>Subject Code</th>
            <th>Title</th>
            <th>Action</th>
        </tr>
        </thead>
<?php
        $a = 0;
        $query = mysql_query("select * from subject where instructor_id = '$get_id'") or die(mysql_error());
        while ($subject_row = mysql_fetch_array($query)) {
            $a++;
            $id=$subject_row['subject_id']; 
            ?>
            <tr>
                <td><?php echo $a; ?></td>
                <td><?php echo $subject_row['code']; ?></td>
                <td><?php echo $subject_row['title'] ?></td>
                <td><a href="view.php<?php echo '?subject_id=' . $id; ?>" id="<?php echo $id;?>" style="text-decoration: none;" >View Students</a></td>
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