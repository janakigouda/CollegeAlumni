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
        <!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <link rel="stylesheet" type="text/css" href="new.css">
    <body>
        
     
        
        <h1 align="center">Enter Your Details...</h1>
        
        
        
        
        <form name="f1" method="post" action="upload1.php">
           <input type="hidden" name="gpname" value="<?php echo $_GET['n'] ?>" />
        <input type="hidden" name="gpid" value="<?php echo $_GET['r'] ?>" />
            <table border="2" align="center" >
               
          <tr> <td>name: </td> <td><input type="text" name="name"></td> </tr>
           <tr><td>password:</td> <td><input type="password" name="pass"></td></tr>
           </table> 
               
            <h1 align="center"><input type="submit" value="login"> <input type="button" value="back" Onclick="window.location.href='groups.php'"></h1>
            
        </form>
        
       
        <?php 
        if(isset($_GET['ans']))
        {
           // echo "<h3 align=center>status: ".$_GET['ans'];
            echo "<script lang='javascript'> alert ('{$_GET['ans']}') </script>" ;
        }
        ?>
        
    </body>
</html>

    </body>
</html>
