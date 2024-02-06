<?php
session_start();
session_destroy();
header('Location: ../log_In.php');
?>