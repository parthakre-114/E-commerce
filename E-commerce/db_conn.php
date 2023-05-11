<?php

$servername= "localhost";

$username= "root";

$password = "";

$db_name = "shripad";

$conn = mysqli_connect($servername, $username, $password, $db_name);

if (!$conn ) {

    echo "Connection failed!";

}
else
   // echo "Success";
?>
