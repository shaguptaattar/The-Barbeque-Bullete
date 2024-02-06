<?php 
include 'connection.php';
$id=$_GET['id'];
$sql="DELETE FROM `booking` WHERE id='$id'";

if (mysqli_query($connection,$sql))
		{
    	echo '<script type="text/javascript">'; 
		echo 'alert("Booking Delete Successfully!");'; 
		echo 'window.location.href = "./CategoryList.php"';
		echo '</script>';
		} 
		else 
		{
    	echo '<script type="text/javascript">'; 
    	echo 'alert("Booking Not Delete!");'; 
		echo 'window.location.href = "./CategoryList.php"';
		echo '</script>';
		}
?>