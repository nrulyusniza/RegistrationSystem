<!DOCTYPE HTML>
<html>
<head>
    <title>View Admin</title>
 
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
 
    <!-- custom css -->
    <style>
    .m-r-0.5em{ margin-right:0.5em; }
    .m-b-1em{ margin-bottom:1em; }
    .m-l-1em{ margin-left:1em; }
    .mt0{ margin-top:1; }
    </style>
 
</head>
<body>
 
    <!-- container -->
    <div class="container">
 
        <div class="page-header">
            <h1>View Admin</h1>
        </div>
 
        <!-- PHP code to read records will be here -->
 
    </div> <!-- end .container -->
 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
<!-- confirm delete record will be here -->
 
</body>
</html>

<?php
include 'connadmin.php';

$adminid = $_GET['adminid'];
$result = mysqli_query($conn, "select * from admin where admin_id=$adminid");

$row = mysqli_fetch_array($result);
echo "Admin ID: $row[0]<br>";
echo "Admin Name: $row[1]<br>";
echo "Email: $row[2]<br>";
echo "Password: $row[3]<br>";

mysqli_free_result($result);
mysqli_close($conn);
?>