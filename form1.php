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
            <div class="content">
                <!-- <div> -->
                    <section id="ManageCustomers">
                        <center>
                            <table cellspacing="7" cellpadding="9" border="6" bordercolor="darkgreen" color="darkgreen" height="200" width="500" align="center">
                                <thead>
                                    <tr>
                                        <th> Student ID </th>
                                        <th> Student NAME </th>
                                        <th> Student EMAIL </th>
                                        <th> Student NUMBER </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql="Select * from registration";
                                    $result=mysqli_query($con,$sql);
                                    if($result)
                                    {
                                        while($row=mysqli_fetch_assoc($result))
                                        {
                                            $id=$row['sid'];
                                            $name=$row['sname'];
                                            $email=$row['semail'];
                                            $number=$row['pnumber'];
                                            echo '<tr>
                                            <th scope="row">'.$id.'</th>
                                            <td>'.$name.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$number.'</td>
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
                <!-- </div> -->
    </div>
</body>
<!-- <script src="main.js"></script> -->
</html>