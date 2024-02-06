<?php 
include 'connection.php';
$id=$_GET['id'];
$sql="DELETE FROM `reviews` WHERE id='$id'";

if (mysqli_query($connection,$sql))
		{
    	echo '<script type="text/javascript">'; 
		echo 'alert("Reviwe Delete Successfully!");'; 
		echo 'window.location.href = "./ReviewsList.php"';
		echo '</script>';
		} 
		else 
		{
    	echo '<script type="text/javascript">'; 
    	echo 'alert("Reviwe Not Delete Successfully!");'; 
		echo 'window.location.href = "./ReviewsList.php"';
		echo '</script>';
		}
?>