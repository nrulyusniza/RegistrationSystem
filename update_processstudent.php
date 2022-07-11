<?php
include 'connstudent.php';

$studentid = $_GET['studentid'];
$update = "update student set student_name='$_POST[studentname]', 
student_email='$_POST[studentemail]', 
student_password='$_POST[studentpassword]',
student_phoneno='$_POST[studentphoneno]'  
where student_id=$studentid";

if(!mysqli_query($conn, $update)) {
    die ('Error: '.mysqli_error($conn));
}

$result = mysqli_query($conn, "select * from student where student_id=$studentid");
$row = mysqli_fetch_array($result);
echo "Student ID: $row[0]<br>";
echo "Student Name: $row[1]<br>";
echo "Email: $row[2]<br>";
echo "Password: $row[3]<br>";
echo "Phone number: $row[4]<br>";
echo "<a href=display_tablestudent.php>Back to table</a>";

mysqli_free_result($result);
mysqli_close($conn);
?>