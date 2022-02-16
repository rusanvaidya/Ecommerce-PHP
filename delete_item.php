<?php
include("db_conection.php");
$delete_id=$_GET['del'];
$delete_query="DELETE FROM cart WHERE product_id='$delete_id' LIMIT 1";
$run=mysqli_query($dbcon,$delete_query);
if($run)
{
    echo "<script>window.open('gotocart.php?deleted=user has been deleted','_self')</script>";
}
$delete_query1="DELETE FROM transaction WHERE product_id='$delete_id' LIMIT 1";
$run1=mysqli_query($dbcon,$delete_query1);
if($run1)
{
    echo "<script>window.open('gotocart.php?deleted=user has been deleted','_self')</script>";
}
$delete_query2="DELETE FROM cart_approval WHERE product_id='$delete_id' LIMIT 1";
$run2=mysqli_query($dbcon,$delete_query2);
if($run2)
{
    echo "<script>window.open('gotocart.php?deleted=user has been deleted','_self')</script>";
}
?>
