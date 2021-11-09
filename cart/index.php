<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/main.css">  
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome/css/all.css">
    <script src="assets/js/cart.js"></script>
    <title>🍔POS: retaurant mini of my</title>
</head>
<body>
                <div class="box logo-body">
                    <a href="../index.php"><img src="../assets/img/logo_1.png" width="50px" alt=""> Home</a>
                </div>        
            <!-- End header -->
        <div id="cart-fig" class="container">
                <!--  modal -->
                                <div class="cart-wrapper d-flex">
                                    <div class="cart-body">
                                        <p class="logo-cart"><i class="fas fa-shopping-cart"></i> Your cart</p>
                                        <select name="dine" id="dine">
                                            <option value="0">Dine in</option>
                                            <option value="1">Order</option>
                                        </select>
                                        <!-- ==================Item-cart========= -->
                                        <div class="cart-items">
                                            <?php include('item_cart.php');?>
                                            
                                        </div>
                                        <!-- =======================cart total=============== -->
                                        
                                    </div>
                                    <div class="cart-pay">
                                        <div class="wrapper-cart-total">
                                            <span>Total : 500.000 vnd</span>
                                        </div>
                                        <button class="btn btn-pay" type="button">PAYMENT</button>
                                    </div>
                                </div>                                
                                
        </div>
</body>
</html>