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

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <title>Bharatesh BCA</title>
</head>
<style>
   
  body{
    font-family: sans-serif;
    background-color: whitesmoke;
   
  }
  #b{
    height:900px;
  }
  
/* form {
    
    height:580px;
    width:40%;
    margin-top:4%;
    background-color:white;
    margin-left:30%;
    box-shadow:0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
} */

table{
    
    font-weight: bold ;
    font-size: 20px;
    font-family: "Times New Roman", Times, serif;
    height:auto;
    width:30%;
    /* border:0.4px black solid; */
    background-color:white;
    /* margin-left:35%; */
    box-shadow:0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    margin-bottom:5%;
    
}
input[type=text]{
    border:none;
    font-size:20px;
    font-weight:bold 50%;
    color:rgb(79, 69, 82) ;
    
}
input[type=submit]{
    /* background-color:green; */
    width:40%;
    background-color: rgb(30, 175, 71);
    padding: 8px;
    border: 1px solid rgb(30, 175, 71);
    border-radius: 1px;
    box-sizing: border-box;
    font-size: 100%;
    color:white;
    margin-bottom:5%;
    /* font-weight: bold; */
    font-family: "Times New Roman", Times, serif;
}
input[type=submit]:hover{
    box-shadow:0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
 
}

h3{
    text-align:center;
}
#f1{
    /* background-color:lightgray; */
    height:auto;
    font-size:200%;
    font-weight: bold;
    font-family: "Times New Roman", Times, serif;
    /* margin-bottom:5%; */
}


li a {
        /* margin-top:10px;     */
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
    /* height:80px;     */
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
  h3{
      color:red;
      font-family: "Times New Roman", Times, serif;
      font-weight:bold;
  }
    </style>

<body>
<div id="b">
    <?php
// if(isset($_SESSION['msg']))
//  {
//      echo '<p class="message"> <font size="5" color="White"> <center> <i>';
//      echo $_SESSION['msg'];
//      echo "</i></center></font></p>";
//      unset($_SESSION['msg']);
//  }
include 'dbconn.php';
$q="SELECT * FROM `register` where email='".$_SESSION['id']."' and status='Yes'";
$res=mysqli_query($db,$q);
if(mysqli_num_rows($res)>0){
    while( $row = mysqli_fetch_assoc($res)){
       
?>

    <header class="header">
        <nav class="nav">
        <a href="index.php"><img src="./images/newlogo copy.png" style="width:70px; height:50px; margin-top:0.5%; margin-left:2%;"></a>
            <ul class="ul">
                <li><a href="find.php">Find Your Friends</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <br><br><br><br><br>
    <?php
   }
}
   else {   
    ?>
<header class="header">
        <nav class="nav">
        <a href="index.php"><img src="./images/newlogo copy.png" style="width:70px; height:50px; margin-top:0.5%; margin-left:2%;"></a>
            <ul class="ul">
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <br><br><br><br><br>
    <?php
    echo '<h3>To  find your collegemates, Wait for the principal`s confirmation..!!</h3>';  }
$q="SELECT * FROM `register` where email='".$_SESSION['id']."'";
$res=mysqli_query($db,$q);
if(mysqli_num_rows($res)>0){
    while( $row = mysqli_fetch_assoc($res)){
?>

    <header >
    <div id="f1">
        <center><i><strong>Hello <?php  echo $row['name'];?>
            </i></strong></center>
        <br>
        </div>
    </header>
    <div>
        <form action="edit2.php" method="POST" enctype="multipart/form-data">
            <center>
            <table>
                <tr>
                    <th>
                    <td><center><a href="uploadpic.php"><img src=<?php echo $row['photo']; ?>
                    style='width:50%; height:230px;  border-radius:70%;'> </a></center></td>
                    </th>
                </tr>
                <tr>
                    <th>
                    <td>Full Name:<input type="text" name="name" value="<?php echo $row['name'];?>" readonly></td>
                    </th>
                </tr>
                <tr>
                    <th>
                    <td>Email:<input type="text" name="email" value="<?php echo $row['email'];?>" readonly></td>
                    </th>
                </tr>
                <tr>
                    <th>
                    <td>Contact:<input type="text" name="contact" value="<?php echo $row['contact'];?>" readonly></td>
                    </th>
                </tr>
                <tr>
                    <th>
                    <td>Company:<input type="text" name="company" value="<?php echo $row['company'];?>" readonly></td>
                    </th>
                </tr>
                <tr>
                    <th>
                    <td>Designation:<input type="text" name="designation" value="<?php echo $row['designation'];?>"
                            readonly>
                    </td>
                    </th>
                </tr>
                <tr>
                    <th>
                    <td>Pass Out Year:<input type="text" name="year" value="<?php echo $row['batch'];?>" readonly></td>
                    </th>
                </tr>
                <tr>
                    <th>
                    <td>Current Working Place:<input type="text" name="place"
                            value="<?php echo $row['current_place'];?>" readonly></td>
                    </th>
                </tr>
                <tr>
                    <th>
                    <td><a href="edit2.php"><input type="submit" name="sub" value="Edit Profile"></a></td>
                    </th>
                </tr>
            </table>
            </center>
        </form>
    </div>
    <?php
    }}
    
  
    
    ?>
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
<?php
if(isset($_GET['ans'])){
    echo "<script lang='javascript'> alert ('{$_GET['ans']}')</script>";
}
?>