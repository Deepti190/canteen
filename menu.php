<?php
include 'database.php';
include "nav.PHP";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.CSS">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Document</title>
</head>
<body>
    <!-- dashboard part -->
    <div class="dashboard">
       
        <h3 class="dashboard-title">MENU </h3>  
        <h3><a href="clientpage.php">< goback</a></h3> 
        <!--<input type="button" value="< Go back" class="btn">--> 
        <div class="dashboard-content">
            <?php
            $sql="Select * from food";
            $result=mysqli_query($con,$sql);
            if($result)
            {
                while($row=mysqli_fetch_assoc($result))
                {
                    $name=$row['fname'];
                    $rate=$row['frate'];
                    $img=$row['img'];
                    echo '
                    <form action = "manage_cart.PHP" method = "POST">
                        <div class="dashboard-card">
                            <img class="card-image" src="'.$img.'">
                            <div class="card-detail">
                                <h4>'.$name.' <span>'.$rate.'-</span></h4>
                                <p class="card-time"><span class="icon"></span></p>
                                <input type = "hidden" name = "Item_Name" value = "'.$name.'"/>
                                <input type = "hidden" name = "Price" value = "'.$rate.'"/>
                                <button type = "submit" name = "ADD_TO_CART">ADD TO CART</button>
                            </div>
                        </div>
                    </form >';
                }
                mysqli_close($con);
            }   
            ?>        
        </div>
    </div>
</body>
</html>