<?php
session_start();

if(!$_SESSION['email'])
{

    header("Location: login.php");
}

?>

<?php
$user=$_SESSION['email'];
include("db_conection.php");
$sql= ("UPDATE users SET status='offline' WHERE user_email = '$user' LIMIT 1");
$res = mysqli_query($dbcon,$sql);

$view_users_query="select * from users where user_email='$user'";
$run=mysqli_query($dbcon,$view_users_query);
while($row=mysqli_fetch_array($run))
{
    $status=$row[9];
?>
<?php
if($status=='offline')
{
  echo "<script>window.open('logout.php','_self')</script>";
}
?>
<?php } ?>
