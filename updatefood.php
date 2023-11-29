<?php
include 'database.php';
$id=$_GET['upid'];
$sql = "Select * from food where fid=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row['fid'];
$name=$row['fname'];
$quantity=$row['fquantity'];
$rate=$row['frate'];
$categories=$row['fcategories'];
$status=$row['fstatus'];
if(isset($_POST['su']))
{
    $name=$_POST['un'];
    $quantity=$_POST['qu'];
    $rate=$_POST['ru'];
    $categories=$_POST['cat'];
    $status=$_POST['status'];
    $sql="update food set fid='$id',fname='$name',fquantity='$quantity',frate='$rate',fcategories='$categories',fstatus='$status'
    where fid='$id'";
    if(mysqli_query($con,$sql))
    {
        echo "<script>window.alert('item updated successfully')</script>";
            echo "<script>window.open('form5.php','_self')</script>";
        
    }
    else
    {
        echo "error".mysqli_error($con);
    }
    mysqli_close($con);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link type="text/css" rel="stylesheet" href="updatefodd.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
	.background{
    width: 100%;
    height: 100vh;
    background-image: url("images/img(9).jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    overflow: hidden;
}
</style>
</head>
<body>
    <div class="background">
        <div class="container">
            <form method="post">
                <div class="input-name">
                    <label for="un">Food Namne</label>
                    <input type="text" id="un" name="un" size="20" value=<?php echo $name;?>required><br>
                </div>
                <div class="input-name">
                    <label for="un">Quantity</label>
                    <input type="text" id="un" name="qu" size="20" value=<?php echo $quantity;?> required><br>
                </div>
                <div class="input-name">
                    <label for="un">RATE</label>
                    <input type="number" id="un" name="ru" size="20" value=<?php echo $rate;?> required><br>
                </div>
                <div class="input-name">
                    <label>CATEGORIES</label>
                    <select id="sk" name="cat" value=<?php echo $categories;?>>
                    <?php
                    $sql="Select * from categories";
                    $result=mysqli_query($con,$sql);
                    if($result)
                    {
                        while($row=mysqli_fetch_assoc($result))
                        {
                            $name=$row['cname'];
                            echo '<option>
                            <tr>
                            <td>'.$name.'</td>
                            </tr>
                            </option>';
                        }
                    }   
                    ?>
                    </select><br>
                </div>
                <div class="input-name">
                    <label>STATUS</label>
                    <select id="sk" name="status" value=<?php echo $status;?>>
                        <option>AVAILABLE</option>
                        <option>NOT AVAILABLE</option>
                    </select><br>
                </div>
                <div class="input-name">
                    <input type="submit" class="button" name="su" id="" value="Update">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
