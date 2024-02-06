<?php
include 'connection.php';

$Banner_Title=$_POST['Banner_Title'];
$Banner_Image=$_POST['Banner_Image'];
$Banner_Description=$_POST['Banner_Description'];

$EmployArray=array('Banner_Title'=>"'".$Banner_Title."'",'Banner_Image'=>"'".$Banner_Image."'",'Banner_Description'=>"'".$Banner_Description."'");

//print_r($EmployArray);

$columns=implode(',',array_keys($EmployArray));
$value=implode(',',array_values($EmployArray));

$sql="INSERT INTO `slider_forms` ($columns) values ($value)";

if ($connection->query($sql) === TRUE)
		{
    	echo '<script type="text/javascript">'; 
		echo 'alert("Slider Add Successfully!");'; 
		echo 'window.location.href = "./SliderList.php"';
		echo '</script>';
		} 
		else 
		{
    	echo '<script type="text/javascript">'; 
    	echo 'alert("Slider Not Add Successfully!");'; 
		echo 'window.location.href = "./SliderList.php"';
		echo '</script>';
		}
?>