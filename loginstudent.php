<?php require_once('header.php'); 
?>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-light mt-5">
                    <div class="card-title bg-primary text-white mt-5">
                        <h3 class="text-center py-2">Student Login Details</h3>
                    </div>

                    <?php
                    
                        if(isset($_GET['empty']))
                        {
                            $Message=$_GET['empty'];
                            $Message= "Please Fill in the Blanks";
                    ?>
                        <div class="alert alert-danger text-center"><?php echo $Message ?></div>                            
                    <?php                            
                        }
                    
                    ?>


                      <?php
                    
                        if(isset($_GET['U_Invalid']))
                        {
                            $Message=$_GET['U_Invalid'];
                            $Message= "Invalid User";
                    ?>
                        <div class="alert alert-danger text-center"><?php echo $Message ?></div>                            
                    <?php                            
                        }
                    
                    ?>


                        <?php
                    
                        if(isset($_GET['P_Invalid']))
                        {
                            $Message=$_GET['P_Invalid'];
                            $Message= "Invalid Password";
                    ?>
                        <div class="alert alert-danger text-center"><?php echo $Message ?></div>                            
                    <?php                            
                        }
                    
                    ?>

                    <div class="card-body">

                        <form action="loginstudent.php" method="POST" >
                            <input type="text" name="studentid" placeholder="Student ID" class="form-control my-2">
                            <input type="password" name="studentpassword" placeholder="Password" class="form-control mb-3">
                            <button class="btn btn-success" name="login" class="pt-3">Log In</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once('footer.php'); 
?>


<?php
//session_start();
$message="";
if(count($_POST)>0) {
	include 'connstudent.php';
	$result = mysqli_query($conn,"SELECT * FROM student 
	WHERE student_id='" . $_POST["studentid"] . "' and 
	student_password = '". $_POST["studentpassword"]."'");
	$row = mysqli_fetch_array($result);
	if(is_array($row)) {
		$_SESSION["student_id"] = $row['student_id'];
		$_SESSION["student_name"] = $row['student_name'];
	} else {
		$message = "Invalid Username or Password!";
	}
}
if(isset($_SESSION["student_id"])) {
	header("Location:indexstudent.php");
}
?>
<html>
<body>
<!--
<form method="post" action="" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3 align="center">Enter Student Login Details</h3>
Student ID:<br>
<input type="text" name="studentid"><br>
Password:<br>
<input type="password" name="studentpassword"><br><br>
<input type="submit" name="submit" value="Submit">
<input type="reset">
</form>
-->
</body>
</html>