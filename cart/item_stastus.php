<?php
         $sql_status_check = "SELECT * FROM my_cart WHERE pay='1' AND id_user='1'" ;
         $query_status_check = mysqli_query($mysqli, $sql_status_check);
         $check_status= mysqli_num_rows( $query_status_check);   
        $sql_status="SELECT * FROM my_cart WHERE pay='1' AND id_user='1'";
        $query_status = mysqli_query($mysqli,$sql_status)    
 ?>
<p class="logo-cart"><i class="fas fa-shopping-cart"></i> Món ăn đang được chuẩn bị</p>
        <a class="menu-cart" href="index.php?cart_status=cart">Giỏ hàng</a>
<?php if($check_status > 0) {?>
    <div class="cart-items">
        <table id="table-cart" border="1">
              <tr class="bold upper-case row-1">
                <td></td>
                <td>Tên</td>
                <td>Số lượng</td>
                <td>Tình trạng</td>
              </tr>
            <?php while($status_rows = mysqli_fetch_array($query_status)){ ?>


                <tr>     
                    <td><img src="../assets/img/<?php echo $status_rows['img']; ?>" width="80px" alt=""></td>
                    <td><?php echo $status_rows['name'];?></td>
                    <td><?php echo $status_rows['amount'];?></td>
                    <td><?php echo $status_rows['status'];?></td>
                    <td> <a href="index.php?opt_cart=cancel&id_cart_opt=<?php echo $status_rows['id_item'];?>&cart_status=status">cancel</a></td>
                </tr>
            <?php } ?>
        </table>
<?php }else{
    echo 'Không món ăn nào trong danh sách cần chuẩn bị!';
} ?>
                               

