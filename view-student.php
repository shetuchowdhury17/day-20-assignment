<?php
require_once 'vendor/autoload.php';
use App\classes\Student;
$message='';

$queryResult = Student::getAllStudentInfo();

?>
<hr/>
<a href="add-student.php">Add Student</a> ||
<a href="view-student.php">View Student</a>
<h1 style="color: green"><?php echo $message; ?></h1>
<hr/>
<table border="1" width="700">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Mobile Number</th>
        <th>Email Address</th>
        <th>Address</th>
    </tr>
    <?php while($student = mysqli_fetch_assoc($queryResult)) {?>
    <tr>
        <td><?php echo $student ['id']?></td>
        <td><?php echo $student ['first_name']?></td>
        <td><?php echo $student ['last_name']?></td>
        <td><?php echo $student ['mobile_number']?></td>
        <td><?php echo $student ['email_address']?></td>
        <td><?php echo $student ['address']?></td>
    </tr>
    <?php } ?>
</table>
