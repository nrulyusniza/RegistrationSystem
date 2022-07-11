<html>
<head>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  width: 100%;
  border-radius: 8px;
}

.button1, .button2 {
  background-color: #4CAF50;
  color: white;
  border: 2px solid #4CAF50;
  border-radius: 8px;
}

.button1:hover, .button2:hover {
  background-color: white;
  color: black;
}

.button7 {
  background-color: #008CBA;
  color: white;
  border: 2px solid #008CBA;
  border-radius: 8px;
}

.button7:hover {
  background-color: #008CBA;
  color: white;
}

</style>
</head>

<body>

<?php require_once('header.php'); 
?>
   
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-light mt-5">
                    <div class="card-title bg-primary text-white mt-5">
                        <h3 class="text-center py-2">Welcome Student</h3>
                    </div>
                    <div class="card-body">

                    <?php
                    if($_SESSION["student_name"]) { ?>
                    Hi <?php echo $_SESSION["student_name"]; ?>.
                    <br>
                    <br>
                    <?php
                    } else {
                    header("Location: loginstudent.php");
                    }
                    ?>

                    <div class="center">
                    <a href="get_infostudent.php"><button class="button button1">Register</button></a>
                    <a href="profilestudent.php"><button class="button button2">Your Profile</button></a>

                    <a href="logoutstudent.php"><button class="button button7">Log Out</button></a>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once('footer.php'); 
?>
</body>
</html>




<!--

<html>
<head>
<title>Student Login</title>
</head>
<body>
<?php
/*if($_SESSION["student_name"]) { ?>
    Hi <?php echo $_SESSION["student_name"]; ?>.
    <a href="logoutstudent.php" title="Logout">Logout</a><br><br>
    <a href="get_infostudent.php" title="Add">Add new student</a><br>
    <a href="display_tablestudent.php" title="Display">Display all students</a><br>
    <?php
} else {
    header("Location: loginstudent.php");
}*/
?>
</body>
</html>
-->