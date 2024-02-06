<?php 
session_start();
include 'connection.php';

$Email_Id=$_POST['Email_Id'];
$Password=$_POST['Password'];

$sql="SELECT Email_Id, PASSWORD FROM `registration` WHERE Email_Id='$Email_Id' and Password='$Password'";

$ResultData=mysqli_query($connection,$sql);
$count=mysqli_num_rows($ResultData);

if($count==1)
{
	while($row=mysqli_fetch_assoc($ResultData))
	{
        $_SESSION['Email_Id']=$row['Email_Id'];
    }
    echo '<script type="text/javascript">'; 
	echo 'alert("Sign In Successfully!");'; 
	echo 'window.location.href = "index.php"';
	echo '</script>';
}
else{
    echo '<script type="text/javascript">'; 
	echo 'alert("Invalid username and password!");'; 
	echo 'window.location.href = "../Log_In.php"';
	echo '</script>';
}
?>