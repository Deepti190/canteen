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
                <div class="content4">
                    <section id="ViewFood">
                        <center>
                            <table cellspacing="6" cellpadding="9" border="6" bordercolor="darkgreen" color="darkgreen" height="200" width="500" align="center">
                                <thead>
                                    <tr>
                                        <th> Food ID </th>
                                        <th> Food NAME </th>
                                        <th> Quantity </th>
                                        <th> Rate </th>
                                        <th> Categories </th>
                                        <th> Status </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                            <tbody>
                            <?php
                                    $sql="Select * from food";
                                    $result=mysqli_query($con,$sql);
                                    if($result)
                                    {
                                        while($row=mysqli_fetch_assoc($result))
                                        {
                                            $id=$row['fid'];
                                            $name=$row['fname'];
                                            $quantity=$row['fquantity'];
                                            $rate=$row['frate'];
                                            $categories=$row['fcategories'];
                                            $status=$row['fstatus'];
                                            echo '<tr>
                                            <th scope="row">'.$id.'</th>
                                            <td>'.$name.'</td>
                                            <td>'.$quantity.'</td>
                                            <td>'.$rate.'</td>
                                            <td>'.$categories.'</td>
                                            <td>'.$status.'</td>
                                            <td>
                                            
                                            <button><a href="updatefood.php?
                                            upid='.$id.'"><i class="fa fa-pencil"></i></a></button>
                                            
                                            <button><a href="deletefood.php?
                                            delid='.$id.'"><i class="fa fa-trash"></i></a></button></td>
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
    </div>
</body>
</html>