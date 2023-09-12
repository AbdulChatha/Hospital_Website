<?php
include('connect.php');
$email="";
$password="";
$fname="";
$lname="";
$dob="";
if (isset($_GET['signup']))
{
    $email=$_GET['suemail'];
    $password=$_GET['supassword'];
    $fname=$_GET['fname'];
    $lname=$_GET['lname'];
    $dob=$_GET['dob'];

}
$sql = "INSERT INTO signup(email,password,firstname, lastname,dob) VALUES ('$email', '$password', '$fname', '$lname','$dob')";
if($conn->query($sql)=== TRUE)
{
	echo " record inserted";  

}
else
{
	echo " Error".$conn->error;
}

?>