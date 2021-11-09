<?php 
    include('../config/config.php');   
    if(isset($_POST['add']) && $_POST['add'] == 'add' && $_POST['id'] != 0){  
        $id_opt = $_POST['id'];
        $thu_tu_opt = $_POST['thu_tu'];
        $name_opt = $_POST['name'];
        $img_opt =  $_POST['img'];
        $cost_opt = $_POST['cost'];
        $status_opt = $_POST['status'];
        $details_opt = $_POST['details'];
        $HSD_opt = $_POST['HSD'];
        $NXS_opt = $_POST['NXS'];
        $Supply_opt = $_POST['Supply'];
        $type_opt = $_POST['type'];
        $category_opt = $_POST['category'];
         $add_002 = "INSERT INTO item_1(id,thu_tu,name,img,cost,status,details,HSD,NXS,Supply,type,category) VALUES ('".$id_opt."', '".$thu_tu_opt."', '".$name_opt."', '".$img_opt."', '".$cost_opt."', '".$status_opt."', '".$details_opt."', '".$HSD_opt."', '".$NXS_opt."', '".$Supply_opt."', '".$type_opt."', '".$category_opt."');" ;
         mysqli_query($mysqli, $add_002);
         echo 'success to add';
    };   
?>
    <a href="../index.php">Return Main Menu</a><br>
    <a href="index.php">Return manage menu</a><br>
    <a href="list.php">list</a>
    <form action="page.php" method="POST">
        <table border="1">
            <tr>
                <td><span>ID :</span></td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td><span>Thu tu :</span></td>
                <td> <input type="text" name="thu_tu"></td>
            </tr>
            <tr>
                <td>Name :</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Img :</td>
                <td><input type="text" name="img"></td>
            </tr>
            <tr>
                <td>Cost :</td>
                <td><input type="text" name="cost"></td>
            </tr>
            <tr>
                <td>status :</td>
                <td> <input type="text" name="status"></td>
            </tr>
            <tr>
                <td>Details :</td>
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
                <td>Suplier:</td>
                <td><input type="text" name="Supply"></td>
            </tr>
            <tr>
                <td>Type :</td>
                <td>
                    <select name="type" id="">
                        <option value="combo">Combo</option>
                        <option value="cake">Cake</option>
                        <option value="milk_tea">Milk tea</option>
                        <option value="fast_food">Fast food</option>
                        <option value="juice">Juice</option>
                    </select>
                </td>
            </tr>
            <tr>
            <td>Category :</td>
                <td>
                    <select name="category" id="">
                        <option value="combo">Combo</option>
                        <option value="cake">Cake</option>
                        <option value="milk_tea">Milk tea</option>
                        <option value="fast_food">Fast food</option>
                        <option value="juice">Juice</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" name="add" value="add">
    </form>
  
