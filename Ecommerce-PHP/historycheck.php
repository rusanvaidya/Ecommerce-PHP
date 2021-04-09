<?php
session_start();

if(!$_SESSION['email'])
{

    header("Location: home.php");
}

?>
<!DOCTYPE html>
<html>
<title>HG.com: History</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bar.css">
<link rel="stylesheet" href="css/button.css">
<link rel="stylesheet" href="css/table.css">
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
<br><br>

<table>
<tr>
      <?php
      include("db_conection.php");
      $user=$_SESSION['email'];
      $view_user="select * from users where user_email='$user'";
      $r=mysqli_query($dbcon,$view_user);

      while($row=mysqli_fetch_array($r))
      {
          $user_id=$row[0];
          $user_fname=$row[1];
          $user_lname=$row[2];
          $user_city=$row[6];
          $user_address=$row[7];

      ?>

        <td><b>Customer ID:</b></td><td> #<?php echo $user_id ?><br></td>
      </tr>
      <tr>
        <td><b>Customer Name:</b></td><td><?php echo "$user_fname $user_lname" ?><br></td>
      </tr>
      <tr>
        <td><b>Customer Address:</b></td><td><?php echo $user_address ?>,<?php echo $user_city ?><br></td>
      </tr>
<?php } ?>



        </table>

        <table class="table" style="table-layout: fixed">
            <thead>

            <tr>

                <th>S No.</th>
                <th>Date/Time</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
            </thead>

            <?php
            $id=1;
            $o_no=0;
            include("db_conection.php");
            $getuser=$_SESSION['email'];
            $view_users_query="select * from transaction where p_email='$getuser'";
            $run=mysqli_query($dbcon,$view_users_query);

            while($row=mysqli_fetch_array($run))
            {
              $o_no=$o_no+$id;
              $p_name=$row[1];
              $p_quantity=$row[2];
              $p_price=$row[3];
              $date=$row[6];

              ?>
        <tr>
            <td><?php echo $o_no;  ?></td>
          <td><?php echo $date;  ?></td>
            <td><?php echo $p_name;  ?></td>
            <td><?php echo $p_quantity;  ?></td>
            <td>Rs.<?php echo $p_price;  ?></td>
      </tr>

        <?php } ?>

          </table>
    <br>
  </h2></fieldset>
<br>
</body>
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
