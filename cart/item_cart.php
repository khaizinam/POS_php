<?php
        include('../config/config.php');
         $cart_001 = "SELECT * FROM my_cart ORDER BY id_item DESC" ;
         $query_001 = mysqli_query($mysqli, $cart_001);
        
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
                        <input type="number" min="1" max="100" name="amount" value="<?php echo $cart_0011['amount']; ?>"><br>
                    </form>
            </div>
        </div>
        <div class="cart-end">
            <p><?php echo number_format($cart_0011['cost']);  ?></p>
        </div>
    </li>
    <?php } ?>

</ul>