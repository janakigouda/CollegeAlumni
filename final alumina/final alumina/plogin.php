<?php
session_start();
include 'dbconn.php';  
$u=$_POST["name"];
$p=$_POST["password"];
$sql="SELECT * FROM `principal` where name='$u' and password='$p'";

$result=mysqli_query($db,$sql);
    if(mysqli_num_rows($result) > 0)
    {

        $row=mysqli_fetch_assoc($result);
            
        if($row['name']==$u && $row['password']==$p)
        {
            $_SESSION['name']=$u;
            header("location:pdash.php");
        }
        else
        {
            header("location:princi.php?ans=Username/Password is invalid!");
        }
    }
    else
    {
        header("location:princi.php?ans=Username/Password is invalid!");
    }    
?>
<?php
if(isset($_GET['ans'])){
    echo "<script lang='javascript'> alert ('{$_GET['ans']}')</script>";
}
?>