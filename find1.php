<?php
session_start();
if($_SESSION['name']=="")
{
header("location:princi.php");
}?>
<html>

<head>
    <title>Bharatesh BCA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <style>
    body{
        background-color:whitesmoke;
    }
    .f input[type=text] {
        width: 25%;
        padding: 0.5%;
        border: 1px solid hsl(0, 0%, 24%);
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
        background-color: white;
        color: black;
        font-family: "Times New Roman", Times, serif;
        margin-top:10px;

    }

    .f input[type=submit] {
        /* background-color: hsl(0, 0%, 24%); */
        width: 10%;
        padding: 0.5%;
        border: 1px solid hsl(0, 0%, 24%);
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 110%;
        color: hsl(0, 0%, 24%);
        font-weight: bold;
        color: white;
        font-family: "Times New Roman", Times, serif;
        margin-top:100px;
        background-color: rgb(0, 46, 102);
        
    }
    .f input[type=submit]:hover{
        color: orange;
    }


    li a {
    /* margin-top:10px; */
        font-size:14px;
        display: inline-block;
        color: black;
        text-align: center;
        padding: 8px 10px;
        text-decoration: none;
        font-family: "Times New Roman", Times, serif;
    }

    li a:hover {
        background-color: rgb(0, 46, 102);
        color: orange;
        
    }
    .header{
    background-color:white;
    height:10%;
    border-bottom: 1px solid lightgray;
    position:fixed;
    width:100%;

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
#container{
    background-color: white;
}

    input[type=text] {
        border: none;
        color: blue;
        width:100%;

    }

    hr {
        border: 5px  gray;
    }

    .row::after {
        content: "";
        clear: both;
        display: center;
    }

    * {
        box-sizing: border-box;
    }

    .column {
        float: left;
        width: 15%;
        padding: 1%;
        /* display:center; */
    }
    .column:hover{
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        width: 15%;
    }

    h1 {
        background-color: lightgray;
        height: 50px;
        font-weight:bold;
        text-align:center;
    }
    </style>
</head>

<body>
    <header class="header">
        <nav class="nav">
            <a href="index.php"><img src="./images/newlogo copy.png" style="width:70px; height:50px; margin-top:0.5%; margin-left:2%;"></a>
            <ul class="ul">
                <li><a href="pdash.php">Back</a></li>
                <li><a href="plogout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="f">
        <form name="f" action="frnd2.php" method="POST">
            <input type="text" name="search" value="" placeholder="Search Your Friends..">
            <input type="submit" name="sub" value="search">
        </form>
    </div>

    <h1>2003-2004</h1>

    <?php    
      include 'dbconn.php';

$q="SELECT * FROM `register` where batch='2003-2004' and status='Yes'";
$res=mysqli_query($db,$q);
if(mysqli_num_rows($res)>0){
    while( $row = mysqli_fetch_assoc($res)){
?>

    <div class="row">
        <div class="column">
            <a href="info1.php?ans=<?php echo $row['name'] ?>">
                <img src=<?php echo $row['photo'];?> style='width:75%; height:130px;'></a><br>
            Name:<input type="text" name="name" value="<?php echo $row['name'] ?> " readonly>
        </div>
    </div>
    <?php  
    }}
?>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <hr>


    <h1>2004-2005</h1>
    <?php
     $q="SELECT * FROM `register` where batch='2004-2005' and status='Yes'";
$res=mysqli_query($db,$q);
if(mysqli_num_rows($res)>0){
    while( $row = mysqli_fetch_assoc($res)){
?>

    <div class="row">
        <div class="column">
            <a href="info1.php?ans=<?php echo $row['name'] ?>"><img src=<?php echo $row['photo']; ?> style='width:75%; height:130px;'></a>
            <br>
            Name:<input type="text" name="name" value="<?php echo $row['name'] ?> " readonly>
        </div>
    </div>
    <?php 
     }}

?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <hr>

    <h1>2005-2006</h1>
    <?php
     $q="SELECT * FROM `register` where batch='2005-2006' and status='Yes' ";
     $res=mysqli_query($db,$q);
     if(mysqli_num_rows($res)>0){
         while( $row = mysqli_fetch_assoc($res)){
     ?>

    <div class="row">
        <div class="column">
            <a href="info1.php?ans=<?php echo $row['name'] ?>"><img src=<?php echo $row['photo']; ?> style='width:75%; height:130px;'></a>
            <br />
            Name:<input type="text" name="name" value="<?php echo $row['name'] ?> " readonly>
        </div>
    </div>
    <?php  }}

