<?php
session_start();

if(!$_SESSION['email'])
{

    header("Location: login.php");
}

?>

<?php
$t_price=0;
$user=$_SESSION['email'];
include("db_conection.php");
$view_users_query="select * from users where user_email='$user'";
$run=mysqli_query($dbcon,$view_users_query);

while($row=mysqli_fetch_array($run))
{
    $p_id=$row[0];
    $p_name=$row[2];
    $p_quantity=$row[3];
    $p_price=$row[4];
    $user_status=$row[8];

?>

<?php
if($user_status=='shopping')
{
  echo "<script>window.open('gotocart.php','_self')</script>";
}
else if($user_status=='Confirmed')
{
  echo "<script>window.open('thankyou.php','_self')</script>";
}
else if($user_status=='Recieved')
{
  echo "<script>window.open('thankyou.php','_self')</script>";
}
else if($user_status=='Delivered')
{
  echo "<script>window.open('gotocart.php','_self')</script>";
}
?>
<?php } ?>
