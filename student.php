<?php include("config/bootstrap.php") ?> 
<?php include("config/db.php") ?> 

<?php 
$pageTitle = "Profile";

include("includes/header.php");

$student_info = $_SESSION['auth']['student'];

?>
<div class="blog">
<div class="container">
<h3 class="tittle-agileits-w3layouts">Student Info</h3>
    <table class="table">
        <thead>
        <tr>
            <th>Fullname</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $student_info['fullname'] ?></td>
            <td><?php echo $student_info['email'] ?></td>
        </tr>
        </tbody>
    </table>
</div>
</div>
<?php include("includes/footer.php") ?> 