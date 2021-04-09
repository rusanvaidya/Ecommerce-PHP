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
#on {
  height: 8px;
  width: 8px;
  background-color: green;
  border-radius: 50%;
  display: inline-block;
}

#off {
  height: 8px;
  width: 8px;
  background-color: red;
  border-radius: 50%;
  display: inline-block;
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

            <th>User Id</th>
            <th>User Name</th>
            <th>User E-mail</th>
            <th>User Phone</th>
        </tr>
        </thead>

        <?php
        include("db_conection.php");
        $view_users_query="select * from users where role='Seller'";
        $run=mysqli_query($dbcon,$view_users_query);

        while($row=mysqli_fetch_array($run))
        {
            $user_id=$row[0];
            $user_fname=$row[1];
            $user_lname=$row[2];
            $user_phone=$row[3];
            $user_email=$row[4];
            $user_status=$row[9];

        ?>

        <tr>
            <td>#<?php echo $user_id;  ?></td>
            <td>
              <?php
              if($user_status=='online')
              {
                echo '<span id="on"></span>';
              }
              else
              {
                echo '<span id="off"></span>';
              }
              ?>
            <?php echo "$user_fname $user_lname";  ?></td>
            <td><?php echo $user_email;  ?></td>
            <td><?php echo $user_phone;  ?></td>
        </tr>

        <?php } ?>

    </table>
        </div>
</div>
</body>
</html>
