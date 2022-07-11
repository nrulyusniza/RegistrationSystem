<?php
include 'connstudent.php';

$sql="insert into student (student_name, student_email, student_password, student_phoneno) values
('$_POST[studentname]', '$_POST[studentemail]', '$_POST[studentpassword]', '$_POST[studentphoneno]')";
echo $sql;
if(!mysqli_query($conn, $sql)){
    die('Error: '.mysqli_error($conn));
}
echo "1 record of student successfully added...<br>";
echo "<a href=display_tablestudent.php>Display all</a>";

?>