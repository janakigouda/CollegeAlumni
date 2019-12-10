<?php
include 'dbconn.php';
$pass=$_POST["password"];

$sel="SELECT * FROM `register` where email='".$_POST['email']."'";

// $sel="SELECT * FROM `register` where name='".$_POST['name']."' and ";

$res=mysqli_query($db,$sel);
if(mysqli_num_rows($res) == 0)
{
	
$q="INSERT INTO  `register` (
    `name` ,
    `email` ,
    `contact` ,
    `company` ,
    `designation` ,
    `batch` ,
    `current_place` ,
    `que`,
    `ans`,
    `password`,
    `photo`,
    `status`
    )
    VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['contact']."','".$_POST['company']."','".$_POST['designation']."','".$_POST['batch']."','".$_POST['place']."','".$_POST['que']."','".$_POST['ans']."','$pass','manufacturer/pro2.png','No')";
mysqli_query($db,$q);

// echo "registered succesfully";
    session_start();
	$_SESSION['reg'] = 'Registered succesfully...Login now!!';
	header('location: login.php');
}
else{
    echo '<script language="javascript">document.location.href="reg.php?ans=Email is already used! select another email address..."</script>';
   
}
?>