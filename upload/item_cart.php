<?php
        $total =0;
        $id_gio_hang='none';
        $cart_001 = $cart->cart_select();
        $check_cart = $cart->cart_check_select();
        if(isset($_GET['payment']) && $_GET['payment']== 'pay'){
            $id_cart_get = $_GET['id_cart'];
            $cart->thanh_toan( $id_cart_get);
            header('location:index.php');
        }      
 ?>
<p class="logo-cart"><i class="fas fa-shopping-cart"></i> Giỏ hàng thanh toán</p>
        <a class="menu-cart" href="index.php?cart_status=status">Tình trạng món ăn</a>
<?php if($check_cart > 0) {?>
    <div class="cart-items">
        <table id="table-cart" border="1">
            <tr style="background-color:skyblue" class="bold upper-case row-1">
                <td></td>
                <td>Tên</td>
                <td>Giá</td>
                <td>Số lượng</td> 
                <td>Tổng tiền</td>
                <td>Tùy chọn</td>   
            </tr>   
            <?php while($cart_0011 = $cart_001->fetch_assoc()){?>
                <tr>
                    <td> <img src="assets/img/<?php echo $cart_0011['img']; ?>" width="80px" alt=""></td>
                    <td> <?php echo $cart_0011['name']; ?></td>      
                    <td> <?php echo number_format($cart_0011['cost']);?></td>
                    <td> <?php echo $cart_0011['amount'];?></td>
                    <td> <?php echo number_format($cart_0011['cost']*$cart_0011['amount']);?></td>
                    <td> <a href="index.php?opt_cart=cancel&id_item=<?php echo $cart_0011['id_item'];?>&id_cart_opt=<?php echo $cart_0011['id_cart'];?>">cancel</a></td>               
                </tr>
                <?php 
                        $total += ($cart_0011['cost']*$cart_0011['amount']);
                        $id_gio_hang =$cart_0011['id_cart'];
                    
                } ?>
                <tr>
                    <td>Bàn số : 25D</td>
                    <td><?php echo Session::get('fullName');?></td>      
                    <td style="background-color:skyblue">Tổng giá</td>
                    <td style="background-color:skyblue"><?php echo number_format($total)?> vnd </td>
                    <td>ID giỏ hàng </td>
                    <td> <?php echo $id_gio_hang;?></td>
                </tr>
        </table>
        <button onclick="location.href='index.php?payment=pay&id_cart=<?php echo  $id_gio_hang?>'" class="btn-pay" type="button">THANH TOÁN</button>
<?php }else{
    echo 'Không có đơn hàng cần thanh toán!';
    } ?>
</div>                                

