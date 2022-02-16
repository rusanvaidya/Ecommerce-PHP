<?php
session_start();

?>
<!DOCTYPE html>
<html>
<title>HG_Administration</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/button.css">
<link rel="stylesheet" href="css/input.css">
<link rel="stylesheet" href="css/font.css">
<link rel="stylesheet" href="css/fieldset.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="images/logo.png" type="image/png" sizes="16x16">
<style>
html
{
  height:100%;
}
body
{
      background-color: #e5e84e;
      background-size: cover;
      background-repeat: no-repeat;
       background-attachment: fixed;
      font-family: "Times New Roman";
      color: white;
}
.logincontain {
    margin-top: 10%;
    overflow: hidden;
    background-color: white;
    width:30%;
    font-family: Arial, Helvetica, sans-serif;
    border-radius: 50px
}

</style>
<body>
<center>
  <div class="logincontain">
      <img src="images/logo.png" style="width:150px; margin-top:10px;"><br>
      <form method="POST">
      <input type="text" placeholder="username" name="username" style="width:auto"><br>
      <input type="password" placeholder="password" style="width:auto" name="password"><br>
      <input type="submit" value="LogIn" name="submit" style="margin-bottom:10px;" class="button-3">
    </form>
    </div>
</center>
</body>
</html>

<?php

include("db_conection.php");

if(isset($_POST['submit']))
{
    $user_name=$_POST['username'];
    $user_pass=$_POST['password'];

    $check_admin="select * from admin WHERE user_name='$user_name'AND user_pass='$user_pass'";
    $run=mysqli_query($dbcon,$check_admin);
    if(mysqli_num_rows($run))
    {
        echo "<script>window.open('viewcustomer.php','_self')</script>";

        $_SESSION['user']=$user_name;
    }
}
