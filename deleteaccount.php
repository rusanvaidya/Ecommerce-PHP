<?php
session_start();

if(!$_SESSION['email'])
{

    header("Location: home.php");
}

?>
<!DOCTYPE html>
<html>
<title>Welcome To HG Nepal</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bar.css">
<link rel="stylesheet" href="css/button.css">
<link rel="stylesheet" href="css/modal.css">
<link rel="stylesheet" href="css/input.css">
<link rel="stylesheet" href="css/font.css">
<link rel="stylesheet" href="css/dropdown.css">
<link rel="stylesheet" href="css/fieldset.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html
{
  height:100%;
}

textarea{
  width: auto;
    height: 100px;
  resize:none;
}

.grid {
    margin: 5px;
    border: 5px solid #ccc;
    float: left;
    width: 290px;
}

.grid img {
    width: 70%;
    height: 50%;
}

.desc {
    padding: 15px;
    text-align: center;
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
h1,h2,h4,h3,h5,h6
{
    font-family: "Times New Roman";
}

.menu
{
  background-color: #b70c29;
  border-radius: 40px;
  font-family: "Times New Roman";
  padding: 12px 12px 12px 12px;
}

</style>
<header>
  <div class="titlebar f-30">
    <a href="welcome.php"><img src="images/logo.png" style="width:150px"></a>
    <div style="float:right; padding-right:15px">
    <div class="dropdown" style="float:right;">
    <button href="#" class="dropbtn"><i class="fa fa-user"></i></button>
    <div class="dropdown-content">
    <a href="profile.php"><i class="fa fa-user-circle">Profile<h5><?php
    echo $_SESSION['email'];
    ?></h5></i></a>
    <a href="historycheck.php"><i class="fa fa-book">History</i></a>
    <a href="logout.php"><i class="fa fa-sign-out">Logout</i></a>
  </div>
</div>
  <a href="javascript:void(0)" style="margin-top:20px" onclick="document.getElementById('feedback').style.display='block'"><i class="fa fa-comments"></i></a>
  <a href="pending.php" style="margin-top:20px"><i class="fa fa-shopping-cart"></i></a>
</div>
  <center>
    <input type="text" placeholder="Search..." style="width:auto;">
    <button type="button" class="button-search"><i class="fa fa-search"></i></button>
  </center>
  </div>
</header>

<br>
<fieldset class="backfield">
<section class="menu">
  <div class="categories" style="width:auto;">
      <button class="btn-categories"><i class="fa fa-bars"></i> Shop By Categories <i class="fa fa-chevron-down"></i></button>
        <div class="categories-content">
          <a href="FGO.php">Food Grains & Masala</a>
          <a href="BCD.php">Bakery Cakes & Diary</a>
          <a href="SBF.php">Snacks & Branded Foods</a>
          <a href="Beverage.php">Beverage</a>
          <a href="F&V.php">Fruits & Vegetable</a>
          <a href="B&H.php">Beauty & Hygiene</a>
          <a href="C&H.php">Cleaning & Household</a>
          <a href="KGP.php">Kitchen,Garden and Pets</a>
          <a href="BC.php">Baby Care</a>
          <a href="G&W.php">Gourmet and World Food</a>
        </div>
      </div>
    &nbsp
    <div class="categories">
      <a href="howtobuy.php" class="button f-20"><i class="fa fa-question"></i> How to Buy?</a>
    </div>
<div class="categories">
  <a href="seller.php" class="button f-20"><i class="fa fa-vcard"></i> Become Seller</a>
</div>
<div class="categories">
  <a href="#" class="button f-20"><i class="fa fa-gift"></i> Offers Available </a>
</div>
<div class="categories">
  <a href="#" class="button f-20"><i class="fa fa-shopping-bag"></i> Best Sellers</a>
</div>
<div class="categories">
  <a href="#" class="button f-20"><i class="fa fa-shopping-bag"></i> New Arrivals</a>
</div>
</div>
</section>
<br>
                      <fieldset>
                        <h1><i class="fa fa-user-circle"></i><?php
                        echo $_SESSION['email'];
                        ?></h1><form method="POST" action="deleteaccount.php">
                              <label for="name"><b>Password</b></label>
                            <input placeholder="Password" name="pass" type="password" value="" required></div>

                              <input class="button-3" type="submit" value="Confirm Deletion" name="delete" >

</fieldset></fieldset>
<br>
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

<div id="feedback" class="modal">
  <div class="modal-content" style="padding:32px">
    <div>
      <i onclick="document.getElementById('feedback').style.display='none'" style="float:right;" class="fa fa-remove black-button"></i>
      <h2 style="color:black"><i class="fa fa-comments"></i> Feedback</h2>
      <form method="POST" action="welcome.php">
        <p>For Our Betterment</p>
      <p><textarea placeholder="Give Us Feedback..." name="feedback"></textarea><br>
      <button type="submit" class="button-blue" name="fsubmit">Submit</button>
     </form>
    </div>
  </div>

                      </body>

                      </html>

                      <?php
                      include("db_conection.php");

                      if(isset($_POST['fsubmit']))
                      {
                          $user_email=$_SESSION['email'];
                          $user_feedback=$_POST['feedback'];

                          $check_feedback="select * from feedback WHERE user_feedback=' '";
                          $run_fquery=mysqli_query($dbcon,$check_feedback);
                           if(mysqli_num_rows($run_fquery)>0)
                           {
                             $s= ("UPDATE feedback SET user_feedback='$user_feedback',user_email = '$user_email' LIMIT 1");
                             $ra = mysqli_query($dbcon,$s);
                             if (mysqli_affected_rows() == 1)
                             {
                                 echo "Thank you for feedback";
                             }

                           }
                           else
                           {
                              $insert_feedback="insert into feedback (user_feedback,user_email) VALUE ('$user_feedback','$user_email')";
                              $ra = mysqli_query($dbcon,$insert_feedback);
                              if (mysqli_affected_rows() == 1)
                              {
                                 echo"Thank you for Feedback";
                              }
                            }
                      }
                       ?>

<?php

include("db_conection.php");

if(isset($_POST['delete']))
{
    $user_pass=base64_encode($_POST['pass']);
    $user_email=$_SESSION['email'];

    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";
    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
        $sql= ("DELETE FROM users WHERE user_email = '$user_email' AND user_pass = '$user_pass'  LIMIT 1");
        $res = mysqli_query($dbcon,$sql);
        if (mysqli_affected_rows() == 1)
        {
            echo "your account has been deleted";
            echo "<script>window.open('home.php','_self')</script>";
        }
        else
        {
          echo "invalid username and password";
        }
        echo "<script>window.open('home.php','_self')</script>";
    }
    else
    {
        echo "<script>alert('Password is incorrect!')</script>";
    }
}
?>
