<!DOCTYPE HTML>
<html>
<head>
    <title>Senorita College Registration System</title>
 
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
 
</head>
<body>
 
    <!-- container -->
    <div class="container">
 
        <div class="page-header">
            <h1>View Student</h1>
        </div>
 
        <!-- PHP read one record will be here -->
 
        <!-- HTML read one record table will be here -->
 
    </div> <!-- end .container -->
 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</body>
</html>

<?php
include 'connstudent.php';

$studentid = $_GET['studentid'];
$result = mysqli_query($conn, "select * from student where student_id=$studentid");

$row = mysqli_fetch_array($result);
echo "Student ID: $row[0]<br>";
echo "Student Name: $row[1]<br>";
echo "Email: $row[2]<br>";
echo "Password: $row[3]<br>";
echo "Phone Number: $row[4]<br>";

mysqli_free_result($result);
mysqli_close($conn);
?>