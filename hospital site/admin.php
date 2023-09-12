<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        table 
        {
            border-collapse: collapse;
            width:90%;
            text-align:center;
            margin:auto;
            border-color:gainsboro;
            box-shadow: 0px 0px 40px gainsboro;
        }
        th,td,tr
        {

            border-color:gainsboro;
            height:40px;
        }
        th 
        {
            color:white;
            background-color:rgb(26, 140, 247);
        }
        .ap
        {
            color:rgb(26, 140, 247);
            text-align:center;
           
        }
        a 
        {
            text-decoration:none;
            color:white;
        }
        #updt
        {
            background-color:green;
            border:none;
            padding:5px;
        }
        #del 
        {
            margin:5px;
            background-color:red;
            border:none;
            padding:5px;
        }
    </style>
</head>
<body>
    <div class="ap"><h2>USERS SIGN UP DATA</h2></div>
</body>
</html>
<?php 
include ('connect.php');
$sql="SELECT * FROM signup";
$result=$conn->query($sql);
if ($result->num_rows>0)
{
    echo "<table border='1'><tr><th>Id</th><th>Email</th><th>Password</th><th>First Name</th><th>Last Name</th><th>DOB</th><th>Action</th></tr>";
    while ($row=$result->fetch_assoc())
    {
        echo "<tr><td>$row[id]</td><td>$row[email]</td><td>$row[password]</td><td>$row[firstname]</td><td>$row[lastname]</td><td>$row[dob]</td><td><button id='updt'><a href='update_design.php?id=$row[id]'>update</a></button ><button id='del'><a href='delete.php?id=$row[id]'>delete</a></button></td></tr>";
    }
    echo "</table>";
}

?>
