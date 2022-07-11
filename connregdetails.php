<?php
define('db_registrationdetail','root');
define('db_password','');
define('db_host','localhost');
define('db_name','registrationsystem');

$conn = mysqli_connect (db_host, db_registrationdetail, db_password, db_name);

if (mysqli_connect_error())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>