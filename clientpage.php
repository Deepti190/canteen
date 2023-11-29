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
    <!-- style -->
    <link rel="stylesheet" href="npcss1.css">
    <!-- icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>RESPONSIVE FOOD DELIVERY</title>
</head>

<body>
    <!-- HEADER  -->
    <input type="checkbox" id="cart">
    <label for="cart" class="label-cart"><span class="icon"><ion-icon name="cart"></ion-icon></span></label>
    <h3 class="logo">WAAH!! SWAD</h3>
    <!-- SIDEBAR -->
    <div class="sidebar">
         <!-- icon added in the class  -->
        <div class="sidebar-menu">
            <span class="icon"><ion-icon name="home"></ion-icon></span>
            <a href="#">Home</a>
        </div>
        <div class="sidebar-menu">
            <span class="icon"><ion-icon name="menu-outline"></ion-icon></span>
            <a href="menu.php" target="_self">Menu</a>
        </div>
        <div class="sidebar-menu">
            <span class="icon"><ion-icon name="options"></ion-icon></span>
            <a href="#service">Services</a>
        </div>
        <div class="sidebar-menu">
            <span class="icon"><ion-icon name="heart"></ion-icon></span>
            <a href="#">About Us</a>
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
            <!-- <a href="#service">Add to cart</a> -->
            <a href="mycart.PHP" class=>Add to Cart(<?php echo $count;?>)</a>
        </div>
        <div class="sidebar-menu">
            <span class="icon"><ion-icon name="person"></ion-icon></span>
            <a href="contact us.php">Contact us</a>
        </div>
        <div class="sidebar-menu">
            <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
            <a href="login.php">log out</a>
        </div>
    </div>
    <!-- MAIN DASHBOARD -->
    <div class="dashboard">
        <div class="dashboard-banner">
            <img src="images/fries.jpg" height="300" width="600">
            <div class="banner-promo">
                <h1><span>50% OFF</span><br>
                    Tasty Food <br> On Your Hand</h1>
            </div>
        </div>
        <!-- <h3 class="dashboard-title">Recommend Food For You</h3> -->
        <!-- <div class="dashboard-menu">
            <a href="#">Favorites</a>
            <a href="#">Best Sellers</a>
            <a href="#">Near Me</a>
            <a href="#">Promotions</a>
            <a href="#">Top Rated</a>
            <a href="#">All</a>
        </div> -->

        <!-- <div class="dashboard-content">
            <div class="dashboard-card">
                <img class="card-image" src="images/samosa.jpg">
                <div class="card-detail">
                    <h4>Samosa <span>30/-</span></h4>
                    <p>Chatpata Samosa</p>
                    <p class="card-time"><span class="icon"><ion-icon name="time"></ion-icon></span>15 mins</p>
                </div>
            </div>
            <div class="dashboard-card">
                <img class="card-image" src="images/roll.jpg">
                <div class="card-detail">
                    <h4>Roll <span>20/-</span></h4>
                    <p>Veg Roll</p>
                    <p class="card-time"><span class="icon"><ion-icon name="time"></ion-icon></span>15-20 mins</p>
                </div>
            </div>
            <div class="dashboard-card">
                <img class="card-image" src="images/noodles.jpg">
                <div class="card-detail">
                    <h4>Noodles <span>100/-</span></h4>
                    <p>Veg Noodles</p>
                    <p class="card-time"><span class="icon"><ion-icon name="time"></ion-icon></span>15-30 mins</p>
                </div>
            </div>
        </div> -->
        <!-- services -->
        <section class="services" id="service">
            <!-- <a href="service"></a> -->
            <div class="heading">
                <span>Services</span>
                <h2>Easy 3 Step Order</h2>
            </div>
            <div class="service-container">
                <div class="s-box">
                    <img src="images/juiceorder.jpg">
                    <H5>step 1</H5>
                    <h3>Choose Your Tasty Dish</h3>
                    <p>We'll provide best food in collage <br>hours.</p>
                </div>

                <div class="s-box">
                    <img src="images/coffeeship.jpg">
                    <H5>step 2</H5>
                    <h3>Place Order</h3>
                    <p>We are providing facility of online food
                        ordering
                    </p>
                </div>

                <div class="s-box">
                    <img src="images/delivered.jpg">
                    <H5>step 3</H5>
                    <h3>Pick Up Food</h3>
                    <p>Collect your food!And Enjoy your
                        meal!Pay online on pickup or cash on
                        delivery.
                    </p>
                </div>
            </div>
        </section>
        <!-- about start -->
        <section class="about" id="about">
            <div class="about-img">
                <img src="about.jpg">
            </div>
            <div class="about-text">
                <span>About Us</span>
                <h2>We Make The Best <br> Food in Our Collage</h2>
                <p>Best food in budget and you can get it fresh and hot.</p>
                
            </div>
        </section>
    </div>
</body>

</html>
