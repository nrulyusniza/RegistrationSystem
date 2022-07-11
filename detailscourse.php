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
            <h1>View Course</h1>
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
include 'conncourse.php';

$courseid = $_GET['courseid'];
$result = mysqli_query($conn, "select * from course where course_id=$courseid");

$row = mysqli_fetch_array($result);
echo "Course ID: $row[0]<br>";
echo "Course Code: $row[1]<br>";
echo "Course Name: $row[2]<br>";

mysqli_free_result($result);
mysqli_close($conn);
?>