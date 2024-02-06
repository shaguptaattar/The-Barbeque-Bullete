<?php
    include 'connection.php';

    $id=$_GET['id'];
    $sql = "DELETE FROM `product_detail` where id='$id'";

    if(mysqli_query($connection,$sql))
    {
    	echo '<script type="text/javascript">'; 
		echo 'alert("Product deleted Successfully!");'; 
		echo 'window.location.href = "./ProductDetailList.php"';
		echo '</script>';
		} 
		else 
		{
    	echo '<script type="text/javascript">'; 
    	echo 'alert("Error Occured! Product not deleted!!!!");'; 
		echo 'window.location.href = "./ProductDetailList.php"';
		echo '</script>';
		}
?>