<?php

include("db_conection.php");
$delete_email=$_GET['del'];
$delete_query="delete  from users WHERE user_email='$delete_email'";
$run=mysqli_query($dbcon,$delete_query);
if($run)
{
    echo "<script>window.open('viewusers.php?deleted=user has been deleted','_self')</script>";
}

?>
