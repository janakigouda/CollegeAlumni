<?php
session_start();
if($_SESSION['name']=="")
{
header("location:princi.php");
}
?>
<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Bharatesh BCA</title>
</head>
<style>

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
table{
    margin-left:15%;
    margin-right:15%;
    /* margin-top:10%; */
    width:70%;
    
}
table  th {
            color: white;
            font-size: 140%;
            height:5%;
            background-color:green;
            /* font-weight: bold; */
            /* width:80%; */
            text-align:center;
            }
            td{
                text-align:center;
                height:7%;
                font-size: 110%;
            }
            
table td, table th {
  border: 0.5px solid #ddd;
  /* padding: 1%    ; */
  font-family: "Times New Roman", Times, serif;
}

table tr:nth-child(even){
    background-color: LightGray;
    }

table tr:hover {
    background-color: gray;
    }

.f1{
    /* background-color:lightgray; */
    height:auto;
    font-size:200%;
    font-weight: bold;
    font-family: "Times New Roman", Times, serif;
    /* margin-bottom:5%; */
}
#i{
    /* margin-left:50px; */
    /* margin-top:5%;  */
}
.a {
/* margin-top:80px; */
font-family: sans-serif;
width:100%;
height:auto;
margin-bottom:5%;

}
</style>

<body style="background-color: whitesmoke;">
<div class="a">
<header class="header">
        <nav class="nav">
        <a href="index.php"><img src="./images/newlogo copy.png" style="width:70px; height:50px; margin-top:0.5%; margin-left:2%;"></a>
            <ul class="ul">
                <li><a href="pchange.php">Change Password</a></li>
                <li><a href="find1.php">Students List</a></li>
                <li><a href="plogout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
<br><br><br><br>

   
    
    <div class="f1">
    
        <center><i id="i"><strong>Hello <?php echo $_SESSION['name'] ?>
            </i></strong></center>
        <br>
   
    </div>
<?php   
$u=$_SESSION['id'];

include 'dbconn.php';

$q = "SELECT * FROM register";
$r = mysqli_query($db,$q);
if(mysqli_num_rows($r)>0)
{
    ?>
    <table> 
        <th>Name</th>
        <th>Pass Out Year</th>
        <th>Company</th>
        <th>Status</th>
        
    <?php while( $row = mysqli_fetch_assoc($r)){
    ?>
    
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['batch']; ?></td>
            <td><?php echo $row['company']; ?></td>
            <td><a href="approval.php?ans=<?php echo $row['name']; ?>"><?php echo $row['status']; ?></a> </td>

    
<?php
    }
    ?>
    </tr>
    </table>
<?php
}
else{
    echo "error";
}

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
