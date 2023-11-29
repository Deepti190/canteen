<?php
include 'database.php';
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];

    $sql="delete from categories where cid=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "<script>window.alert('item deleted successfully')</script>";
        echo "<script>window.open('form2.php','_self')</script>";
    }
    else{
        die(mysqli_error($con));
    }
    mysqli_close($con);
}
?>