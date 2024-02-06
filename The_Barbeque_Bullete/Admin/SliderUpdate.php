<?php
include 'connection.php';

$id=$_POST['id'];
$Banner_Title=$_POST['Banner_Title'];
$Banner_Image=$_POST['Banner_Image'];
$Banner_Description=$_POST['Banner_Description'];

$sql=" UPDATE `slider_forms` SET Banner_Title='$Banner_Title',Banner_Image='$Banner_Image',Banner_Description='$Banner_Description' WHERE id=$id";

if ($connection->query($sql) === TRUE)
		{
    	echo '<script type="text/javascript">'; 
		echo 'alert("Slider Update Successfully!");'; 
		echo 'window.location.href = "./SliderList.php"';
		echo '</script>';
		} 
		else 
		{
    	echo '<script type="text/javascript">'; 
    	echo 'alert("Slider Not Update Successfully!");'; 
		echo 'window.location.href = "./SliderList.php"';
		echo '</script>';
		}
?>