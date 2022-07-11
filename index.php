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
}

.button1 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
  border-radius: 8px;
}

.button1:hover {
  background-color: #555555;
  color: white;
}

.button2 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
  border-radius: 8px;
}

.button2:hover {
  background-color: #555555;
  color: white;
}

.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;
}
</style>
</head>

<body>
<?php require_once('header.php'); 
?>
    <h4 class="display-4 text-center mt-5">Welcome to Senorita College Registration System</h4>

    <h6 class="display-6 text-center mt-5">Log In</h6>

    <div class="center">
    <a href="loginstudent.php"><button class="button button1">Student</button></a>
    <a href="loginadmin.php"><button class="button button2">Admin</button></a>
    </div>             
  

<?php require_once('footer.php'); 
?>
</body>
</html>