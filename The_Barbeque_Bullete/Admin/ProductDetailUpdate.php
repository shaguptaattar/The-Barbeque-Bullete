<?php
    include 'connection.php';
    $id=$_POST['id'];
    $ProductImage=$_POST['ProductImage'];
    $ProductName=$_POST['ProductName'];
    $CategoryDetails=$_POST['CategoryDetails'];
    $details=$_POST['details'];

    $sql = "UPDATE `product_detail` SET 
                    ProductImage='$ProductImage',
                    ProductName='$ProductName',
                    category='$CategoryDetails',
                    details='$details'
                    
                WHERE id=$id";


    if ($connection->query($sql) === TRUE)
    {
    echo '<script type="text/javascript">'; 
    echo 'alert("Product update Successfully!");'; 
    echo 'window.location.href = "./ProductDetailList.php"';
    echo '</script>';
    } 
    else 
    {
    echo '<script type="text/javascript">'; 
    echo 'alert("Error Occured! Product not updated!");'; 
    echo 'window.location.href = "./ProductDetailList.php"';
    echo '</script>';
    }        

?>