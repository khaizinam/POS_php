<?php          
    if(isset($_GET['opt_cart']) && $_GET['opt_cart']== 'cancel'){
        $id_opt_cart = $_GET['id_cart_opt'];
        $id_item_cart = $_GET['id_item'];
        delete_cart($mysqli,$id_item_cart,$id_opt_cart);
}
?>
<body>
                <div class="box logo-body">
                    <a href="index.php?page=main_menu"><img src="assets/img/logo_1.png" width="50px" alt=""> Home</a>
                </div>        
            <!-- End header -->
        <div id="cart-fig" class="container">
                <!--  modal -->
                                <div class="cart-wrapper d-flex">
                                    <div class="cart-body">
                                       
                                            <!-- ==================Item-cart========= -->
                                                <?php 
                                                if(isset($_GET['cart_status']) && $_GET['cart_status']=='status'){
                                                    include('upload/item_stastus.php');
                                                }else{
                                                    include('upload/item_cart.php');
                                                }  
                                                ?>  
                                    </div>                                                                                   
        </div>
</body>
</html>