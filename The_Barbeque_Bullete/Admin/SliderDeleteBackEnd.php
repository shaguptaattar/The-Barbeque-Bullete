<?php 
include 'connection.php';
$id=$_GET['id'];
$sql="DELETE FROM `slider_forms` WHERE id='$id'";

if (mysqli_query($connection,$sql))
		{
    	echo '<script type="text/javascript">'; 
		echo 'alert("Slider Delete Successfully!");'; 
		echo 'window.location.href = "./SliderList.php"';
		echo '</script>';
		} 
		else 
		{
    	echo '<script type="text/javascript">'; 
    	echo 'alert("Slider Not Delete Successfully!");'; 
		echo 'window.location.href = "./SliderList.php"';
		echo '</script>';
		}
?>