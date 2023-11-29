<?php
include 'database.php';
include "navbardashboard.php";
// ****************categories backened****************
if(isset($_POST['submit']))
{
    $name=$_POST['un'];
    $status=$_POST['sta'];

    $sql="insert into categories(cname,cstatus) values('$name','$status')";
    if(mysqli_query($con,$sql))
    {
        echo "<script>window.alert('item added successfully')";
        echo "<script>window.open('form3.php','_self')</script>";
    }

    else
    {
        echo "error".mssqli_error($con);
    }
    mysqli_close($con);
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
            
            <div class="content3">
                <section id="AddCategories">
                    <form method="post">
                        <div class="input_field">
                            <label for="un">Category Name</label><input type="text" id="un" name="un" size="20" required><br>
                        </div>
                        <div class="input_field">
                            <label>STATUS</label>
                            <select id="sk" name="sta">
                                <option value="AVAILABLE">AVAILABLE</option>
                                <option value="NOT AVAILABLE">NOT AVAILABLE</option>
                            </select><br>
                        </div>
                        <input type="submit" class="button" name="submit" id="" value="Add">
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>
</html>