<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        
        <link rel="stylesheet" type="text/css" href="new.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        session_start();
        include 'dbconnect.php' ;
        
        $u=$_SESSION['id'];       
        //die ($u." " .$p );
        $sql="select * from tbl_join where user='$u' and status='yes'";
        $result=  mysql_query($sql) or die(mysql_error());
        
        if(mysql_num_rows($result)>0)
            {
                $row=mysql_fetch_assoc($result);
            
                 header("location:uploadhome.php?r={$_GET['r']}&n={$_GET['n']}");
                               
                
             }
        
        else
            {
                header("location:groups.php?ans=failed,not allowed to upload");
            
            }
        
        
        ?>
    </body>
</html>
