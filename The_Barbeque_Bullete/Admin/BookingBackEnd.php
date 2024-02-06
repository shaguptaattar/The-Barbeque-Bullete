<?php
include 'connection.php';

$booling_name=$_POST['booling_name'];
$booking_email=$_POST['booking_email'];
$data_and_time=$_POST['data_and_time'];
$No_people=$_POST['No_people'];
$booking_phone=$_POST['booking_phone'];
$message=$_POST['message'];

 $EmployArray=array('booling_name'=>"'".$booling_name."'",'booking_email'=>"'".$booking_email."'",'data_and_time'=>"'".$data_and_time."'"
,'No_people'=>"'".$No_people."'",'booking_phone'=>"'".$booking_phone."'",'message'=>"'".$message."'");

//print_r($EmployArray);

$columns=implode(',',array_keys($EmployArray));
$value=implode(',',array_values($EmployArray));

$sql="INSERT INTO `booking` ($columns) values ($value)";

if ($connection->query($sql) === TRUE)
		{
    	echo '<script type="text/javascript">'; 
		echo 'alert("Booking Confirm Successfully!");'; 
		echo 'window.location.href = "../booking.php"';
		echo '</script>';
		} 
		else 
		{
    	echo '<script type="text/javascript">'; 
    	echo 'alert("Booking Not Add!");'; 
		echo 'window.location.href = "../booking.php"';
		echo '</script>';
		}
?>