<!DOCTYPE HTML>
<html>
<head>
    <title>Update a Admin</title>
 
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
 
</head>
<body>
 
    <!-- container -->
    <div class="container">
 
        <div class="page-header">
            <h1>Update Admin</h1>
        </div>
 
        <!-- PHP read record by ID will be here -->
 
        <!-- HTML form to update record will be here -->
 
    </div> <!-- end .container -->
 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</body>
</html>

<?php
include 'connadmin.php';

$adminid = $_GET['adminid'];
$result = mysqli_query($conn, "select * from admin where admin_id=$adminid");

$row = mysqli_fetch_array($result);
echo "<form action=update_processadmin.php?adminid=$row[0] method=post>";
echo "Admin ID: <input type=text name=adminid value=$row[0] readonly><br>";
echo "Admin Name: <input type=text name=adminname value=$row[1]><br>";
echo "Email: <input type=text name=adminemail value=$row[2]><br>";
echo "Password: <input type=text name=adminpassword value=$row[3]><br>";
echo "<input type=submit value=Update>";
mysqli_free_result($result);
mysqli_close($conn);
?>