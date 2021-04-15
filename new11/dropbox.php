<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php 
        session_start();
        include 'dbconnect.php';
        
        $uname=$_SESSION['id'];
        $filedes=$_POST['description'];
        
        
        if($_FILES['brows']['size'] >= 1048576*5)
        {
            die("file size is greater than 5mb ");
        }
        
        
       // random number and name
        $rd= mt_rand(1000, 9999)."_File";
           
       //checking if we have file 
        if(!(empty ($_FILES["brows"])) && ($_FILES['brows']['error']==0))
        {
            
        
        
//check if file is exaecutable file 
            
           $filename= basename($_FILES['brows']['name']);
           $exe= substr($filename, strrpos($filename, '.')+1);
           
           if (($exe == "exe") && ($_FILES["brows"]["type"] == "application/x-msdownload"))
           {
               //specify the path where we want to save 
           
               header("location:userhome.php?msg=can not upload .exe file");
               return ;
           }    
               $newname= "uploads/".$rd."_".$filename;
               
               //check if file already exist in "uploads" folder
               
               if(file_exists($newname))
               {
                   //move file to its new place
                  header("location:userhome.php?msg=file already exist");
               }    
                   
               if((move_uploaded_file($_FILES['brows']['tmp_name'], $newname)))
               {
                       //successful upload
                       
                       
                       $query= "insert into tbl_file (uname,date,fname,description) values('$uname',NOW(),'$newname','$filedes')";
                       
                       $result=mysql_query($query) or die(mysql_error());
                       
                       if($result)
                       {
                           header("location:userhome.php?msg=file successfully added to dropbox");
                       }
                       else{ echo "error";}
                   
                 }
                 
                 }    
        else{header("location:userhome.php?msg=large file");}   
                   
        mysql_close()
            
        ?>
       
        <h3 align="center"><input type="button" value="back" Onclick="window.location.href='userhome.php'"></h3>
        <h1 align="center"><input type="button" value="logout" Onclick="window.location.href='logout.php'"></h1>
        
    </body>
</html>
