<?php
session_start();
$user=$_SESSION['user'];
session_destroy();
header('Location:login.php');
?>