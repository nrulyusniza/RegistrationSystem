<!DOCTYPE HTML>
<html>
<head>
    <title>List of all Courses</title>
 
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
            <h1>List of all Courses</h1>
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
include 'conncourse.php';

$display = "<table class='table table-hover table-responsive table-bordered'>
<tr>
<th>Course ID</th>
<th>Course Code</th>
<th>Course Name</th>
<th>Action</th>
</tr>";

$result = mysqli_query($conn, "select * from course");
while($row = mysqli_fetch_array($result)){
    $display .= "<tr><td>$row[0]</td>";
    $display .= "<td>$row[1]</td>";
    $display .= "<td>$row[2]</td>";
    $display .= "<td><a href='detailscourse.php?courseid=$row[0]' class='btn btn-info m-r-1em'>View</a>";
    $display .= "&nbsp;<a href='updatecourse.php?courseid=$row[0]' class='btn btn-primary m-r-1em'>Update</a>";
    $display .= "&nbsp;<a href=deletecourse.php?courseid=$row[0]' class='btn btn-danger'>Delete</a></td>";
    $display .= "</tr>";
}
$display .= "</table>";
$display .= "<td><a href='indexadmin.php?' class='btn btn-primary m-r-1em'>Back to Admin</a></td>";
echo $display;
mysqli_free_result($result);
mysqli_close($conn);
?>



<?php
/*include 'conncourse.php';

$display = "<table border='1'>
<tr>
<th>Course ID</th>
<th>Course Code</th>
<th>Course Name</th>
<th>Action</th>
</tr>";

$result = mysqli_query($conn, "select * from course");
while($row = mysqli_fetch_array($result)){
    $display .= "<tr><td>$row[0]</td>";
    $display .= "<td><a href=detailscourse.php?courseid=$row[0]>$row[1]</a></td>";
    $display .= "<td>$row[2]</td>";
    $display .= "<td><a href=updatecourse.php?courseid=$row[0]>Update</a>";
    $display .= "&nbsp;<a href=deletecourse.php?courseid=$row[0]>Delete</a></td>";
    $display .= "</tr>";
}
$display .= "</table>";
echo $display;
mysqli_free_result($result);
mysqli_close($conn);
?>*/