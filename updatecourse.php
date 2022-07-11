<!DOCTYPE HTML>
<html>
<head>
    <title>Update a Student</title>
 
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
 
</head>
<body>
 
    <!-- container -->
    <div class="container">
 
        <div class="page-header">
            <h1>Update Student</h1>
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
include 'conncourse.php';

$courseid = $_GET['courseid'];
$result = mysqli_query($conn, "select * from course where course_id=$courseid");

$row = mysqli_fetch_array($result);
echo "<form action=update_processcourse.php?courseid=$row[0] method=post>";
echo "Course ID: <input type=text name=courseid value=$row[0] readonly><br>";
echo "Course Code: <input type=text name=coursecode value=$row[1]><br>";
echo "Course Name: <input type=text name=coursename value=$row[2]><br>";
echo "<input type=submit value=Update>";
mysqli_free_result($result);
mysqli_close($conn);
?>