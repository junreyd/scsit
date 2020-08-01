<?php require_once('include/navbar_inquire.php');
require_once('../modal/edit_profile.php');?>

<!DOCTYPE html>
<html>
<head>
    <title>Inquiry</title>
</head>
<body class="container-fluid">
<br><br><br>
<div class="well">
    <div class="alert alert-info"><i class="fa fa-folder-open"></i>&nbsp;Inquiry Table</div>
    <table class="table table-bordered">
    <thead>
    <tr>
    <th>#</th>
    <th>Name</th>
    <th>Year level</th>
    <th>Semester</th>
    <th>Status</th>
    <th>Action</th>
    </tr>
    </thead>
    <?php 
    $a=0;
    $query=mysql_query("select * from inquiry") or die(mysql_error());
    while ($result=mysql_fetch_array($query)) {
    	$a++;
    	$id=$result['student_no'];?>
    	<tr>
    	<td><?php echo $a;?></td>
    	<td><?php echo $result['name'];?></td>
    	<td><?php echo $result['year_level'];?></td>
    	<td><?php echo $result['semester'];?></td>
        <td><?php echo $result['status'];?></td>
    	<td><a title="view Grades" id="<?php echo $id; ?>"
                       href="view_grade.php<?php echo '?student_id=' . $id; ?>" style="text-decoration: none;">Send
                        Grade</a></td>
    	</tr>
    	<?php
    	 }
    	?>
 </table>
 </div>
 </body>
 </html>