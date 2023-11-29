<?php
include 'database.php';
include "navbardashboard.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <div class="content2">
                <section id="ManageCategories">
                    <center>
                        <table border="6" cellspacing="7" cellpadding="9" bordercolor="darkgreen" color="darkgreen" height="200" width="500" align="center">
                            <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> CATEGORIES </th>
                                    <th> Status </th>
                                    <th> ACTION </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql="Select * from categories";
                                    $result=mysqli_query($con,$sql);
                                    if($result)
                                    {
                                        while($row=mysqli_fetch_assoc($result))
                                        {
                                            $id=$row['cid'];
                                            $name=$row['cname'];
                                            $status=$row['cstatus'];
                                            echo '<tr>
                                            <th scope="row">'.$id.'</th>
                                            <td>'.$name.'</td>
                                            <td>'.$status.'</td>
                                            <td>
                                            <button><a href="updatecategories.php?
                                            updateeid='.$id.'"><i class="fa fa-pencil"></i></a></button>
                                            <button><a href="deletecategories.php?
                                            deleteid='.$id.'"><i class="fa fa-trash"></i></a></button></td>
                                            </tr>';
                                        }
                                        mysqli_close($con);
                                    }   
                                ?>
                            </tbody>
                        </table>
                    </center>
                </section>
            </div>
        </div>
    </body>
</html>