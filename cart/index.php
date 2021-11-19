<?php
    include('../config/config.php');
    include('../classes/func.php');
           
    if(isset($_GET['opt_cart']) && $_GET['opt_cart']== 'cancel'){
        $id_opt_cart = $_GET['id_cart_opt'];
        $id_item_cart = $_GET['id_item'];
        $sql_delt = "DELETE FROM my_cart WHERE id_item='".$id_item_cart ."' AND id_cart='".$id_opt_cart."' AND pay='0'";
        mysqli_query($mysqli,$sql_delt);
}
?>
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
                                       
                                            <!-- ==================Item-cart========= -->
                                                <?php 
                                                if(isset($_GET['cart_status']) && $_GET['cart_status']=='status'){
                                                    include('item_stastus.php');
                                                }else{
                                                    include('item_cart.php');
                                                }  
                                                ?>  
                                    </div>                                                                                   
        </div>
</body>
</html>