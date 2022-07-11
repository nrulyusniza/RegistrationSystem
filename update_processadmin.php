<?php
include 'connadmin.php';

$adminid = $_GET['adminid'];
$update = "update admin set admin_name='$_POST[adminname]', 
admin_email='$_POST[adminemail]', 
admin_password='$_POST[adminpassword]'
where admin_id=$adminid";

if(!mysqli_query($conn, $update)) {
    die ('Error: '.mysqli_error($conn));
}

$result = mysqli_query($conn, "select * from admin where admin_id=$adminid");
$row = mysqli_fetch_array($result);
echo "Admin ID: $row[0]<br>";
echo "Admin name: $row[1]<br>";
echo "Email: $row[2]<br>";
echo "Password: $row[3]<br>";
echo "<a href=display_tableadmin.php>Back to table</a>";

mysqli_free_result($result);
mysqli_close($conn);
?>