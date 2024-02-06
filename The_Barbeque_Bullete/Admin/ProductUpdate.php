<?php
include 'connection.php';

$id=$_POST['id'];
$Product_Image=$_POST['Product_Image'];
$Product_Title=$_POST['Product_Title'];

$sql=" UPDATE `product` SET Product_Image='$Product_Image',Product_Title='$Product_Title' WHERE id=$id";

if ($connection->query($sql) === TRUE)
		{
    	echo '<script type="text/javascript">'; 
		echo 'alert("Product Update Successfully!");'; 
		echo 'window.location.href = "./ProductList.php"';
		echo '</script>';
		} 
		else 
		{
    	echo '<script type="text/javascript">'; 
    	echo 'alert("Product Not Update Successfully!");'; 
		echo 'window.location.href = "./ProductList.php"';
		echo '</script>';
		}
?>