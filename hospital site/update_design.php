<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <style>
        body
        {
            background-image: url('images/bg.webp');
            background-size: cover;
            background-repeat: no-repeat;
        }
        .sing_upouterbox
        {
            color: white;
            font-size: 20px;
            display: flex;
            flex-wrap: wrap;
            margin: auto;
            justify-content: space-around;
            background-color: rgb(26, 140, 247);
            width: 70%;
        }
        .su_item input
        {
            border: none;
            width: 300px;
            height: 43px;
        }
        .si_item input 
        {
            border: none;
            width: 300px;
            height: 43px;
        }
        .signup {
            width: 70%;
            margin: auto;
            text-align: center;
            background-color: rgb(26, 140, 247);
            ;
        }

        .signup input {
            padding-top: 15px;
            padding-bottom: 15px;
            padding-left: 25px;
            padding-right: 25px;
            margin-top: 25px;
            margin-bottom: 20px;
            color: white;
            font-size: 20px;
            border: none;
            background-color: mediumaquamarine;
        }
        .signuptxt {
            text-align: center;
            color: rgb(26, 140, 247);
        }
        @media (max-width:470px)
        {
            .sing_upouterbox
            {
                font-size: 15px;
            }
            .su_item input, select
            {
                width: 100%;
                height: 25px;
            }
            .signup input
            {
                padding: 10px;
            }
        }
        <?php
        include ('connect.php');
        $id=$_GET['id'];
        $sql="SELECT * FROM signup WHERE id='$id'";
        $data=$conn->query($sql);
        $row=$data->fetch_assoc();
        ?>
    </style>
</head>
<body>
    <h1 class="signuptxt">Update patient Record</h1>
    <form action="" method='get'>
        <div class="sing_upouterbox">
        <div class="signupcontainer_l">
            <div class="su_item">
                <p>Email</p>
                <input type="email" name="suemail" value="<?php echo $row['email'] ?>" id="">
            </div>
            <div class="su_item">
                <p>Password</p>
                <input type="password" name="supassword" id="" value="<?php echo $row['password'] ?>">
            </div>
            <div class="su_item">
                <p>Confirm Password</p>
                <input type="password" name="cpassword" id="" value="<?php echo $row['password'] ?>">
            </div> 
        </div>
        <div class="signupcontainer_r">
            <div class="su_item">
                <p>First Name</p>
                <input type="text" name="fname" id="" value="<?php echo $row['firstname'] ?>">
            </div>
            <div class="su_item">
                <p>Last Name</p>
                <input type="text" name="lname" id="" value="<?php echo $row['lastname'] ?>">
            </div>
            <div class="su_item">
                <p>Date of Birth</p>
                <input type="date" name="dob" id="" value="<?php echo $row['dob'] ?>">
            </div>
            
        </div>
        </div>
        <div class="signup">
            <input type="submit" value="Update" name="signup">
        </div>
    </form>

</body>
</html>
<?php
// include('connect.php');
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
    $sql="UPDATE signup SET email='$email',password='$password',firstname='$fname',lastname='$lname',dob='$dob'";
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

}
?>