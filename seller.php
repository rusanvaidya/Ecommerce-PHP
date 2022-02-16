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
    $p_roll=$row[10];

?>

<?php
if($p_roll=='Seller')
{
  echo "<script>window.open('itemsupload.php','_self')</script>";
}
else if($p_roll=='Customer')
{
  echo "<script>window.open('admin_registration.php','_self')</script>";
}
?>
<?php } ?>
