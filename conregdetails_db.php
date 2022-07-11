<?php
define('db_registrationdetail','root');
define('db_password','');
define('db_host','localhost');
define('db_name','registrationsystem');

$conn = mysqli_connect (db_host, db_registrationdetail, db_password, db_name);
$result = mysqli_query($conn, "select * from registrationdetail");
while($row = mysqli_fetch_array($result)){
    foreach($row as $key=>$value){
        echo "$key = $value <br>\n";
    }
    echo "<br>";
}
mysqli_free_result($result);
mysqli_close($conn);
?>