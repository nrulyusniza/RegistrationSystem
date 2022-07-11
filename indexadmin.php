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

.button1, .button2, .button3, .button4, .button5, .button6, .button8, {
  background-color: #4CAF50;
  color: white;
  border: 2px solid #4CAF50;
  border-radius: 8px;
}

.button1:hover, .button2:hover, .button3:hover, .button4:hover, .button5:hover, .button6:hover .button8:hover {
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
                        <h3 class="text-center py-2">Welcome Administrator</h3>
                    </div>
                    <div class="card-body">

                    <?php
                    if($_SESSION["admin_name"]) { ?>
                    Hi <?php echo $_SESSION["admin_name"]; ?>.
                    <br>
                    <br>
                    <?php
                    } else {
                    header("Location: loginadmin.php");
                    }
                    ?>

                    <div class="center">
                    <a href="get_infoadmin.php"><button class="button button1">Add New Administrator</button></a>
                    <a href="display_tableadmin.php"><button class="button button2">View All Administrator</button></a>

                    <a href="get_infostudent.php"><button class="button button3">Add New Student</button></a>
                    <a href="display_tablestudent.php"><button class="button button4">View All Student</button></a>

                    <a href="get_infocourse.php"><button class="button button5">Add New Course</button></a>
                    <a href="display_tablecourse.php"><button class="button button6">View All Course</button></a>

                    <a href="detailsregistration.php"><button class="button button8">View Registration Details</button></a>

                    <a href="logoutadmin.php"><button class="button button7">Log Out</button></a>
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
<title>Admin Login</title>
</head>
<body>
<?php
/*if($_SESSION["admin_name"]) { ?>
    Hi <?php echo $_SESSION["admin_name"]; ?>.
    <a href="logoutadmin.php" title="Logout">Logout</a><br><br>
    <a href="get_infoadmin.php" title="Add">Add new admin</a><br>
    <a href="display_tableadmin.php" title="Display">Display all admins</a><br>
    <?php
} else {
    header("Location: loginadmin.php");
}*/
?>
</body>
</html>
-->