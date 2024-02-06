<?php 
include 'connection.php';
$id=$_GET['id'];
$sql="DELETE FROM `product` WHERE id='$id'";

if (mysqli_query($connection,$sql))
		{
    	echo '<script type="text/javascript">'; 
		echo 'alert("Product Delete Successfully!");'; 
		echo 'window.location.href = "./ProductList.php"';
		echo '</script>';
		} 
		else 
		{
    	echo '<script type="text/javascript">'; 
    	echo 'alert("Product Not Delete Successfully!");'; 
		echo 'window.location.href = "./ProductList.php"';
		echo '</script>';
		}
?>