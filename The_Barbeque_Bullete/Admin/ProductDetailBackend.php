<?php
error_reporting(0);
include 'connection.php';

$ProductImage=$_FILES['ProductImage'];
$ProductName=$_POST['ProductName'];
$ext=strtolower(pathinfo($ProductImage['name'],PATHINFO_EXTENSION));

$RenameFile=$ProductName.".".$ext;

$CategoryDetails=$_POST['CategoryDetails'];
$details=$_POST['details'];


$CategoryArray=array('ProductImage'=>"'".$RenameFile."'",'ProductName'=>"'".$ProductName."'",
'category'=>"'".$CategoryDetails."'",'details'=>"'".$details."'",);

//print_r($EmployArray);

$columns=implode(',',array_keys($CategoryArray));
$value=implode(',',array_values($CategoryArray));

$sql="INSERT INTO `product_detail` ($columns) values ($value)";

if ($connection->query($sql) === TRUE)
			{
				$target_dir="../img/menu/".$RenameFile;
				
				if(!file_exists($target_dir)){
					$target_fiile=$target_dir;
					$target_fiile;
					move_uploaded_file($ProductImage["tmp_name"],$target_fiile);
				}
    	echo '<script type="text/javascript">'; 
		echo 'alert("Product Add Successfully!");'; 
		echo 'window.location.href = "./ProductDetailList.php"';
		echo '</script>';
		} 
		else 
		{
    	echo '<script type="text/javascript">'; 
    	echo 'alert("Product Not Add!");'; 
		echo 'window.location.href = "./ProductDetailMaster.php"';
		echo '</script>';
		}
?>