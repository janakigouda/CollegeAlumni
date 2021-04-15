<?php
include 'dbconn.php';
if(isset($_REQUEST['sub']))
{ 
    include 'dbconn.php';
 $user=$_POST['pass'];

// $x="UPDATE  `sslc` SET  `board` =  '$board' , `reg_or_sup` =  '$reg', `pass_year` =  '$pass' WHERE  `user`.`username` ='$user' LIMIT 1 ";


    $x="UPDATE  `register` SET `ans` = '$user'
       WHERE  `name` ='$user' LIMIT 1" ;
    $res =  mysqli_query($db,$x);
    // header('location:udash.php');
    // }
    // else{ echo "error"; }    
    echo '<script language="javascript">document.location.href="login.php?ans=updated sucessfully"</script>';
}

else 
{

}


?>