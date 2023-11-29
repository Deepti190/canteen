<?php
include 'database.php';
$id=$_GET['updateeid'];
$sql = "Select * from categories where cid=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['cname'];
$status=$row['cstatus'];

if(isset($_POST['submit']))
    {
    $name=$_POST['un'];
    $status=$_POST['sta'];

    $sql="update categories set cid='$id',cname='$name',cstatus='$status'
    where cid='$id'";
    if(mysqli_query($con,$sql))
    {
        echo "updated successfully";
        header('location:form2.php');

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
<link type="text/css" rel="stylesheet" href="updatecategories.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
	.background{
    width: 100%;
    height: 100vh;
    background-image: url("images/img(10).jpg");
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
                        <label for="un">Category Name</label>
                        <input type="text" id="un" name="un" value=<?php echo $name;?> size="20"required><br>
                    </div>
                    <div class="input-name">
                        <label>STATUS</label>
                        <select id="sk"name="sta" >
                            <option>AVAILABLE</option>
                            <option>NOT AVAILABLE</option>
                        </select><br>
                    </div>
                    <div class="input-name">
                        <input type="submit" class="button" name="submit" id="" value="Update">
                    </div>                     
                </form>
            </div>
        </div>
    </body>
</html>
