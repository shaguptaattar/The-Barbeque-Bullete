<?php 
include 'connection.php';
$id=$_GET['id'];
$sql="DELETE FROM `admin` WHERE id='$id'";

if (mysqli_query($connection,$sql))
		{
    	echo '<script type="text/javascript">'; 
		echo 'alert("Category Delete Successfully!");'; 
		echo 'window.location.href = "./CategoryList.php"';
		echo '</script>';
		} 
		else 
		{
    	echo '<script type="text/javascript">'; 
    	echo 'alert("Category Not Delete Successfully!");'; 
		echo 'window.location.href = "./CategoryList.php"';
		echo '</script>';
		}
?>