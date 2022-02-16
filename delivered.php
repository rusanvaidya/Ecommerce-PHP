<?php

include("db_conection.php");
$delete_email=$_GET['bill'];
$delete_query="delete from cart WHERE p_email='$delete_email'";
$run=mysqli_query($dbcon,$delete_query);
if($run)
{
    echo "<script>window.open('vieworders.php?deleted=user has been deleted','_self')</script>";
}
$update_action1=("UPDATE users SET action='Delivered' where user_email = '$delete_email' LIMIT 1");
$a = mysqli_query($dbcon,$update_action1);
if (mysqli_affected_rows() == 1)
{
   echo"Thank you for Shopping";
}
$update_action=("UPDATE transaction SET status_p='Delivered' where p_email = '$delete_email' LIMIT 1");
$a = mysqli_query($dbcon,$update_action);
if (mysqli_affected_rows() == 1)
{
  echo "<script>window.open('vieworders.php?deleted=user has been deleted','_self')</script>";
}
?>
