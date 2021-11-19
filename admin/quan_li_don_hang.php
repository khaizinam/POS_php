
<style>
        table{
            /* border:1px solid black; */
            width: 1350px;
            border-collapse:collapse;
            background-color: #fff;
            text-align: center;
            padding: 10px;
        }
        tr{
            border:1px solid black;
        }
        td{
            border:1px solid black;
        }
        .main-body{
            width: 1080px;
            height: 560px;
            /* position: relative; */
            margin: 0 auto;
            overflow-x: scroll;
            overflow-y: scroll;
        }
        .menu a{
            display: inline-block;
            padding :10px;
            text-decoration: none;
            color: black;
            background-color: #eee;
        }
        button{
            width: 100px;
            height: 30px;
            color: black;
            background-color: #eee;
        }
</style> 
</style> 
        <div class="menu">
            <a href="index.php">Menu</a>
        </div>

<?php
        include('../config/config.php');
        include('../classes/func.php');
        $query_id_gio_hang =query_id_don_hang($mysqli);
        session_start();
        if(isset($_GET['id_cart'])){
            $id_cart_get=$_GET['id_cart'];
        }else{
            $id_cart_get='';
        };
        $_SESSION['id_cart']=$id_cart_get;
        if(isset($_GET['action_cart']) && $_GET['action_cart']=='close'){
            unset($_SESSION['id_cart']);
        }
     //if(isset($_SESSION['id_cart'])&& $_SESSION['id_cart']!=''){
        elseif(isset($_GET['action_cart'])&& $_GET['action_cart']=='edit'){                  
                    update_1($mysqli);
                    $query_don_hang_update = query_don_hang($mysqli,$id_cart_get);
                    //number of row
                    $query_row = query_don_hang($mysqli,$id_cart_get);
                    $num_row=mysqli_num_rows($query_row);
                    
                    $i=1;
            ?>
             <h4>ID giỏ hàng: <?php echo $id_cart_get;?></h4>
             <button onclick="location.href='quan_li_don_hang.php?action_cart=close'">close</button>
            <table>
                <tr style="background-color:skyblue">
                    <td style="width:40px">Thứ tự</td>
                    <td style="width:60px">Bàn gọi món</td>
                    <td style="width:200px">Tên món ăn</td>
                    <td style="width:60px">Số lượng</td>
                    <td style="width:60px">ID món ăn</td>       
                    <td style="width:120px">Tên người dùng</td>
                    <td style="width:120px">Trạng thái</td>               
                    <td style="width:150px"></td>
                </tr>
                <?php while($row_don_hang_update = mysqli_fetch_array($query_don_hang_update)){?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row_don_hang_update['so_ban'];?></td>
                    <td><?php echo $row_don_hang_update['name'];?></td>
                    <td><?php echo $row_don_hang_update['amount'];?></td>
                    <td><?php echo $row_don_hang_update['id_item'];?></td>
                    <td><?php echo $row_don_hang_update['user_name'];?></td>
                    <td><?php echo $row_don_hang_update['status'];?></td>                   
                    <td> 
                        <form action="" method="POST">
                            <select name="update_status_<?php echo $i;?>">
                                <option value="Chờ xử lí">chờ xử lí</option>
                                <option value="Đang nấu">Đang nấu</option>
                                <option value="Hoàn thành">Hoàn thành</option>
                            </select>
                            <input type="hidden" name="code_<?php echo $i;?>" value="<?php echo $row_don_hang_update['code'];?>">
                            <input type="submit" name="update_don_hang_<?php echo $i;?>" value="ok">   
                        </form>
                    </td>
                </tr>
                <?php $i++;} ?>
            </table>
        <?php }elseif(isset($_GET['action_cart'])&& $_GET['action_cart']=='done'){
            ///////////////////////////////////////////
            ///////////////////////////////////////////
            $id_cart_done=$_GET['id_cart'];
            echo $id_cart_done;
            update_don_hang_done($mysqli,$id_cart_done);
            header('location:quan_li_don_hang.php');
           
        }
        ?>
<hr>
<!-- in danh sách các đơn hang -->
<div class="main-body">
<?php while($row_don_hang_1 = mysqli_fetch_array($query_id_gio_hang)){
            $id_cart_in=$row_don_hang_1['id_cart'];
            $query_don_hang = query_don_hang($mysqli,$id_cart_in);
            ?>

                    <p>ID giỏ hàng: <?php echo $row_don_hang_1['id_cart'];?></p>
                    <button onclick="location.href='quan_li_don_hang.php?id_cart=<?php echo $row_don_hang_1['id_cart'];?>&action_cart=done'">Đóng đơn</button>
                    <button onclick="location.href='quan_li_don_hang.php?id_cart=<?php echo $row_don_hang_1['id_cart'];?>&action_cart=edit'">Tùy chỉnh</button>  
                    <table>          
                        <tr style="background-color:skyblue"> 
                                <td style="width:40px">Bàn gọi món</td>
                                <td style="width:200px">Tên món ăn</td>
                                <td style="width:40px">Số lượng</td>
                                <td style="width:120px">Trạng thái</td>
                                <td style="width:60px">ID món ăn</td>
                                <td style="width:200px">Tên người dùng</td>                              
                            </tr>
                            <?php while($row_don_hang = mysqli_fetch_array($query_don_hang)){?>
                                <tr>
                                    <td><?php echo $row_don_hang['so_ban'];?></td>  
                                    <td><?php echo $row_don_hang['name'];?></td> 
                                    <td><?php echo $row_don_hang['amount'];?></td>
                                    <td><?php echo $row_don_hang['status'];?></td>
                                    <td><?php echo $row_don_hang['id_item'];?></td>
                                    <td><?php echo $row_don_hang['user_name'];?></td>                                  
                                </tr>
                             <?php } ?>
                    </table>
                
<?php } ?>
</div> 
       
