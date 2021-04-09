<!DOCTYPE html>
<html>
<title>HG_Administration</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bar.css">
<link rel="stylesheet" href="css/button.css">
<link rel="stylesheet" href="css/modal.css">
<link rel="stylesheet" href="css/input.css">
<link rel="stylesheet" href="css/table.css">
<link rel="stylesheet" href="css/font.css">
<link rel="stylesheet" href="css/fieldset.css">
<link rel="stylesheet" href="css/dropdown.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="images/logo.png" type="image/png" sizes="16x16">
<style>
html
{
  height:100%;
}
.menu
{
  background-color: #b70c29;
  border-radius: 40px;
  font-family: "Times New Roman";
  padding: 12px 12px 12px 12px;
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
    <center>
      <img src="images/logo.png" style="width:150px;">
    </center>
  </div>
</header>
<br>
    <fieldset class="backfield">
      <section class="menu">
        &nbsp
        <div class="categories">
          <a href="viewcustomer.php" class="button f-20">View Customer</a>
        </div>
        <div class="categories">
          <a href="viewvendors.php" class="button f-20">View Seller</a>
        </div>
        <div class="categories">
          <a href="vieworders.php" class="button f-20">View Orders</a>
        </div>
        <div class="categories">
          <a href="viewfeedback.php" class="button f-20">View Feedback</a>
        </div>
        <div class="categories">
          <a href="viewordershistory.php" class="button f-20">Order History</a>
        </div>
        <div class="categories" style="float:right">
          <a href="adminlogout.php" class="button f-20"> Logout</a>
        </div>
      </section>
<br>

          <?php
          $getuser=$_GET['bill'];
          include("db_conection.php");
          $view_user="select * from users where user_email='$getuser'";
          $r=mysqli_query($dbcon,$view_user);

          while($row=mysqli_fetch_array($r))
          {
              $user_id=$row[0];
              $user_fname=$row[1];
              $user_lname=$row[2];
              $user_city=$row[7];
              $user_address=$row[6];

          ?>

            <table>
            <tr>
            <td><b>Customer ID:</b></td><td> #<?php echo $user_id ?><br></td>
          </tr>
          <tr>
            <td><b>Customer Name:</b></td><td><?php echo "$user_fname $user_lname"?><br></td>
          </tr>
          <tr>
            <td><b>Customer Address:</b></td><td><?php echo $user_address ?>,<?php echo $user_city ?><br></td>
          </tr>
          <?php } ?>
          <tr>
          <td></td>
          <td></td>
          </tr>
        </table>
          <table class="table" style="color:black;">
            <thead>
            <tr>

                <th>Order No.</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
            </thead>

            <?php
            $t_price=0;
            $o_no=0;
            $s=1;
            include("db_conection.php");
            $getuser=$_GET['bill'];
            $view_users_query="select * from cart_approval where p_email='$getuser'";
            $run=mysqli_query($dbcon,$view_users_query);

            while($row=mysqli_fetch_array($run))
            {
              $o_no=$o_no+$s;
              $p_name=$row[1];
              $p_quantity=$row[2];
              $p_price=$row[3];
              $t_price=$p_price+$t_price;

              ?>
        <tr>
            <td><?php echo $o_no;  ?></td>
            <td><?php echo $p_name;  ?></td>
            <td><?php echo $p_quantity;  ?></td>
            <td>Rs.<?php echo $p_price;  ?></td>
      </tr>

        <?php } ?>
        <tr>

            <td  colspan='3'><strong >Total</strong></th>
            <td  colspan='1'><strong >Rs.<?php echo $t_price;?></strong></th>
        </tr>
        <tr>

          <td  colspan='3'><strong>Delivery Charge</strong></th>
            <td  colspan='1'><strong>Rs.50</strong></th>
            </tr>

          </table>
            <b><h3>Total Price: Rs.<?php echo $t_price+50;?></h3></b>
            <a href="recieved.php?bill=<?php echo $getuser; ?>"><button class="button-3">Order Recieved</button></a><br><br>
            <a href="delivered.php?bill=<?php echo $getuser; ?>"><button class="button-3">Delivered</button></a><br><br>


    <br>
  </h2></fieldset></div>
</div>
</body>
</html>

<?php
include("db_conection.php");

if(isset($_POST['approve']))
{
    $user_email=$_SESSION['email'];
    $user_feedback=$_POST['feedback'];

    $check_feedback="select * from cart WHERE p_email='$user_email'";
    $run_fquery=mysqli_query($dbcon,$check_feedback);
     if(mysqli_num_rows($run_fquery)>0)
     {
       $s= ("DELETE FROM cart WHERE user_email = '$user_email' LIMIT 1");
       $ra = mysqli_query($dbcon,$s);
       if (mysqli_affected_rows() == 1)
       {
           echo "Thank you for feedback";
           echo"<script>window.open('viewbills.php','_self')</script>";
       }

     }
}
 ?>
