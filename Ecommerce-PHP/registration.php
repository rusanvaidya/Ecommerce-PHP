<?php
session_start();

?>



<!DOCTYPE html>
<html>
<title>HG.com: Registration</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bar.css">
<link rel="stylesheet" href="css/button.css">
<link rel="stylesheet" href="css/modal.css">
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
      background-image: url("images/thegrocerant.jpg");
      background-size: cover;
      background-repeat: no-repeat;
       background-attachment: fixed;
      font-family: "Times New Roman";
      color: white;
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
    <a href="home.php"><img src="images/logo.png" style="width:150px"></a>
    <a href="javascript:void(0)" class="button2" style="float:right;" onclick="document.getElementById('login').style.display='block'"><span><i class="fa fa-user margin-right"></i> LOGIN</span></a>
  </div>
</header>
<br>
<fieldset class="backfield">
                          <form role="form" method="post" action="registration.php">
                            <div>
                                    <label class="f-20"for="name">First Name</label>
                                    <input  placeholder="First name" name="fname" type="text" required>
                            </div>
                            <div>
                                    <label class="f-20"for="phone">Last Name</label>
                                    <input  placeholder="Last name" name="lname" type="text" required>
                                  </div>
                                  <div>
                                    <label class="f-20"for="phone">Phone</label>
                                    <input placeholder="Phone" name="phone" type="number" value="" required>
                                  </div>
                                  <div>
                                <label class="f-20"for="Email">E-mail</label>
                                    <input  placeholder="E-mail" name="email" type="text" required>
                                  </div>
                                  <div>
                                <label class="f-20"for="Password">Password</label>
                                    <input  placeholder="Password" name="pass" type="password" value="" required>
                                  </div>
                                  <div>
                                      <label class="f-20"for="rpassword">Confirm Password</label>
                                      <input  placeholder="Confirm Password" name="rpass" type="password" value="" required>
                                    </div>
                                    <div>
                                    <label class="f-20"for="City">City</label>
                                <select  name="city" required>
                                  <option value="Kathmandu">Kathmandu</option>
                                <option value="Lalitpur">Lalitpur</option>
                                  <option value="Bhaktapur">Bhaktapur</option>
                                <option value="Pokhara">Pokhara</option>
                                <option value="Nuwakot">Nuwakot</option>
                                  <option value="Chitwan">Chitwan</option>
                                <option value="Gorkha">Gorkha</option>
                                </select>
                              </div>
                              <div>
                                <label class="f-20"for="address">Address</label>
                                        <input  placeholder="Address" name="address" type="text" value="" required></div></div>
                                      </div>
                                      <div>
                                           <input type="checkbox" id="Agree" required ><strong>Do you Agree The <a href="t&c.html" style="color:black">Terms And Condition.</a><strong>
                                <input class="button-blue" type="submit" value="Sign Up" name="register" >
                              </div>
                              </form>


                  </fieldset>
<br>

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

<?php

include("db_conection.php");
if(isset($_POST['register']))
{
    $user_fname=$_POST['fname'];
    $user_lname=$_POST['lname'];
    $user_phone=$_POST['phone'];
    $user_pass=base64_encode($_POST['pass']);
    $user_rpass=base64_encode($_POST['rpass']);
    $user_email=$_POST['email'];
    $user_city=$_POST['city'];
    $user_address=$_POST['address'];
    $role='Customer';
    $role_b='off';

      if($user_pass!=$user_rpass)
    {
        echo"<script>alert('Two Password does not match, Please try again.')</script>";
exit();
    }

    $check_email_query="select * from users WHERE user_email='$user_email'";
    $run_query=mysqli_query($dbcon,$check_email_query);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
exit();
    }

    $check_phone_query="select * from users WHERE user_phone='$user_phone'";
    $run_query1=mysqli_query($dbcon,$check_phone_query);

    if(mysqli_num_rows($run_query1)>0)
    {
echo "<script>alert('Phone Number $user_phone is already used, Please try another one!')</script>";
exit();
    }

    $insert_user="insert into users (user_fname,user_lname,user_phone,user_pass,user_email,user_city,user_address,role,role_button) VALUE ('$user_fname','$user_lname','$user_phone','$user_pass','$user_email','$user_city','$user_address','$role','$role_b')";
    if(mysqli_query($dbcon,$insert_user))
    {
        echo"<script>window.open('welcome.php','_self')</script>";
    }
}
?>
