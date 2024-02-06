<?php
include 'connection.php';

$reviews_name=$_POST['reviews_name'];
$Add_Review=$_POST['Add_Review'];

$EmployArray=array('reviews_name'=>"'".$reviews_name."'",'Add_Review'=>"'".$Add_Review."'");

//print_r($EmployArray);

$columns=implode(',',array_keys($EmployArray));
$value=implode(',',array_values($EmployArray));

$sql="INSERT INTO `reviews` ($columns) values ($value)";

if ($connection->query($sql) === TRUE)
		{
    	echo '<script type="text/javascript">'; 
		echo 'alert("Reviews Add Successfully!");'; 
        echo 'window.location.href = "../reviews.html"';
		echo '</script>';
		} 
		else 
		{
    	echo '<script type="text/javascript">'; 
    	echo 'alert("Reviews Not Add Successfully!");'; 
        echo 'window.location.href = "../reviews.html"';
		echo '</script>';
		}
?>