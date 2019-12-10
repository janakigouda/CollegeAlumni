<?php
session_start();
unset($_SESSION['name']);
	$_SESSION['msg'] = 'Logged out succesfully';
	$_SESSION['name']=$_POST[""];
header('Location: princi.php');
?>