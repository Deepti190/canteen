<?php
include 'database.php';
include "navbardashboard.php";
// *************food backened*****************
if(isset($_POST['su']))
{
    $name=$_POST['un'];
    $quantity=$_POST['qu'];
    $rate=$_POST['ru'];
    $categories=$_POST['cat'];
    $status=$_POST['status'];
// ========for inserting ann image=====================
    $img=$_FILES['file'];
    $imgfilename = $img['name'];
    $imgfiletemp = $img['tmp_name'];
    $filename_separate=explode('.',$imgfilename);
    $file_extension=strtolower(end($filename_separate));
    $extension=array('jpg','jpeg','png');
    if(in_array($file_extension,$extension))
    {
        $upload_image='images/'.$imgfilename;
        move_uploaded_file($imgfiletemp,$upload_image);
        $sql="insert into food(fname,fquantity,frate,fcategories,fstatus,img) 
        values('$name','$quantity','$rate','$categories','$status','$upload_image')";
        if(mysqli_query($con,$sql))
        {
            echo "<script>window.alert('data inserted successfully')</script>";
            echo "<script>window.open('form4.php','_self')</script>";
        }
        else
        {
	        echo "error".mysqli_error($con);
        }
    mysqli_close($con);

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form1.css">
    <!-- <link rel="stylesheet" href="navbardash.css"> -->
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
            </div>
            <div class="content5">
                <section id="AddFood">
                    <form method="post" enctype="multipart/form-data">
                        <div class="input_field">
                            <label>Food Name</label><input type="text" id="un" name="un" size="20"
                                required><br>
                                </div>
                                <div class="input_field">
                            <label>Quantity</label><input type="text" id="un" name="qu" size="20" required><br>
                                </div>
                                <div class="input_field">
                            <label>Rate</label><input type="number" id="un" name="ru" size="20" required><br>
                                </div>
                                <div class="input_field">
                            <label>Categories</label>
                            <select id="sk" name="cat">
                            
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
                                        mysqli_close($con);
                                    }   
                                ?>
                            </select><br/>
                        </div>
                        <div class="input_field">
                            <label>Status</label>
                            <select id="sk" name="status">
                                <option name="AVAILABLE" value="AVAILABLE">AVAILABLE</option>
                                <option name="NOT AVAILABLE" value="NOT AVAILABLE">NOT AVAILABLE</option>
                            </select><br>
                        </div>
                        <div class="input_field">
                            <label>Image</label>
                            <input type="file" name="file" id="">
                        </div>
                        <input type="submit" class="button" name="su" id="" value="Add Food">
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>
</html>