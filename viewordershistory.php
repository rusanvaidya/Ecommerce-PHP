<?php
session_start();

if(!$_SESSION['user'])
{

    header("Location: adminlogin.php");
}

?>
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

    <table class="table" style="color:black;">
        <thead>

        <tr>

            <th>Bill No</th>
            <th>User E-mail</th>
            <th>View Orders</th>


        </tr>
        </thead>

        <?php

        include("db_conection.php");
        $view_users_query="select * from users";
        $run=mysqli_query($dbcon,$view_users_query);

        while($row=mysqli_fetch_array($run))
        {
            $bill=$row[0];
            $user_email=$row[4];



        ?>

        <tr>
            <td><?php echo $bill;  ?></td>
            <td><?php echo $user_email;  ?></td>
            <td><a href="viewbillshistory.php?bill=<?php echo $user_email ?>"><button class="button">View All Transaction</button></a>
            </tr>

        <?php } ?>

    </table>
        </div>
</div>
</body>

</html>
