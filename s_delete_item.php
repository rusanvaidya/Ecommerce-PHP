<?php
include("db_conection.php");
$delete_id=$_GET['del'];
$delete_query="DELETE FROM upload WHERE id='$delete_id' LIMIT 1";
$run=mysqli_query($dbcon,$delete_query);
if($run)
{
    echo "<script>window.open('itemsupload.php?deleted=user has been deleted','_self')</script>";
}
?>