?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <hr>

    <h1>2006-2007</h1>
    <?php
     $q="SELECT * FROM `register` where batch='2006-2007' and status='Yes'";
     $res=mysqli_query($db,$q);
     if(mysqli_num_rows($res)>0){
         while( $row = mysqli_fetch_assoc($res)){
     ?>

    <div class="row">
        <div class="column">
            <a href="info1.php?ans=<?php echo $row['name'] ?>"><img src=<?php echo $row['photo']; ?> style='width:75%; height:130px;'></a>
            <br />
            Name:<input type="text" name="name" value="<?php echo $row['name'] ?> " readonly>
        </div>
    </div>
    <?php  }}

?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <hr>

    <h1>2007-2008</h1>
    <?php
     $q="SELECT * FROM `register` where batch='2007-2008' and status='Yes'";
     $res=mysqli_query($db,$q);
     if(mysqli_num_rows($res)>0){
         while( $row = mysqli_fetch_assoc($res)){
     ?>

    <div class="row">
        <div class="column">
            <a href="info1.php?ans=<?php echo $row['name'] ?>"><img src=<?php echo $row['photo']; ?> style='width:75%; height:130px;'></a>
            <br />
            Name:<input type="text" name="name" value="<?php echo $row['name'] ?> " readonly>
        </div>
    </div>
    <?php  }}

?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <hr>

    <h1>2008-2009</h1>
    <?php
     $q="SELECT * FROM `register` where batch='2008-2009' and status='Yes'";
     $res=mysqli_query($db,$q);
     if(mysqli_num_rows($res)>0){
         while( $row = mysqli_fetch_assoc($res)){
     ?>
    <div class="row">
        <div class="column">
            <a href="info1.php?ans=<?php echo $row['name'] ?>"><img src=<?php echo $row['photo']; ?> style='width:75%; height:130px;'></a>
            <br />
            Name:<input type="text" name="name" value="<?php echo $row['name'] ?> " readonly>
        </div>
    </div>
    <?php  }}

?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <hr>
    <h1>2009-2010</h1>
    <?php
     $q="SELECT * FROM `register` where batch='2009-2010' and status='Yes'";
     $res=mysqli_query($db,$q);
     if(mysqli_num_rows($res)>0){
         while( $row = mysqli_fetch_assoc($res)){
     ?>
    <div class="row">
        <div class="column">
            <a href="info1.php?ans=<?php echo $row['name'] ?>"><img src=<?php echo $row['photo']; ?> style='width:75%; height:130px;'></a>
            <br />
            Name:<input type="text" name="name" value="<?php echo $row['name'] ?> " readonly>
        </div>
    </div>
    <?php  }}

?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <hr>

    <h1>2010-2011</h1>
    <?php
     $q="SELECT * FROM `register` where batch='2010-2011' and status='Yes'";
     $res=mysqli_query($db,$q);
     if(mysqli_num_rows($res)>0){
         while( $row = mysqli_fetch_assoc($res)){
     ?>
    <div class="row">
        <div class="column">
            <a href="info1.php?ans=<?php echo $row['name'] ?>"><img src=<?php echo $row['photo']; ?> style='width:75%; height:130px;'></a>
            <br />
            Name:<input type="text" name="name" value="<?php echo $row['name'] ?> " readonly>
        </div>
    </div>
    <?php  }}

?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <hr>
    <h1>2011-2012</h1>
    <?php
     $q="SELECT * FROM `register` where batch='2011-2012' and status='Yes'";
     $res=mysqli_query($db,$q);
     if(mysqli_num_rows($res)>0){
         while( $row = mysqli_fetch_assoc($res)){
     ?>
    <div class="row">
        <div class="column">
            <a href="info1.php?ans=<?php echo $row['name'] ?>"><img src=<?php echo $row['photo']; ?> style='width:75%; height:130px;'></a>
            <br />
            Name:<input type="text" name="name" value="<?php echo $row['name'] ?> " readonly>
        </div>
    </div>
    <?php  }}

?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <hr>

    <h1>2012-2013</h1>
    <?php
     $q="SELECT * FROM `register` where batch='2012-2013' and status='Yes'";
     $res=mysqli_query($db,$q);
     if(mysqli_num_rows($res)>0){
         while( $row = mysqli_fetch_assoc($res)){
     ?>
    <div class="row">
        <div class="column">
            <a href="info1.php?ans=<?php echo $row['name'] ?>"><img src=<?php echo $row['photo']; ?> style='width:75%; height:130px;'></a>
            <br />
            Name:<input type="text" name="name" value="<?php echo $row['name'] ?> " readonly>
        </div>
    </div>
    <?php  }}

