<?php
session_start();
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nav.css">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Document</title>
</head>
<body>
<div class="sidebar">
        <div class="sidebar-menu">
            <span class="icon"><ion-icon name="home"></ion-icon></span>
            <a href="clientpage.php">Home</a>
        </div>
        <div class="sidebar-menu">
            <span class="icon"><ion-icon name="menu-outline"></ion-icon></span>
            <a href="menu.php">Menu</a>
        </div>
        <div class="sidebar-menu">
            <span class="icon"><ion-icon name="options"></ion-icon></span>
            <a href="clientpage.php">Services</a>
        </div>
        <div class="sidebar-menu">
            <span class="icon"><ion-icon name="heart"></ion-icon></span>
            <a href="#">About us</a>
        </div>
        <?php
                $count=0;
                if(isset($_SESSION['cart']))
                {
                    $count=count($_SESSION['cart']);
                }
                ?>
        <div class="sidebar-menu">
            <span class="icon"><ion-icon name="cart-outline"></ion-icon></span>
            <a href="mycart.PHP" class=>Add to Cart(<?php echo $count;?>)</a>
        </div>
        <div class="sidebar-menu">
            <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
            <a href="#">Contact us</a>
        </div>
        <div class="sidebar-menu">
            <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
            <a href="login.php">LOG OUT</a>
        </div>
    </div>
</body>
</html>