<?php
include 'connection.php';

$id=$_POST['id']; 
$Admin_Name=$_POST['Admin_Name'];
$Admin_Image=$_FILES['Admin_Image'];
$ext=strtolower(pathinfo($Admin_Image['name'],PATHINFO_EXTENSION));

 $RenameFile=$Admin_Name.".".$ext;

$Restaurant_Address=$_POST['Restaurant_Address'];
$Restaurant_Email_Id=$_POST['Restaurant_Email_Id'];
$Restaurant_Phone=$_POST['Restaurant_Phone'];
$Alternate_Phone=$_POST['Alternate_Phone'];
$Opening_Day=$_POST['Opening_Day'];
$Opening_Time=$_POST['Opening_Time'];
$Last_Day=$_POST['Last_Day'];
$Last_Opening_Time=$_POST['Last_Opening_Time'];

$sql=" UPDATE `admin` SET Admin_Name='$Admin_Name',Admin_Image='$RenameFile',Restaurant_Address='$Restaurant_Address',Restaurant_Email_Id='$Restaurant_Email_Id',
Restaurant_Phone='$Restaurant_Phone',Alternate_Phone='$Alternate_Phone',Opening_Day='$Opening_Day',Opening_Time='$Opening_Time',Last_Day='$Last_Day',
Last_Opening_Time='$Last_Opening_Time' WHERE id=$id";

if ($connection->query($sql) === TRUE)
		{
            $last_id=$connection->insert_id;
		$target_dir="assets/img/admin/".$last_id;

		if(!file_exists($target_dir)){
			mkdir($target_dir);
			$target_fiile=$target_dir."/".$RenameFile;
			move_uploaded_file($Admin_Image["tmp_name"],$target_fiile);
		}
    	echo '<script type="text/javascript">'; 
		echo 'alert("Admin Update Successfully!");'; 
		echo 'window.location.href = "./AdminList.php"';
		echo '</script>';
		} 
		else 
		{
    	echo '<script type="text/javascript">'; 
    	echo 'alert("Admin Not Update Successfully!");'; 
		echo 'window.location.href = "./AdminList.php"';
		echo '</script>';
		}
?>