?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <hr>
    <h1>2013-2014</h1>
    <?php
     $q="SELECT * FROM `register` where batch='2013-2014' and status='Yes'";
     $res=mysqli_query($db,$q);
     if(mysqli_num_rows($res)>0){
         while( $row = mysqli_fetch_assoc($res)){
     ?>
    <div class="row">
        <div class="column">
            <a href="info1.php?ans=<?php echo $row['name'] ?>"><img src=<?php echo $row['photo']; ?> style='width:75%; height:130px;'></a>
            <br />
            Name:<input type="text" name="name" value="<?php echo $row['name'] ?> " readonly>
        </div>
    </div>
    <?php  }}

?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <hr>
    <h1>2014-2015</h1>
    <?php
     $q="SELECT * FROM `register` where batch='2014-2015' and status='Yes'";
     $res=mysqli_query($db,$q);
     if(mysqli_num_rows($res)>0){
         while( $row = mysqli_fetch_assoc($res)){
     ?>
    <div class="row">
        <div class="column">
            <a href="info1.php?ans=<?php echo $row['name'] ?>"><img src=<?php echo $row['photo']; ?> style='width:75%; height:130px;'></a>
            <br />
            Name:<input type="text" name="name" value="<?php echo $row['name'] ?> " readonly>
        </div>
    </div>
    <?php  }}

?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <hr>
    <h1>2015-2016</h1>
    <?php
     $q="SELECT * FROM `register` where batch='2015-2016' and status='Yes'";
     $res=mysqli_query($db,$q);
     if(mysqli_num_rows($res)>0){
         while( $row = mysqli_fetch_assoc($res)){
     ?>
    <div class="row">
        <div class="column">
            <a href="info1.php?ans=<?php echo $row['name'] ?>"><img src=<?php echo $row['photo']; ?> style='width:75%; height:130px;'></a>
            <br />
            Name:<input type="text" name="name" value="<?php echo $row['name'] ?> " readonly>
        </div>
    </div>
    <?php  }}

?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <hr>
    <h1>2016-2017</h1>
    <?php
     $q="SELECT * FROM `register` where batch='2016-2017' and status='Yes'";
     $res=mysqli_query($db,$q);
     if(mysqli_num_rows($res)>0){
         while( $row = mysqli_fetch_assoc($res)){
     ?>
    <div class="row">
        <div class="column">
            <a href="info1.php?ans=<?php echo $row['name'] ?>"><img src=<?php echo $row['photo']; ?> style='width:75%; height:130px;'></a>
            <br />
            Name:<input type="text" name="name" value="<?php echo $row['name'] ?> " readonly>
        </div>
    </div>
    <?php  }}

?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <hr>
    <h1>2017-2018</h1>
    <?php
     $q="SELECT * FROM `register` where batch='2017-2018' and status='Yes'";
     $res=mysqli_query($db,$q);
     if(mysqli_num_rows($res)>0){
         while( $row = mysqli_fetch_assoc($res)){
     ?>
    <div class="row">
        <div class="column">
            <a href="info1.php?ans=<?php echo $row['name'] ?>"><img src=<?php echo $row['photo']; ?> style='width:75%; height:130px;'></a>
            <br />
            Name:<input type="text" name="name" value="<?php echo $row['name'] ?> " readonly>
        </div>
    </div>
    <?php  
    }}

?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <hr>
    <h1>2018-2019</h1>
    <?php
     $q="SELECT * FROM `register` where batch='2018-2019' and status='Yes'";
     $res=mysqli_query($db,$q);
     if(mysqli_num_rows($res)>0){
         while( $row = mysqli_fetch_assoc($res)){
     ?>
    <div class="row">
        <div class="column">
            <a href="info1.php?ans=<?php echo $row['name'] ?>"><img src=<?php echo $row['photo']; ?> style='width:75%; height:130px;'></a>
            <br />
            Name:<input type="text" name="name" value="<?php echo $row['name'] ?> " readonly>
        </div>
    </div>
    <?php  
    }}
    if(isset($_GET['ans'])){
        echo "<script lang='javascript'> alert ('{$_GET['ans']}')</script>";
    }

?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <hr>
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