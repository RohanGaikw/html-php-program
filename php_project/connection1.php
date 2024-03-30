<?php
error_reporting(0);
$servername = "localhost:8081";
$username ="root";
$password = "Rohan@123";
$dbname  = "temp";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)

{

}
else
{
    echo"connection failed",mysqli_connect_error();
}
?>