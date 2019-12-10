<?php

session_start();
include 'dbconn.php';  
$u=$_POST["name"];
$sql="SELECT * FROM `register` where email='$u'";

$result=mysqli_query($db,$sql);
    if(mysqli_num_rows($result) > 0)
    {

        $row=mysqli_fetch_assoc($result);
            
        if($row['email']==$u )
        {
            $_SESSION['id']=$u;
            header("location:forget1.php?ans=$u");
        }
        else
        {
            header("location:forget.php?ans=Invalid Email!");
        }
    }
    else
    {
        header("location:forget.php?ans=Invalid Email!");
    }    
?>