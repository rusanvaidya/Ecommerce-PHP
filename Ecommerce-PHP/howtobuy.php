<?php
session_start();

if(!$_SESSION['email'])
{

    header("Location: home.php");
}

?>
<!DOCTYPE html>
<html>
<title>HG.com: How To Buy</title>
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
  width: 100%;
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
    <a href="logoutprocessing.php"><i class="fa fa-sign-out">Logout</i></a>
  </div>
</div>
  <a href="javascript:void(0)" style="margin-top:20px" onclick="document.getElementById('feedback').style.display='block'"><i class="fa fa-comments"></i></a>
  <a href="pending.php" style="margin-top:20px"><i class="fa fa-shopping-cart"></i></a>
</div>
  <center>
    <form method="POST">
    <input type="text" placeholder="Search..." name="searchtext" style="width:auto;">
    <button type="submit" name="search" class="button-search"><i class="fa fa-search"></i></button>
</center>
</form>
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
  <a href="newoffer.php" class="button f-20"><i class="fa fa-gift"></i> Offers Available </a>
</div>
<div class="categories">
  <a href="newarrival.php" class="button f-20"><i class="fa fa-shopping-bag"></i> New Arrivals</a>
</div>
<div class="categories">
  <button class="btn-categories"><i class="fa fa-users"></i> Customer Support <i class="fa fa-chevron-down"></i></button>
  <div class="categories-content" style="margin-right:20px">
    <a href="#">
       <i class="fa fa-map-marker"></i>
       Our Location:<br>
       Balkumari,Lalitpur
    </a>
    <a href="#">
      <i class="fa fa-envelope"></i>
        Our email-id:<br>
        admin@hamrogrocery.com
    </a>
    <a href="#">
      <i class="fa fa-phone"></i>
        Phone Number:<br>
        +9779851051515
    </a>
    <a href="#">
      <i class="fa fa-clock-o"></i>
        Opening Hours:<br>
        9:00 AM to 6:00 PM
    </a>
</div>
</div>
</section>
  <div class="f-30" style="color:red">
    <br>How to Buy Online from hamogrocery.Com?
  </div>
  <p>
Here you will learn to order online at hamrogrocrey.com
<br><br>
Hamro Grocery offers grocery products for you to buy from grocery suppliers in Nepal.
<br><br>
By sourcing directly from the manufacturers and importers; we make sure you get the products at lowest possible price.
<br><br>
<br>
So lets start buying products from hamrogrocery.com and make our life easier.
<br>
<br>
To order online please follow the steps below, here we assume that you are in the product detail page. If you are looking to browse products go to www.hamogrocery.com by using internet browsers such as Google Chrome, Mozilla Firefox, Opera etc.
<br><br>
</p>

<div class="f-30"><b>1. Visit the product detail page>>></b></div>
<br>
2. There you will see button "ADD TO CART" <i class="fa fa-shopping-cart"></i> and "BUY NOW". Click "<i class="fa fa-shopping-cart"></i>" if you like to order more than one items and specify their quantity, or "BUY NOW" if you just want to order this product.
<br><br>
3. If you have a hamogrocery.Com login using your email address and hamogrocery.Com Password or click "Create a New Account", button and fill the form to become a hamogrocery.Com member.
<br><br>
4. Choose Your Order according to the categories provided.
<br><br>
5. Now you need to choose delivery options as per your need, we offer multiple delivery options such as Express Delivery, Next Day Delivery & Free Delivery. You can also enter your preferred delivery date.
<br><br>
6.  We have only "Cash On Delivery", option available for Kathmandu Valley and other City Areas.
<br><br>
7. Please relax, and wait for your sales staff to call and confirm your order.
<br><br>
8. Once confirmed, we will get it delivered to your doorstep within mentioned time.
<br><br>
<br><br>
<br><br>
or,
You can also order products from hamogrocery.Com through our website or by calling our customer care center.
<br><br>
<br><br>
Call Us at: +977-1-9841414141
<br><br>
Thank you for shopping with hamogrocery.Com, please do not forget to send us your feedback:
<br><br>
<br><br>

How was your experience shopping with us?

</fieldset>
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
          $insert_feedback="insert into feedback (user_feedback,user_email) VALUE ('$user_feedback','$user_email')";
          $ra = mysqli_query($dbcon,$insert_feedback);
          if (mysqli_affected_rows() == 1)
          {
             echo"Thank you for Feedback";
          }
  }
   ?>
   <?php
   include("db_conection.php");

   if(isset($_POST['search']))
   {
      $user_email=$_SESSION['email'];
      $search=$_POST['searchtext'];

      $check_email="select * from search WHERE email='$user_email'";
      $run_fquery=mysqli_query($dbcon,$check_email);
       if(mysqli_num_rows($run_fquery)>0)
       {
         $s= ("UPDATE search SET item='$search' WHERE email = '$user_email' LIMIT 1");
         $ra = mysqli_query($dbcon,$s);
         if (mysqli_affected_rows() == 1)
         {
           echo "<script>window.open('search.php?item=$search','_self')</script>";
         }

       }
       else
       {
          $insert_search="insert into search (item,email) VALUE ('$search','$user_email')";
          $ra = mysqli_query($dbcon,$insert_search);
          if (mysqli_affected_rows() == 1)
          {
            echo "<script>window.open('search.php?item=$search','_self')</script>";
          }
        }
        $check_search="select * from search WHERE item='$search'";
        $run=mysqli_query($dbcon,$check_search);
        if(mysqli_num_rows($run))
        {
          echo "<script>window.open('search.php?item=$search','_self')</script>";
        }
   }
   ?>
