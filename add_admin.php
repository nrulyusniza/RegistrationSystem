<?php
include 'connadmin.php';

$sql="insert into admin (admin_name, admin_email, admin_password) values
('$_POST[adminname]', '$_POST[adminemail]', '$_POST[adminpassword]')";
//echo $sql;

if(!mysqli_query($conn, $sql)){
    die('Error: '.mysqli_error($conn));
}
echo "1 record of admin successfully added...<br>";
echo "<a href=display_tableadmin.php>Display all</a>";
echo "<a href=detailsadmin.php>Display details</a>";
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <title>View Details</title>
</head>
<body>
<div class="card">
  <div class="card-header">
      Your Record Has Been Successfully Saved.
  </div>
  <div class="card-body">
    <h5 class="card-title">Admin ID: $admin_id</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>

</body>
</html>