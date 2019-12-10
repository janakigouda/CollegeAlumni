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
    <link rel="stylesheet" href="./css/style.css">
    <title>Bharatesh BCA</title>
</head>

<body>
    <div id="b">
        <header class="header">
            <nav class="nav">
                <a href="index.php"><img src="./images/newlogo copy.png"
                        style="width:70px; height:50px; margin-top:0.5%; margin-left:2%;"></a>
                <ul class="ul">
                    <li><a href="udash.php">Back</a></li>
                </ul>
            </nav>
        </header>
        <br><br><br><br><br>
        <?php
include 'dbconn.php';
if(isset($_REQUEST['sub']))
{
$user= $_POST['name'];
$q = "SELECT * FROM `register` where name='$user' ";
$r = mysqli_query($db,$q);
if(mysqli_num_rows($r)>0)
{
    
     while( $row = mysqli_fetch_assoc($r))
     {
    ?>
        <form action="" method="POST" class="form-wrap">
            <h1>Edit Profile</h1>
            <hr><br>
            <label>Full name</label>
            <input name="name" placeholder="eg:Johann" type="text" pattern="[A-Za-z]+\[A-Za-z]+"
                value="<?php echo $row['name']; ?>" readonly><br>
            <label>Email</label>
            <input name="email" placeholder="eg:johannes@yaho.com" type="email"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php echo $row['email']; ?>"><br>
            <label>Contact</label>
            <input name="contact" placeholder="9999999999" type="text" maxlength="10" pattern="[0-9]{3}[0-9]{3}[0-9]{4}"
                value="<?php echo $row['contact']; ?>"><br>
            <label>Company</label>
            <input name="company" placeholder="company name" type="text" pattern="[A-Za-z]+"
                value="<?php echo $row['company']; ?>"><br>

            <label>Designation</label>
            <input name="designation" placeholder="software engineer" type="text" pattern="[A-Za-z]+"
                value="<?php echo $row['designation']; ?>"><br>

            <label>PassOut Year</label>
            <br>
            <td><select name="batch" type="text">
                    <option value="<?php echo $row['batch']; ?>">Select</option>
                    <option value="2003-2004">2003-2004</option>
                    <option value="2004-2005">2004-2005</option>
                    <option value="2005-2006">2005-2006</option>
                    <option value="2006-2007">2006-2007</option>
                    <option value="2007-2008">2007-2008</option>
                    <option value="2008-2009">2008-2009</option>
                    <option value="2009-2010">2009-2010</option>
                    <option value="2010-2011">2010-2011</option>
                    <option value="2011-2012">2011-2012</option>
                    <option value="2012-2013">2012-2013</option>
                    <option value="2013-2014">2013-2014</option>
                    <option value="2014-2015">2014-2015</option>
                    <option value="2015-2016">2015-2016</option>
                    <option value="2016-2017">2016-2017</option>
                    <option value="2017-2018">2017-2018</option>
                    <option value="2017-2018">2018-2019</option>
                </select>
            </td>
            <br>
            <label>Current Working Place</label>
            <input name="current_place" placeholder="Banglore" type="text" pattern="[A-Za-z]+" value="<?php echo $row['current_place']; ?>"><br>
            <!-- <label>Password</label>
        <input name="password" placeholder="abc123" type="password" required><br><br> -->

            <input type="submit" class="btn" name="sub1" value="Update">
        </form>

        <?php
    }
    ?>
        </tr>
        </form>
        </table>

        <?php
}
else{
    echo "error 1";
}

}

if(isset($_REQUEST['sub1']))
{ 
    include 'dbconn.php';
 $user=$_POST['name'];
 $email=$_POST['email'];
 $contact=$_POST['contact'];
 $company=$_POST['company'];
 $designation=$_POST['designation'];
 $batch=$_POST['batch'];
 $current_place=$_POST['current_place'];

// $x="UPDATE  `sslc` SET  `board` =  '$board' , `reg_or_sup` =  '$reg', `pass_year` =  '$pass' WHERE  `user`.`username` ='$user' LIMIT 1 ";


    $x="UPDATE  `register` SET `name` = '$user', `email` =  '$email',`contact` =  '$contact',`company` =  '$company',`designation` =  '$designation',`batch` =  '$batch',`current_place` =  '$current_place'
       WHERE  `name` ='$user' LIMIT 1" ;
    $res =  mysqli_query($db,$x);
    // header('location:udash.php');
    // }
    // else{ echo "error"; }    
    echo '<script language="javascript">document.location.href="udash.php?ans=updated sucessfully"</script>';
}

else 
{

}


?>
    </div>
    <footer class="w3-center w3-black w3-padding-64">

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
<style>
* {
    margin: 0;
    padding: 0;
}

body {

    font-family: sans-serif;
    background-color: hsl(0, 0%, 24%);
}

form {
    /* background-color:#3cb371; */
    width: 30%;
    /* padding: 40px 20px; */
    height:auto;
    margin-left: 35%;
    margin-bottom: 5%;
    /* position: fixed;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%); */

}

h1 {
    text-align: center;
    color: #f0f0f0;
    font-weight: normal;
    margin-bottom: 20px;
    font-weight: bold 50%;
    font-size: 200%;
    font-family: "Times New Roman", Times, serif;
}


/* Add padding to containers */
.container {
    padding: 14px;
}

input[type=text],
input[type=email],
input[type=password],
select[type=text] {
    width: 100%;
    padding: 8px;
    border: 1px solid #787878;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 2%;
    margin-bottom: 16px;
    resize: vertical;
    background-color: hsl(0, 0%, 24%);
    color: #f0f0f0;
    font-family: "Times New Roman", Times, serif;

}

input[type=text]:focus,
input[type=password]:focus,
select[type=text] :focus {
    /* background-color: #787878; */
    color: #f0f0f0;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 20px;
}

label  {
    font-size: 110%;
    color: white;
    font-weight: bold;
    font-family: "Times New Roman", Times, serif;
}
.f{
    color:steelblue;
    font-size: 115%;
    font-family: "Times New Roman", Times, serif;
}
    li a {
        margin-top:10px;
        font-size:14px;
        display: inline-block;
        color: black;
        text-align: center;
        padding:8px 10px;
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
    padding: 8px;
    border: 1px solid rgb(97, 236, 85);
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 110%;
    color:black;
    font-weight: bold;
    font-family: "Times New Roman", Times, serif;
  }
  </style>