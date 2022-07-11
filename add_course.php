<?php
include 'conncourse.php';

$sql="insert into course (course_code, course_name) values
('$_POST[coursecode]', '$_POST[coursename]')";
echo $sql;
if(!mysqli_query($conn, $sql)){
    die('Error: '.mysqli_error($conn));
}
echo "1 record of course successfully added...<br>";
echo "<a href=display_tablecourse.php>Display all</a>";

?>

