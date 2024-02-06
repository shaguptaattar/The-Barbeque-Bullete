<?php
include 'connection.php';

$category=$_POST['category'];


$CategoryArray=array('category'=>"'".$category."'");

//print_r($EmployArray);

$columns=implode(',',array_keys($CategoryArray));
$value=implode(',',array_values($CategoryArray));

$sql="INSERT INTO `category` ($columns) values ($value)";

if ($connection->query($sql) === TRUE)
		{
    	echo '<script type="text/javascript">'; 
		echo 'alert("Category Add Successfully!");'; 
		echo 'window.location.href = "./CategoryList.php"';
		echo '</script>';
		} 
		else 
		{
    	echo '<script type="text/javascript">'; 
    	echo 'alert("Category Not Add Successfully!");'; 
		echo 'window.location.href = "./CategoryMaster.php"';
		echo '</script>';
		}
?>