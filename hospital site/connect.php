<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error)
{
	die("connection error ". $conn->connect_error);

}
else{
echo " connected successfully with db <br>";
}



?>