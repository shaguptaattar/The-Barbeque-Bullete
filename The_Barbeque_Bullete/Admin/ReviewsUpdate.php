<?php
include 'connection.php';

$id=$_POST['id'];
$reviews_name=$_POST['reviews_name'];
$Add_Review=$_POST['Add_Review'];

$sql=" UPDATE `reviews` SET reviews_name='$reviews_name',Add_Review='$Add_Review' WHERE id=$id";

if ($connection->query($sql) === TRUE)
		{
    	echo '<script type="text/javascript">'; 
		echo 'alert("Reviews Update Successfully!");'; 
		echo 'window.location.href = "./ReviewsList.php"';
		echo '</script>';
		} 
		else 
		{
    	echo '<script type="text/javascript">'; 
    	echo 'alert("Reviews Not Update Successfully!");'; 
		echo 'window.location.href = "./ReviewsList.php"';
		echo '</script>';
		}
?>