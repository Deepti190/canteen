<?php
session_start();
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
        // echo "<script>window.alert('item updated successfully')</script>";
            // echo "<script>window.open('form5.php','_self')</script>";
        
    }
    else
    {
        echo "error".mysqli_error($con);
    }
    mysqli_close($con);
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['purchase']))
    {
        $query1="INSERT INTO `order_manager`(`Student_Id`,`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES ('$_POST[stid]','$_POST[full_name]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
        if(mysqli_query($con,$query1))
        {
            $Order_Id=mysqli_insert_id($con);
            $query2="INSERT INTO `userorders`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
            $stmt=mysqli_prepare($con,$query2);
            if($stmt)
            {
                mysqli_stmt_bind_param($stmt,"isii",$Order_Id,$Item_Name,$Price,$Quantity);
                foreach($_SESSION['cart'] as $key => $values)
                {
                    $Item_Name=$values['Item_Name'];
                    $Price=$values['Price'];
                    $Quantity=$values['Quantity'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                echo"<script>
            alert('Order Placed');
                    
            window.location.href='clientpage.php';
            </script>";

            }
            else
            {
                echo"<script>
            alert('SQL Query Prepared Error');
                    
            window.location.href='mycart.PHP';
            </script>";

            }


        }
        else
        {
            echo"<script>
            alert('SQL Error');
                    
            window.location.href='mycart.PHP';
            </script>";


        }
    }

}
?>