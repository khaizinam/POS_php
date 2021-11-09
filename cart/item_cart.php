<?php
        include('../config/config.php');
         $cart_001 = "SELECT * FROM my_cart ORDER BY id_item ASC" ;
         $query_001 = mysqli_query($mysqli, $cart_001);
         
         if(isset($_GET['opt_cart']) && $_GET['opt_cart']== 'cancel'){
                 $id_opt_cart = $_GET['id_cart_opt'];
                $sql_delt = "DELETE FROM my_cart WHERE id_item='".$id_opt_cart ."' ";
                mysqli_query($mysqli,$sql_delt);
                header('location:index.php');
         }
        
?>
<ul class="list-item-cart">
    <?php
         while($cart_0011 = mysqli_fetch_array($query_001)){?>
         
    <li class="box item-1">
        <div class="cart-img"><img src="../assets/img/<?php echo $cart_0011['img']; ?>" alt=""></div>
            <div class="cart-mid">
                <div class="box cart-mid-top">
                    <p><?php echo $cart_0011['name']; ?> </p>
                </div>
                <div class="cart-mid-bottom">
                    <form action="" class="item-option">                                                                  
                        <input type="number" min="1" max="100" name="amount" value="<?php echo $cart_0011['amount']; ?>">
                        <span><?php echo number_format($cart_0011['cost']);  ?></span>
                    </form>
            </div>
        </div>
        <div class="cart-end">
            <a href="index.php?opt_cart=cancel&id_cart_opt=<?php echo $cart_0011['id_item'];?>">cancel</a>
        </div>
    </li>
    <?php } ?>

</ul>