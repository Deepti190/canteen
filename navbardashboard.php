<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard</title>
    <link rel="stylesheet" href="navbardash.css">
    <!-- <link rel="stylesheet" href="main.js"> -->
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!-- Navigation bar -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="">
                        <span class="icon"><ion-icon name="fast-food-outline"></ion-icon></span>
                        <span class="title">WAAH!! SWAD </span>
                    </a>
                </li>

                <li>
                    <a href="formd.php" target="_self">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="form1.php" target="_self">
                        <span class="icon"><ion-icon name="people-circle-outline"></ion-icon></span>
                        <span class="title">Manage Customers</span>
                    </a>
                </li>

                <li>
                    <a href="form2.php" target="_self">
                        <span class="icon"><ion-icon name="chatbubble-ellipses-outline"></ion-icon></span>
                        <span class="title">Manage Categories </span>
                    </a>
                </li>
                <li>
                    <a href="form3.php" target="_self">
                    <span class="icon"><ion-icon name="chatbubble-ellipses-outline"></ion-icon></span>
                        <span class="title">Add Categories </span>
                        </a>
                </li>

                <li>
                    <a href="form4.php" target="_self">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Add Food </span>
                        </a>
                </li>
                      
                <li> 
                        <a href="form5.php" target="_self">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Manage Food </span>
                        </a>
                            
                </li>

                <li>
                    <a href="logout.php">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Sign out </span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- ============MAIN========== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
            </div>
        </div>
</div>
</body>
<!-- <script src="main.js"></script> -->

<!-- ==============ionicons============ -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>
