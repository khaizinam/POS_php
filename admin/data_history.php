<style>
     a{
        text-decoration: none;
    }
    table{
    /* border:1px solid black; */
        width: 960px;
        border-collapse:collapse;
        background-color: #fff;
        text-align: center;
        padding: 10px;
        margin: 10px auto;
    }
    tr{
        height: 50px;
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
        overflow-y: scroll;
    }
    .menu a{
        display: inline-block;
        padding :10px;
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
                <div class="menu">
                        <a href="index.php">Main menu</a>
                </div>
                <hr>
<?php
        include('../config/config.php');
        include('../classes/func.php');
        if(isset($_GET['id_cart'])){
            $id_cart_get=$_GET['id_cart'];
        }else{
            $id_cart_get='';
        };
        $query_id_gio_hang =query_id_don_hang_done($mysqli);    
        if(isset($_GET['detail'])&& $_GET['detail']=='show'){  

                    $query_don_hang_update = query_historty($mysqli,$id_cart_get);
                    //number of row
            ?>
             <button onclick="location.href='data_history.php?detail=close'">close</button>
            <table>
                <tr style="background-color:skyblue">
                    <td style="width:200px">Tên món ăn</td>
                    <td style="width:60px">Số lượng</td>
                    <td style="width:60px">ID món ăn</td>       
                    <td style="width:120px">Tên người dùng</td>
                    <td style="width:120px">Trạng thái</td>               
                </tr>
                <?php while($row_don_hang_update = mysqli_fetch_array($query_don_hang_update)){?>
                <tr>
                    <td><?php echo $row_don_hang_update['name'];?></td>
                    <td><?php echo $row_don_hang_update['amount'];?></td>
                    <td><?php echo $row_don_hang_update['id_item'];?></td>
                    <td><?php echo $row_don_hang_update['user_name'];?></td>
                    <td><?php echo $row_don_hang_update['status'];?></td>                   
                </tr>
                <?php } ?>
            </table>
                <?php } ?>


                <h3>Danh sách các giỏ hàng đã hoàn thành</h3>
                <div class="main-body">
                    <table>          
                            <tr style="background-color:skyblue"> 
                                <td style="width:60px">ID</td>
                                <td style="width:50px"></td>
                                <td style="width:60px">ID user</td>
                                <td style="width:120px">Ngày tạo</td>     
                            </tr>
                            <?php while($row_don_hang = mysqli_fetch_array($query_id_gio_hang)){?>
                            <tr>
                                    <td><?php echo $row_don_hang['id_cart'];?></td>  
                                    <td><a href="data_history.php?detail=show&id_cart=<?php echo $row_don_hang['id_cart'];?>">xem chi tiết</a></td>              
                                    <td><?php echo $row_don_hang['id_user'];?></td>    
                                    <td><?php echo $row_don_hang['time'];?></td>     
                            </tr>
                            <?php } ?>
                     </table>
                </div>

       
