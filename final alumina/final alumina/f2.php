<?php
session_start();
include 'dbconn.php';
$u=$_POST["answer"]; 
$s=$_SESSION['id'];
$sql="SELECT * FROM `register` where ans='$u' ";

$result=mysqli_query($db,$sql);
    if(mysqli_num_rows($result) > 0)
    {

        $row=mysqli_fetch_assoc($result);
            
        if($row['ans']==$u )
        {
            header("location:forget2.php?ans=$u");
        }
        else
        {
            // header("location:forget1.php?ans=$s");  
            session_start();
	$_SESSION['error'] = 'Invalid Answer? Please Remember Your Answer!!';
	header("location: forget1.php?ans=$s");
                  
        }
    }
    else
    {
        // echo "<script lang='javascript'> alert ('Invalid Answer? Please Remember Your Answer!!')</script>";
        // header("location:forget1.php?ans=$s");
        session_start();
        $_SESSION['error'] = 'Invalid Answer? Please Remember Your Answer!!';
        header("location: forget1.php?ans=$s");
        
    }    
?>