<?php
session_start();
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

<style>
* {
    margin: 0;
    padding: 0;
}

.a {

font-family: sans-serif;
height:auto;

}


.form-wrap {
width: 30%;
/* height:auto; */
margin-left:35%;
display:center;
margin-top:5%;
margin-bottom:5%;

background-color:hsl(0, 0%, 24%);
border-radius:2px;
}

h1 {
    text-align: center;
    color: #f0f0f0;
    /* font-weight: normal; */
    margin-bottom: 3%;
    /* font-weight: bold 50%; */
    font-size: 160%;
    font-family: "Times New Roman", Times, serif;
}


/* Add padding to containers */
.container {
    padding: 5%;
}

input[type=text],
input[type=email],
input[type=password] {
    width: 100%;
        padding: 2%;
        border: 1px solid #787878;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
        background-color: hsl(0, 0%, 24%);
        color: white;
        font-family: "Times New Roman", Times, serif;

}

input[type=text]:focus,
input[type=password]:focus {
    /* background-color: #787878; */
    color: #f0f0f0;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 5%;
}

label {
    font-size: 110%;
    color: white;
    font-weight: bold;
    font-family: "Times New Roman", Times, serif;
}
.f{
    color:#66FCF1;
    font-size: 110%;
    font-family: "Times New Roman", Times, serif;
}
.f:hover{
    color:whitesmoke;
}
    li a {
        margin-top:10px;
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
    /* height:80px; */
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
  .btn{
    background-color: rgb(131, 238, 131);
    width: 100%;
    padding: 2%;
    border: 1px solid rgb(97, 236, 85);
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 110%;
    color:black;
    font-weight: bold;
    font-family: "Times New Roman", Times, serif;
  }
</style>


</head>

<body style="background-color: whitesmoke;">
<div class="a">
    <header class="header">
    <a href="index.php"><img src="./images/newlogo copy.png" style="width:70px; height:50px; margin-top:0.5%; margin-left:2%;"></a>
    <ul class="ul">
        <nav class="nav">
            <ul class="ul">
                <li><a href="index.php">Home</a></li>
                <li><a href="reg.php">Register</a></li>
            </ul>
        </nav>
    </header>
   <br><br><br>

    <div class="form-wrap">
 
 

        <form action="login1.php" method="POST">
      
            <div class="container">
                <h1>USER LOGIN</h1>

                <hr>
                <label>Email</label>
                <input type="text" name="name" placeholder=" eg:abc@gmail.com" required><br>
                <label>Password</label>
                <input type="password"  name="password" required><br>
                <hr>


                <center><input type="submit" class="btn" value="Continue" name="login"></center>
                <br>
                &nbsp;
                <a class="f" href="reg.php"> Register Now</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="f" href="forget.php">Forget Password?</a>
            </div>

        </form>
</div>

<?php
 if(isset($_SESSION['msg']))
 {
     echo '<p class="message"> <font size="5" color="White"> <center> <i>';
     echo $_SESSION['msg'];
     echo "</i></center></font></p>";
     unset($_SESSION['msg']);
 }
 if(isset($_SESSION['reg']))
 {
     echo '<p class="message"> <font size="5" color="black"><center> <i>';
     echo $_SESSION['reg'];
     echo "</i> <center></font></p>";
     unset($_SESSION['reg']);
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
<?php
if(isset($_GET['ans'])){
    echo "<script lang='javascript'> alert ('{$_GET['ans']}')</script>";
}
?>