<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link type="text/css" rel="stylesheet" href="mycart.CSS" />
    <title>Cart</title>
    <style>
        .background {
            width: 100%;
            height: 100vh;
            background-image: url("images/bg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            overflow: hidden;
        }
    </style>
</head>

<body>
    <div class="background">
        <div class="container">
            <div class="row">
                <center>
                    <h1>MY CART</h1>
                </center>
                <div class="col-lg-8">
                    <table class="table" border="6" cellspacing="7" cellpadding="9" bordercolor="black" color="black"
                        height="200" width="500" align="center">
                        <thead>

                            <tr>
                                <th scope="col">Serial No.</th>
                                <th scope="col">Item Name</th>
                                <th scope="col">Item Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col">Action</th>
                            </tr>
                            <thead>

                            <tbody class>
                                <?php
                    
                        if(isset($_SESSION['cart']))
                        {
                            foreach($_SESSION['cart'] as $key => $value)
                            {
                                $sr=$key+1;
                              
                                echo"
                                <tr>
                                <td>$sr</td>
                                <td>$value[Item_Name]</td>
                                <td>$value[Price]<input type='hidden'class='iprice'value='$value[Price]'></td>
                                <td>
                                <form action ='manage_cart.PHP' method ='POST'>
                                <input class='iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]'min='1' max='10'/>
                                <input type = 'hidden' name = 'Item_Name' value='$value[Item_Name]'>
                                </form>
                                </td>
                                <td class='itotal'></td>
                                <td>
                                <form action ='manage_cart.PHP' method ='POST'>
                                
                                <button name = 'Remove_Item'>REMOVE</REMOVE>
                                
                                <input type = 'hidden' name = 'Item_Name' value='$value[Item_Name]'>
                                </form>
                                </td>
                                </tr>";
                            }           
                        }
                        ?>

                     </tbody>
                    </table>
                </div>

                <div>
                    <div>
                        <center>
                            <h4>Grand Total:</h4>
                        </center>
                        <center>
                            <h5 id="gtotal"></h5>
                        </center>
                        <?php
                    if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
                    {
                        ?>
                        <form>
                        </form>
                        <?php
                    }

                    ?>
                        <div class="content3">
                            <form action="purchase.PHP" method="POST">
                                <div class="input_field">
                                    <label>Student Id</label>
                                    <input type="text" name="stid" required>
                                </div>
                                <div class="input_field">
                                    <label>Full Name</label>
                                    <input type="text" name="full_name" required>
                                </div>
                                <div class="input_field">
                                    <label>Phone Number</label>
                                    <input type="number" name="phone_no" required>
                                </div>
                                <div class="input_field">
                                    <label>Address</label>
                                    <input type="text" name="address" required>
                                </div>
                                <div class="input_field">
                                    <input class="form-check-input" type="radio" name="pay_mode" value="COD"
                                        id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2"> Cash On Delivery</label>
                                </div>
                                </br>

                                <button name="purchase" class="button">Make Purchase</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var gt = 0;
            var iprice = document.getElementsByClassName('iprice');
            var iquantity = document.getElementsByClassName('iquantity');
            var itotal = document.getElementsByClassName('itotal');
            var gtotal = document.getElementById('gtotal');
            function subTotal() {
                gt = 0;
                for (i = 0; i < iprice.length; i++) {
                    itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
                    gt = gt + (iprice[i].value) * (iquantity[i].value);

                }
                gtotal.innerText = gt;
            }
            subTotal();
        </script>

</body>
</html>