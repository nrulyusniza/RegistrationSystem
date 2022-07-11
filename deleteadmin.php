<?php
include 'connadmin.php';

$adminid = $_GET['adminid'];
$delete = "delete from admin where admin_id=$adminid";

if(!mysqli_query($conn, $delete)) {
    die ('Error: '.mysqli_error($conn));
}

echo "Successfully deleted.<br>";
echo "<a href=display_tableadmin.php>Back to table</a";

mysqli_close($conn);
?>