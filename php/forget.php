<?php
// include "dbconnect.php";


?>
<!DOCTYPE html>
<html>
   <head>
   <link rel="shortcut icon" type="image" href="/project/images/logo.png">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="/project/css/styy.css">
   </head>
   <body>
      <div class="header">
         <h1>Welcome to Ninja</h1>
         <p>Forget Password Form</p>
      </div>
      <div class="navbar">
         <!-- <a href="register.html" class="right">Register</a> -->
         <a href="../index.html" class="left">Home</a>
      </div>
      <div class="main">
         <center>
            <img src="../images/logo.png">
         </center>
         <div class="container">
            <form name="forgetForm" action="../php/forget.php" onsubmit="return validateForgetForm()" method="post">
               <div class="row">
                  <div class="col-25">
                     <i class="fa fa-envelope icon"></i>
                     <label for="femail"><b>Email</b></label>
                  </div>
                  <div class="col-75">
                     <input type="text" id="idemail" name="email" placeholder="Your email..">
                  </div>
               </div>
               <div class="row">
                  <div class="col-25">
                     <i class="fa fa-key icon"></i>
                     <label for="lname"><b>Password</b></label>
                  </div>
                  <div class="col-75">
                     <input type="password" id="idpass" name="password" placeholder="Your password..">
                  </div>
               </div>
               <br>
               <div class="row">
                  <input name="submit" type="submit" value="Submit">
               </div>
            </form>
         </div>
      </div>
      <div class="footer">
        <p>Ninjaz Malaysia Sdn. Bhd. (1259993-K) Copyright <span>&#169;</span> 2021 All Rights Reserved. Website
            developed by Man Nee</p>
    </div>

    <?php
         $conn = mysqli_connect("localhost","root","") or die("Unable to connect");
         mysqli_select_db($conn,"myshopdb");
      
      if(isset($_POST['submit'])){
        //code...
        $email = trim($_POST['email']);
        $password = trim(sha1($_POST['password']));
      if(mysqli_query($conn,"UPDATE tbl_user SET password='$password' WHERE email='$email'")){
    
        ?>
        <?php
         echo '<script type="text/javascript"> alert("Password Update Successfully")</script>';
         header("refresh:1; url=../html/login.html");
         ?>
         <?php
      }else{
        echo 'no result';
      }
    }
      ?>
   </body>
</html>