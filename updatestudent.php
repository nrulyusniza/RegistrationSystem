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
include 'connstudent.php';

$studentid = $_GET['studentid'];
$result = mysqli_query($conn, "select * from student where student_id=$studentid");

$row = mysqli_fetch_array($result);
echo "<form action=update_processstudent.php?studentid=$row[0] method=post>";
echo "Student ID: <input type=text name=studentid value=$row[0] readonly><br>";
echo "Student Name: <input type=text name=studentname value=$row[1]><br>";
echo "Email: <input type=text name=studentemail value=$row[2]><br>";
echo "Password: <input type=text name=studentpassword value=$row[3]><br>";
echo "Phone Number: <input type=text name=studentphoneno value=$row[4]><br>";
echo "<input type=submit value=Update>";
mysqli_free_result($result);
mysqli_close($conn);
?>