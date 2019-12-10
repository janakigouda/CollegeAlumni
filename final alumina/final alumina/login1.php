<?php
session_start();
include 'dbconn.php';  
$u=$_POST["name"];
$p=$_POST["password"];
$sql="SELECT * FROM `register` where email='$u' and password='$p'";

$result=mysqli_query($db,$sql);
    if(mysqli_num_rows($result) > 0)
    {

        $row=mysqli_fetch_assoc($result);
            
        if($row['email']==$u && $row['password']==$p)
        {
            $_SESSION['id']=$u;
            header("location:udash.php");
        }
        else
        {
            header("location:login.php?ans=Username/Password is invalid!");
        }
    }
    else
    {
        header("location:login.php?ans=Username/Password is invalid!");
    }    
?>