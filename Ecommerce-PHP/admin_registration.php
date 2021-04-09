<?php
session_start();

if(!$_SESSION['email'])
{

    header("Location: home.php");
}

?>
<!DOCTYPE html>
<html>
<title>HG.com: Become Vendor</title>
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
<link rel="icon" href="images/logo.png" type="image/png" sizes="16x16">
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
  <div class="f-20">
      <h1>Become HamroGrocery Vendor</h1>
      <h2>Apply Now!</h2>
      </div>
                        <form role="form" method="post" action="uploaditem.php">
                              <div>
                                  <label class="f-20"for="cname">Company Name</label>
                                </div>
                                <div>
                                  <input  placeholder="Company name" name="cname" type="text" required>
                                </div>
                                 <div >
                                  <label class="f-20"for="description">Description</label>
                                  </div>
                                  <div>
                                  <textarea  placeholder="Description" name="description" required></textarea>
                                </div>
                                  <div >
                                <label class="f-20"for="URL">URL</label>
                                </div>
                                  <div >
                                    <input  placeholder="URL" name="url" type="text" value="" required>
                                  </div>
                                  <div >
                                      <label class="f-20"for="fax">Fax</label>
                                      </div>
                                        <div >
                                      <input  placeholder="Fax" name="fax" type="number" value="" required></div>
                                      <div >
                                            <label class="f-20"for="zip">Zip/postal code</label></div>
                                            <div>
                                            <input  placeholder="Zip/postal code" name="zip" type="text" value="" required></div>
                                            <br>
                                            <div>
                                 <input type="checkbox" id="Agree" required ><strong>Do you Agree The <a href="t&c.html" style="color:black">Terms And Condition.</a><strong>
                                 </div><br>
                                  <div >


                                <input class="button-blue" type="submit" value="Submit" name="register" >

                              </div>
                        </form>
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
if(isset($_POST['register']))
{
    $user_cname=$_POST['cname'];
    $user_description=$_POST['description'];
    $user_url=$_POST['url'];
    $user_fax=$_POST['fax'];
    $user_zip=$_POST['zip'];
    $user_email=$_SESSION['email'];

    $check_email_query="select * from company WHERE user_email='$user_email'";
    $run_query=mysqli_query($dbcon,$check_email_query);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
exit();
    }

    $check_url_query="select * from company WHERE user_url='$user_url'";
    $run_query1=mysqli_query($dbcon,$check_url_query);

    if(mysqli_num_rows($run_query1)>0)
    {
echo "<script>alert('Email $user_url is already exist in our database, Please try another one!')</script>";
exit();
    }

    $check_fax_query="select * from company WHERE user_fax='$user_fax'";
    $run_query2=mysqli_query($dbcon,$check_fax_query);

    if(mysqli_num_rows($run_query2)>0)
    {
echo "<script>alert('Email $user_fax is already exist in our database, Please try another one!')</script>";
exit();
    }

    $insert_user="insert into company (user_cname,user_description,user_email,user_url,user_fax,user_zip) VALUE ('$user_cname','$user_description','$user_email','$user_url','$user_fax','$user_zip')";
    if(mysqli_query($dbcon,$insert_user))
    {
        echo"<script>window.open(uploaditem.php','_self')</script>";
    }
$update_status=("UPDATE users SET role='Seller',role_button='on' where user_email = '$user_email' LIMIT 1");
$a = mysqli_query($dbcon,$update_status);
if (mysqli_affected_rows() == 1)
{
   echo"Thank you for Shopping";
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
