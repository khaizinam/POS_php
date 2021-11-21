<?php
    include('../config/config.php');  
        $id_list = $_GET['id_list'];
        $sql_list = "SELECT * FROM item_1 WHERE id='". $id_list."' " ;
        $query_list_update = mysqli_query($mysqli, $sql_list);
        $list_rows = mysqli_fetch_array( $query_list_update);
    //them hang hoa
    if(isset($_POST['update']) && $_POST['update'] == 'submit'){  
        $id_up = $_POST['id'];
        $thu_tu_up = $_POST['thu_tu'];
        $name_up = $_POST['name'];
        $cost_up = $_POST['cost'];
        $status_up = $_POST['status'];
        $details_up = $_POST['details'];
        $HSD_up = $_POST['HSD'];
        $NXS_up = $_POST['NXS'];
        $Supply_up = $_POST['Supply'];
        $type_up = $_POST['type'];
        $category_up = $_POST['category'];
        $sql_update = "UPDATE item_1 SET id='".$id_up."', thu_tu='".$thu_tu_up."',name='".$name_up."',cost='".$cost_up."',status='".$status_up."',details='". $details_up."',NXS='".$NXS_up."',HSD='".$HSD_up."',Supply='".$Supply_up."',type='".$type_up."',category='".$category_up."' WHERE  id='". $id_list."' ";
         mysqli_query($mysqli, $sql_update);
        header('location:list.php');
    };
?>
<style>
table{
    border-collapse:collapse;
    background-color: #fff;
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
}
.menu a{
    display: inline-block;
    padding :10px;
    text-decoration: none;
    color: black;
    background-color: #eee;
}
input{
        margin: 0px 5px 0px 5px;
        width: 600px;
        height: 40px;
        padding: 10px;
    }
</style> 
<div class="menu">
    <a href="list.php">Quay về</a>
</div>
<h3>Chỉnh sửa hàng hóa</h3>
<hr>
<div class="main-body">
  <form action="update.php?id_list=<?php echo $id_list?>" method="POST">
        <table>
            <tr >
                <td><span>ID :</span></td>
                <td><input type="text" name="id" value="<?php echo $list_rows['id']?>"></td>
            </tr>
            <tr>
                <td><span>Số lương :</span></td>
                <td> <input type="text" name="thu_tu" value="<?php echo $list_rows['thu_tu']?>"></td>
            </tr>
            <tr>
                <td>Tên :</td>
                <td><input type="text" name="name" value="<?php echo $list_rows['name']?>"></td>
            </tr>
            <tr>
                <td>Giá cả :</td>
                <td><input type="text" name="cost" value="<?php echo $list_rows['cost']?>"></td>
            </tr>
            <tr>
                <td>Trạng thái: </td>
                <td><select name="status" id="">
                        <option value="active">active</option>
                        <option value="notactive">Not active</option>
                </select></td>
            </tr>
            <tr>
                <td>Mô tả:</td>
                <td> <textarea rows="10" cols="100"  name="details" value="<?php echo $list_rows['details']?>"></textarea></td>
            </tr>
            <tr>
                <td>HSD :</td>
                <td> <input type="date" name="HSD" value="<?php echo $list_rows['HSD']?>"></td>
            </tr>
            <tr>
                <td>NXS :</td>
                <td><input type="date" name="NXS" value="<?php echo $list_rows['NXS']?>"></td>
            </tr>
            <tr>
                <td>Nhà cung cấp</td>
                <td><input type="text" name="Supply" value="<?php echo $list_rows['Supply']?>"></td>
            </tr>
            <tr>
                <td>Loại sản phẩm:</td>
                <td>
                    <select name="type" id="">
                        <option value="main_food">Món ăn chính</option>
                        <option value="cake">Bánh ngọt</option>
                        <option value="drink">Thức uống</option>
                        <option value="KFC">KFC</option>
                        <option value="juice">Nước ép trái cây</option>
                    </select>
                </td>
            </tr>
            <tr>
            <td>temp:</td>
                <td>
                    <select name="category" id="">
                        <option value="main_food">Món ăn chính</option>
                        <option value="cake">Bánh ngọt</option>
                        <option value="drink">Thức uống</option>
                        <option value="KFC">KFC</option>
                        <option value="juice">Nước ép trái cây</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" name="update" value="submit">
    </form>
</div>
  
