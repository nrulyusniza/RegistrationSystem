<?php require_once('header.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <title>Crud Operation</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2>Student Form</h2>
                    </div>
                    
                        <div class="card-body">
                            <form action="add_student.php" method="post">
                                <input type="text" name="studentname" placeholder="Name" class="form-control mb-2" required>
                                <input type="text" name="studentemail" placeholder="Email" class="form-control mb-2" required>
                                <input type="password" name="studentpassword" placeholder="Password" class="form-control mb-2" required>
                                <input type="text" name="studentphoneno" placeholder="Phone Number" class="form-control mb-2" required>
                        </div>
                    <div class="card-footer">
                            <button class="btn btn-success" name="btn_save">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



<!--
<html>
<body>
<form action="add_student.php" method = "post">
<p>Name     : <input type="text" name="studentname"></p>
<p>E-mail   : <input type="text" name="studentemail"></p>
<p>Password : <input type="password" name="studentpassword"></p>
<p>Phone No : <input type="text" name="studentphoneno"></p>
<p><input type="submit" value="Submit Data"></p>
</form>
</body>
</html>
-->