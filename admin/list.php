<style>
    table{
        text-align: center;
        padding: 10px;
    }
    table tr td{
        width: 120px;
    }
</style> 
<a href="index.php">Về menu</a><br>
<a href="add.php">Thêm hàng hóa vào danh sách</a>
<?php
    include('../config/config.php');
    //gọi danh sach cac hang hoa da dang ki
    $list_001 = "SELECT * FROM item_1 ORDER BY type ASC" ;
    $query_list = mysqli_query($mysqli, $list_001);
    //xoa item
    if(isset($_GET['option_list']) && $_GET['option_list']== 'delete'){
            $id_list = $_GET['id_list'];
            $list_delt = "DELETE FROM item_1 WHERE id='".$id_list."' ";
           mysqli_query($mysqli,$list_delt);
           header('location:list.php');
    //update item
    }else if(isset($_GET['option_list']) && $_GET['option_list']== 'update'){
        $id_list = $_GET['id_list'];
        $sql_list = "SELECT * FROM item_1 WHERE id='". $id_list."' " ;
        $query_list_update = mysqli_query($mysqli, $sql_list);
        $list_rows = mysqli_fetch_array( $query_list_update);
        header('location:update.php');
    }
?>   
    <table border="1"> 
    <tr>
                <td>ID</td>
                <td>Tên sản phẩm</td>
                <td>Hình ảnh</td>
                <td>Giá tiền</td>
                <td>Số lượng</td>
                <td>Loại</td>
                <td>Tình trạng hàng hóa</td>
                <td class="detals">Mô tả</td>
                <td>NSX</td>
                <td>HSD</td>
                <td>Nhà cung cấp</td>
                <td>option</td>
            </tr>
       <?php              
        while($row_list = mysqli_fetch_array( $query_list)){
        ?>           
            <tr>
                <td><?php echo $row_list['id']; ?></td>
                <td><?php echo $row_list['name']; ?></td>
                <td><img src="../assets/img/<?php echo $row_list['img'];?>" width="100px"></td>
                <td><?php echo number_format($row_list['cost']); ?></td>
                <td><?php echo number_format($row_list['thu_tu']); ?></td>
                <td><?php echo $row_list['type']; ?></td>
                <td><?php echo $row_list['status']; ?></td>
                <td><?php echo $row_list['details']; ?></td>
                <td><?php echo $row_list['NXS']; ?></td>
                <td><?php echo $row_list['HSD']; ?></td>
                <td><?php echo $row_list['Supply']; ?></td>
                <td><a href="list.php?&option_list=delete&id_list=<?php echo $row_list['id']; ?>">delete</a>
                <a href="update.php?option_list=update&id_list=<?php echo $row_list['id'];?>">chỉnh sửa</a></td>
            </tr>
        <?php }?>
    </table>

