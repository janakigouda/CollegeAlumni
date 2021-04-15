<?php
session_start();
unset($_SESSION['id']);
	$_SESSION['msg'] = 'Logged out succesfully';
	$_SESSION['id']="";
header('Location: login.php');
?>