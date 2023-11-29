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
</head>

<body>
    <div class="container">
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
            </div>
        
            <!-- ===============order details============== -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Orders</h2>
                        <!-- <a href="#" class="btn">View All</a> -->
                    </div>
                    <div>
                        <div>
                            <div>
                                <div>
                                    <table border="6">
                                        <thead>
                                            <tr>
                                                <th scope="col">Student_Id</th>
                                                <th scope="col">order details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql="Select Order_Id,Student_Id from order_manager";
                                            $result=mysqli_query($con,$sql);
                                            if($result)
                                            {
                                                while($row=mysqli_fetch_assoc($result))
                                                //no of records as an associative array
                                                {
                                                    $id=$row['Student_Id'];
                                                    $order=$row['Order_Id'];
                                                    echo"
                                                    <tr>
                                                    <td>".$id."</td>
                                                    <td>
                                                            <table border='6'>
                                                            <thead>
                                                                <tr>
                                                                <th scope='col'>item_name</th>
                                                                <th scope='col'>price</th>
                                                                <th scope='col'>Quantity</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>";
                                                    $sql1="Select * from userorders WHERE Order_Id= $order";
                                                    $result1=mysqli_query($con,$sql1);
                                                    while($row=mysqli_fetch_assoc($result1))
                                                    {
                                                        echo"<tr>
                                                        <td>$row[Item_Name]</td>
                                                        <td>$row[Price]</td>
                                                        <td>$row[Quantity]</td>
                                                        </tr>";
                                                    }
                                                    echo'</tbody>
                                                    </table>
                                                    </td>
                                                    </tr>';
                                                }
                                            
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ==============New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Customers</h2>
                    </div>
                    <table>
                        <tbody>
                            <?php
                    $sql="Select sname,sid from registration";
                    $result=mysqli_query($con,$sql);
                    if($result)
                    {
                    while($row=mysqli_fetch_assoc($result)){
                    $id=$row['sid'];
                    $name=$row['sname'];
                    echo'<tr>
                    <td>
                        <h4> '.$name.' <br> <span>'.$id.'</span></h4>
                    </td>
                    </tr>';
                    
                    }
                    }
                    ?>
                    </tbody>
                    </table>
                </div>
            
            </div>
                
        </div>
     </div>
    
</body>
</html>