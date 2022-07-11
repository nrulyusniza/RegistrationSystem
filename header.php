<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <title>Senorita College Registration System</title>
</head>
<body style="background:#CCC;">
 
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand"><h3>Senorita College Registration System</h3></a>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar ml-auto">

               
                <?php 

                if(isset($_SESSION['U_D']))
                {
                    echo    '<form action="logoutadmin.php" method="POST">
                                <li class="nav-item"><button type="submit" name="logout" class="btn btn-outline-light">Logout</button></li>
                            </form>';
                }
                else
                {
                    echo '  <li class="nav-item"><a href="index.php" class="btn btn-outline-light">Log In</a></li>
                    <li class="nav-item"><a href="signupindex.php" class="btn btn-outline-light ml-3">Sign Up</a></li>';
                }

                ?>
                  
                </ul>
            </div>                

        </div>
    </nav>
</body>


<!--
<body>
 
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand"><h3>Login System</h3></a>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar ml-auto">
                    <li class="nav-item"><a href="logindesign.php" class="btn btn-outline-light">Login</a></li>
                    <li class="nav-item"><a href="signupdesign.php" class="btn btn-outline-light ml-3">Sign Up</a></li>';
                </ul>
            </div>                
        </div>
    </nav>
</body>
-->