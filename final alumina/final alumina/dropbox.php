<?php
session_start();
$u = $_SESSION['id'];
include 'dbconn.php';
if(isset($_POST['add_code'])){
    if (($_FILES['photo']['name']!="")){
        // Where the file is going to be stored
        $target_dir = "manufacturer/";
        $file = $_FILES['photo']['name'];
        $path = pathinfo($file);
        $filename = $path['filename'];
        $ext = $path['extension'];
        $temp_name = $_FILES['photo']['tmp_name'];
        $path_filename_ext = $target_dir.$filename.".".$ext;
        // Check if file already exists
        if (file_exists($path_filename_ext)) {
            // echo "Sorry, file already exists.";
            // echo "<script> alert('file already exist');</script>";
         echo "<meta http-equiv=Refresh content=0.1;url=udash.php>";
         
           
        }else{
           move_uploaded_file($temp_name,$path_filename_ext);
        //    echo "Congratulations! File Uploaded Successfully.";
        echo "<script> alert('Image updated sucessfully');</script>";
        echo "<meta http-equiv=Refresh content=0.1;url=udash.php>";
          
       }
    }

    //  $ititle=$_POST['image_title'];
//  $path_filename_ext;
$q="SELECT * FROM `register`";
$r=mysqli_query($db,$q);

while($row = mysqli_fetch_assoc($r)){

if($row['photo']==$path_filename_ext)
{
    // echo 'file already exist';
    // echo "<script> alert('file already exist');</script>";
         echo "<meta http-equiv=Refresh content=0.1;url=udash.php>";
    exit();
}

else{

$q="UPDATE  `register` SET `photo`='$path_filename_ext' WHERE `register`.email='$u'";
    //   $q="INSERT INTO student_pic(fname,dec) VALUES ('$path_filename_ext','$ititle')";
     $res=mysqli_query($db,$q);
     if($res){
         echo "done";
     }
     else{
         echo "not";
     }
}
    }
}
?>