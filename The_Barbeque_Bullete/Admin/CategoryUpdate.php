<?php
include 'connection.php';

$id=$_POST['id']; 
$category=$_POST['category'];

$sql=" UPDATE `category` SET category='$category' WHERE id=$id";

if ($connection->query($sql) === TRUE)
		{
    	echo '<script type="text/javascript">'; 
		echo 'alert("Category Update Successfully!");'; 
		echo 'window.location.href = "./CategoryList.php"';
		echo '</script>';
		} 
		else 
		{
    	echo '<script type="text/javascript">'; 
    	echo 'alert("Category Not Update Successfully!");'; 
		echo 'window.location.href = "./CategoryList.php"';
		echo '</script>';
		}
?>