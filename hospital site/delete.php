<?php
include "connect.php";
$id=$_GET['id'];
$sql="DELETE FROM signup WHERE id = '$id'";
// $sql="UPDATE signup SET email='$email',password='$password',firstname='$fname',lastname='$lname',dob='$dob' WHERE id='$id'";
$data=$conn->query($sql);
?>
 <meta http-equiv = "refresh" content = "0; url = http://localhost/hospital%20site/admin.php" />