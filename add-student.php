<?php
require_once 'vendor/autoload.php';
use App\classes\Student;
$message='';
if (isset($_POST['btn']))
{
    $message = Student::saveStudentInfo($_POST);
}
?>
<hr/>
<a href="add-student.php">Add Student</a> ||
<a href="view-student.php">View Student</a>
<h1 style="color: green"><?php echo $message; ?></h1>
<hr/>
<form action="" method="post">
    <table>
        <tr>
            <th align="left">First Name</th>
            <td><input type="text" name="first_name"></td>
        </tr>

        <tr>
            <th align="left">Last Name</th>
            <td><input type="text" name="last_name"></td>
        </tr>

        <tr>
            <th align="left">Mobile Number</th>
            <td><input type="number" name="mobile_number"></td>
        </tr>

        <tr>
            <th align="left">Email Address</th>
            <td><input type="text" name="email_address"></td>
        </tr>

        <tr align="left">
            <th>Address</th>
            <td><input type="text" name="address"></td>
        </tr>

        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="SAVE"></td>
        </tr>
    </table>
</form>
