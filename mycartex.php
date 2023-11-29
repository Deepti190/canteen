<?php
include 'database.php';
$id=$_GET['sid'];
$sql = "Select * from registration where sid=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row['sid'];
$name=$row['sname'];
$email=$row['semail'];
$number=$row['pnumber'];
if(isset($_POST['purchase']))
{
    $id=$_POST['stid'];
    $name=$_POST['full_name'];
    $email=$_POST['address'];
    $number=$_POST['phone_no'];
    $sql="update registration set sid='$id',sname='$name',semail='$email',pnumber='$number'
    where sid='$id'";
    if(mysqli_query($con,$sql))
    {
        echo "<script>window.alert('item updated successfully')</script>";
            // echo "<script>window.open('form5.php','_self')</script>";
        
    }
    else
    {
        echo "error".mysqli_error($con);
    }
    mysqli_close($con);
}
?>