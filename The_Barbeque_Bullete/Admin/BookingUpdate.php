<?php
include 'connection.php';

$id=$_POST['id']; 
$booling_name=$_POST['booling_name'];
$booking_email=$_POST['booking_email'];
$data_and_time=$_POST['data_and_time'];
$No_people=$_POST['No_people'];
$booking_phone=$_POST['booking_phone'];
$message=$_POST['message'];

$sql=" UPDATE `booking` SET booling_name='$booling_name', booking_email='$booking_email', data_and_time='$data_and_time',
No_people='$No_people', booking_phone='$booking_phone', message='$message' WHERE id=$id";

if ($connection->query($sql) === TRUE)
		{
    	echo '<script type="text/javascript">'; 
		echo 'alert("Booking Update Successfully!");'; 
		echo 'window.location.href = "./BookingList.php"';
		echo '</script>';
		} 
		else 
		
		{
    	echo '<script type="text/javascript">'; 
    	echo 'alert("Booking Not Update Successfully!");'; 
		echo 'window.location.href = "./BookingList.php"';
		echo '</script>';
		}
?>