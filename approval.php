<?php
include 'dbconn.php';
$user = $_GET['ans'];

$q = "SELECT * FROM `register` WHERE name='$user'";

$r = mysqli_query($db,$q);
if(mysqli_num_rows($r)>0){
   
    $row=mysqli_fetch_assoc($r);
    
    if($row['status'] == "No"){
        
        //$u= "UPDATE user  SET status = 'Yes' WHERE Username='$user'";
        $x="UPDATE  `register` SET  `status` =  'Yes' WHERE  `register`.`name` ='$user' LIMIT 1 ";

        $res =  mysqli_query($db,$x);
        
        header('location:pdash.php');
    }
    else if($row['status'] == "Yes"){
     
        
        //$u= "UPDATE user  SET status = 'Yes' WHERE Username='$user'";
        $x="UPDATE  `register` SET  `status` =  'No' WHERE  `register`.`name` ='$user' LIMIT 1 ";

        $res =  mysqli_query($db,$x);
        
        header('location:pdash.php');
    }

}
