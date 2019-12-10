<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

  <title>display-users</title>

    <style>
            body{
                background-color:#2c3338;
            }
            
            table{
                color: white;
                border:2px;
                border-style: solid;
                padding:12px;
                
                
            }
            
            td,tr{
                 color:#31b0d5;
                 font-size:medium;
                 padding: 5px;
            }
            h1,h2,h3,a{ color: whitesmoke;}

            </style>
</head>
<body>
    
    
      <h3 align="right" >
        <a href="index.php" >HOME<image src="image/home.png"  width="50"></a>
        <a href="groups.php">BACK<image src="image/back.png"  width="50"></a>
        <a href="logout.php">LOGOUT<image src="image/logout.png"  width="50"></a>	
      </h3>
        <?php 
        date_default_timezone_set("Asia/Calcutta");
        
        session_start();
        
        if($_SESSION['id']==""){
            
            header("location:userlogin.php");
        }
        
       $u=$_SESSION['id'];
        
        include 'dbconnect.php' ;
        
       
        $gpid=$_GET['r'];
        $gpname=$_GET['n'];
        
        
        ?>
    
    </br> </br><h3 align="center"> WELCOME "<?php echo $u; ?>" </h3> 
            
        <form name="f" method="post" action="gpdropbox.php" enctype="multipart/form-data">
            <table align="center" border="2">
                <tr><td>group-name:</td><td><input type="text" name="gpname" value="<?php echo $gpname;?>" readonly="true"/></td></tr>
                <tr><td>group-id:</td><td><input type="text" name="gpid" value="<?php echo $gpid;?>" readonly="true"/></td></tr>
                <tr><td>user:</td><td><?php echo "".$_SESSION['id'];?></td></tr>
                <tr><td>date&time :</td><td> <?php echo date("d-m-y / h:i"); ?> </td></tr>
                <tr><td><input type="file" name="brows" id="brows" required/></td></tr>
                <tr><td>file description:</td><td> <input type="text" name="description" required/></td></tr>
            </table>
            <h3 align="center"><input type="submit" name="add" value="AddToGroup"> 
         </form>
        
         <?php 
           
        if(isset($_GET['msg']))
        {
           // echo "<h3 align=center>status: ".$_GET['ans'];
            
            if($_GET['msg']==1)
            {
            echo "<script lang='javascript'> alert('can not upload .exe file') </script>" ;    
            }
            
            if($_GET['msg']==2)
            {
            echo "<script lang='javascript'> alert('file already exist') </script>" ;    
            }
            
            if($_GET['msg']==3)
            {
            echo "<script lang='javascript'> alert('successfuly uploaded') </script>" ;    
            }
            
            if($_GET['msg']==4)
            {
            echo "<script lang='javascript'> alert('error in uploading') </script>" ;    
            }
            
            if($_GET['msg']==4)
            {
            echo "<script lang='javascript'> alert('can not upload, large file') </script>" ;    
            }
            
            
        }
        ?>
        
        </body>
    
</html>
