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
</style> 
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
<div class="menu">
    <a href="index.php">Menu</a>
    <a href="add.php">Thêm hàng hóa</a>
</div>
<hr>
<div class="main-body">
    <table > 
    <tr style="background-color:skyblue">
                <td style="width:60px">ID</td>
                <td style="width:200px">Tên sản phẩm</td>
                <td style="width:120px">Hình ảnh</td>
                <td style="width:120px">Giá tiền</td>
                <td style="width:100px">Số lượng</td>
                <td style="width:100px">Loại</td>
                <td style="width:100px">Tình trạng hàng hóa</td>
                <td style="width:120px">Nhà cung cấp</td>
                <td style="width:200px">option</td>
                <td style="width:120px">NSX</td>
                <td style="width:120px">HSD</td>
                <td style="width:400px" class="detals">Mô tả</td>
            </tr>
       <?php              
        while($row_list = mysqli_fetch_array( $query_list)){
        ?>           
            <tr>
                <td><?php echo $row_list['id']; ?></td>
                <td style="color:red;font-weight:bold"><?php echo $row_list['name']; ?></td>
                <td><img src="../assets/img/<?php echo $row_list['img'];?>" width="100px"></td>
                <td><?php echo number_format($row_list['cost']); ?></td>
                <td><?php echo number_format($row_list['thu_tu']); ?></td>
                <td><?php echo $row_list['type']; ?></td>
                <td><?php echo $row_list['status']; ?></td>
                <td><?php echo $row_list['Supply']; ?></td>
                <td><a href="list.php?&option_list=delete&id_list=<?php echo $row_list['id']; ?>">delete</a>
                <a href="update.php?option_list=update&id_list=<?php echo $row_list['id'];?>">chỉnh sửa</a></td>
                <td><?php echo $row_list['NXS']; ?></td>
                <td><?php echo $row_list['HSD']; ?></td>
                <td><?php echo $row_list['details']; ?></td>
            </tr>
        <?php }?>
    </table>
</div>
<hr>
