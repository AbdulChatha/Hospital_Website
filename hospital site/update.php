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
$sql="UPDATE signup SET email='$email',password='$password',firstname='$fname',lastname='$lname',dob='$dob' WHERE id= '$id'";
if($conn->query($sql)=== TRUE)
{
	echo " record updated";
    ?>
    <meta http-equiv = "refresh" content = "0; url = http://localhost/hospital%20site/admin.php" />
    <?php

}
else
{
	echo " Error".$conn->error;
}
?>