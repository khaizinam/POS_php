    <?php
     include('../config/config.php');
     if(isset($_POST['add']) && $_POST['add'] == 'add'){ 
         //get 
        $id_opt = '';
        $thu_tu_opt = $_POST['thu_tu'];
        $name_opt = $_POST['name'];
        $img_opt =  $_FILES['img']['name'];
        $img_opt_tmp =  $_FILES['img']['tmp_name'];
        $cost_opt = $_POST['cost'];
        $status_opt = $_POST['status'];
        $details_opt = $_POST['details'];
        $HSD_opt = $_POST['HSD'];
        $NXS_opt = $_POST['NXS'];
        $Supply_opt = $_POST['Supply'];
        $type_opt = $_POST['type'];
        $category_opt = $_POST['category'];
        //call sql
        $add_002 = "INSERT INTO item_1(id,thu_tu,name,img,cost,status,details,HSD,NXS,Supply,type,category) VALUES ('".$id_opt."', '".$thu_tu_opt."', '".$name_opt."', '".$img_opt."', '".$cost_opt."', '".$status_opt."', '".$details_opt."', '".$HSD_opt."', '".$NXS_opt."', '".$Supply_opt."', '".$type_opt."', '".$category_opt."');" ;
         mysqli_query($mysqli, $add_002);
         move_uploaded_file($img_opt_tmp,'../assets/img/'.$img_opt);
         echo 'Thông báo: bạn đã thêm: '.$name_opt.' với ID: '.$id_opt.' thành công!';
    }; 
    ?> 
<a href="index.php">Về menu</a><br>
<a href="list.php">Danh sách các hàng hóa</a>
     <form action="add.php" method="POST" enctype="multipart/form-data">
        <table border="1">
            <tr>
                <td><span>Số lượng :</span></td>
                <td> <input type="text" name="thu_tu"></td>
            </tr>
            <tr>
                <td>Tên :</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Hình ảnh :</td>
                <td><input type="file" name="img"></td>
            </tr>
            <tr>
                <td>Giá tiền :</td>
                <td><input type="text" name="cost"></td>
            </tr>
            <tr>
                <td>Trạng thái :</td>
                <td><select name="status" id="">
                        <option value="active">active</option>
                        <option value="notactive">Not active</option>
                </select></td>
            </tr>
            <tr>
                <td>Mô tả :</td>
                <td> <textarea rows="10" cols="100"  name="details"></textarea></td>
            </tr>
            <tr>
                <td>HSD :</td>
                <td> <input type="date" name="HSD"></td>
            </tr>
            <tr>
                <td>NXS :</td>
                <td><input type="date" name="NXS"></td>
            </tr>
            <tr>
                <td>Nhà cung cấp:</td>
                <td><input type="text" name="Supply"></td>
            </tr>
            <tr>
                <td>Loại hàng hóa :</td>
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
            <td>temp :</td>
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
        <input type="submit" name="add" value="add">
    </form>
  
