<?php
include 'connection.php';

$Product_Image=$_POST['Product_Image'];
$Product_Title=$_POST['Product_Title'];

$EmployArray=array('Product_Image'=>"'".$Product_Image."'",'Product_Title'=>"'".$Product_Title."'");

//print_r($EmployArray);

$columns=implode(',',array_keys($EmployArray));
$value=implode(',',array_values($EmployArray));

$sql="INSERT INTO `product` ($columns) values ($value)";

if ($connection->query($sql) === TRUE)
		{
    	echo '<script type="text/javascript">'; 
		echo 'alert("Product Add Successfully!");'; 
		echo 'window.location.href = "./ProductList.php"';
		echo '</script>';
		} 
		else 
		{
    	echo '<script type="text/javascript">'; 
    	echo 'alert("Product Not Add Successfully!");'; 
		echo 'window.location.href = "./ProductMaster.php"';
		echo '</script>';
		}
?>