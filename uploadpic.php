<?php
session_start();
if($_SESSION['id']=="")
{
header("location:login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>PicUpload</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>
<style>
li a {
        margin-top:6px;
        font-size:17px;
        display: inline-block;
        color: black;
        text-align: center;
        padding: 16px 18px;
        text-decoration: none;
        font-family: "Times New Roman", Times, serif;
    }

    li a:hover {
        background-color: rgb(0, 46, 102);
        color: orange;
    }
    .header{
    background-color:white;
    height:80px;        
    border-bottom: 1px solid lightgray;
    position:fixed;
    width:1500px

}
 .header .ul{
    float:right;
    list-style-type: none;
    margin-right:10px;
 }

li {
    float: left;
    
  }
  
  .nav{
      height: 10%;
  }
  body{
    font-family: sans-serif;
    background-color: whitesmoke;
    
  }
  
form{
    height:400px;
    width:400px;
    background-color:white;
    margin-left:600px;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

#b{
    height:600px;
}
h1{
    font-family: "Times New Roman", Times, serif; 
}
input[type=submit]{
    /* background-color:green; */
    width:200px;
    background-color: rgb(30, 175, 71);
    padding: 8px;
    border: 1px solid rgb(30, 175, 71);
    border-radius: 2px;
    box-sizing: border-box;
    font-size: 110%;
    color:white;
    font-weight: bold;
    font-family: "Times New Roman", Times, serif;
}
input[type=file]{
    font-family: "Times New Roman", Times, serif;
    background-color:lightgray;
}
input[type=submit]:hover{
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
<body>
<div id="b">
<header class="header">
        <nav class="nav">
        <a href="udash.php"><img src="../images/newlogo copy.png" style="width:110px; height:70px;"></a>

            <ul class="ul">
                <li><a href="udash.php">Back</a></li>
                
            </ul>
        </nav>
    </header>
    <br><br><br><br><br>
    <form class="form-4" action="dropbox.php" method="POST" id="fileUpload" enctype="multipart/form-data">
    <center>
        <tr class="secondrow">
            <th>
                <h1>Upload Photo</h1>
                <hr>
            </th>
            <input type="file" name="photo" value="pic"><br><br>
            <input type="submit" name="add_code" value="Submit">
        </tr>
        </center>
    </form>
    </div>
    <footer class="w3-center w3-black w3-padding-64">
        <!-- <a href="#header" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a> -->
        <div class="w3-xlarge w3-section">
            <P>JOIN US BY</P>
            <a href="https://www.facebook.com/Bharatesh-College-Of-Computer-Applications-2222984061289886/?ref=br_rs"
                xclass="w3-button w3-light-grey"><i class="fa fa-facebook-official w3-hover-opacity"></a></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>




            <div class="w3-medium w3-section">
                <p>&copy; BCCA IT CLUB AND FACULTY. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>