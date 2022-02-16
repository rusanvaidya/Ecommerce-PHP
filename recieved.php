<?php

include("db_conection.php");
$delete_email=$_GET['bill'];
$delete_query="delete from cart WHERE p_email='$delete_email'";
$run=mysqli_query($dbcon,$delete_query);
if($run)
{
    echo "<script>window.open('vieworders.php?deleted=user has been deleted','_self')</script>";
}
$user_status='Recieved';
$update_status=("UPDATE users SET action='$user_status' where user_email = '$delete_email' LIMIT 1");
$a = mysqli_query($dbcon,$update_status);
if (mysqli_affected_rows() == 1)
{
   echo"Thank you for Shopping";
}

?>
