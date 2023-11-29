<?php
include 'database.php';
if(isset($_GET['delid']))
{
    $id=$_GET['delid'];
    $sql="delete from food where fid=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "<script>window.alert('item deleted successfully')</script>";
        echo "<script>window.open('form5.php','_self')</script>";
    }
    else{
        die(mysqli_error($con));
    }
    mysqli_close($con);
}
?>