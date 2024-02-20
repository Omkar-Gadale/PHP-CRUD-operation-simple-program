<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($servername,$username,$password,$dbname); 

if($mysqli)
{
    echo " ";
}
else
{
    echo "not ok";
}
?>