<?php
session_start();

?>



<!DOCTYPE html>
<html>
<title>HG.com: Forgot Password</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bar.css">
<link rel="stylesheet" href="css/button.css">
<link rel="stylesheet" href="css/modal.css">
<link rel="stylesheet" href="css/input.css">
<link rel="stylesheet" href="css/font.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="images/logo.png" type="image/png" sizes="16x16">
<style>
html
{
  height:100%;
}

.social
{
      color:black;
      background-color: white;
      border-radius: 40px;
      font-family: "Times New Roman";
      align: middle;
}

.button-0 {
    background-color: white;
    border: none;
    color: black;
    padding: 10px 15px;
    text-align: center;
    border-radius: 5px;
    text-decoration: none;
    display: inline-block;
    font-size: 28px;
    margin: -215px 0px 0px 0px;
    cursor: pointer;
}
.button-0:hover {background-color: lightgrey}

.button-0:active {
  background-color: lightgrey;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

body
{
      background-image: url("images/thegrocerant.jpg");
      background-size: cover;
      background-repeat: no-repeat;
       background-attachment: fixed;
      font-family: "Times New Roman";
      color: white;
}

.footer
{
      background-color: black;
      color:white;
      position: fixed;
      left: 0;
      bottom: 0;
      font-family: "Times New Roman";
      text-align: center;
      padding: 5px;
}

h1,h2,h4,h3,h5,h6
{
    font-family: "Times New Roman";
}

</style>
<header>
  <div class="titlebar">
    <a href="home.php" class="button-5"><img src="images/logo.png" style="width:150px"></a>
    <a href="javascript:void(0)" class="button2" style="float:right;" onclick="document.getElementById('login').style.display='block'"><span><i class="fa fa-user margin-right"></i> LOGIN</span></a>
  </div>
</header>


					<h1 class="f-30">Enter Your Email</h1>
                    <form role="form" method="post" action="forgot.php">
                                <input placeholder="E-mail" name="email" type="text" style="width:50%" ><br>
                                <input type="submit" value="Send Code" name="forgot" class="button-blue">
										</form>

<div id="login" class="modal">
  <div class="modal-content" style="padding:32px">
    <div>
      <i onclick="document.getElementById('login').style.display='none'" style="float:right;" class="fa fa-remove black-button"></i>
      <h2 style="color:black"><i class="fa fa-user"></i> Login To Your Account</h2>
      <form role="form" method="post" action="home.php">
                  <input placeholder="E-mail" name="email" type="text" >
                  <input placeholder="Password" name="pass" type="password" value="">
                  <input class="button-b" type="submit" value="LogIn" name="login" >
              </form>
      <br><br>
      <a href="forgot.php" style="color:black">forgot your password?</a>
    </div>
  </div>
</div>

<fieldset class="social">
  <center>
  <p class="f-30">Follow us on:</p><br>
  <a href="https://www.facebook.com" class="button-0"><i class="fa fa-facebook"></i></a>
  <a href="https://www.instagram.com" class="button-0"><i class="fa fa-instagram"></i></a>
  <a href="https://www.twitter.com" class="button-0"><i class="fa fa-twitter"></i></a>
  <p class="f-30">We Accept:</p><br>
  <a href="#" class="button-0"><i class="	fa fa-money"></i> Only Cash On Delivery</a>

</center>
</fieldset>

</body>
</html>


</body>

</html>

<?php

include("db_conection.php");

if(isset($_POST['forgot']))
{
    $user_email=$_POST['email'];
    $check_user="select * from users WHERE user_email='$user_email'";
    $run=mysqli_query($dbcon,$check_user);
    if(mysqli_num_rows($run))
    {
        echo "<script>window.open('recover.php','_self')</script>";

        $_SESSION['email']=$user_email;

    }
    else
    {
      echo "<script>alert('Email is incorrect!')</script>";
    }
}
?>
