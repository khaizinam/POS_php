<?php 
    include('../config/config.php');   
    if(isset($_POST['add'])){  
        $id_opt = $_POST['id'];
        $thu_tu_opt = $_POST['thu_tu'];
        $name_opt = $_POST['name'];
        $img_opt = $_POST['img'];
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
         echo 'ban da thanh cong';
    };   
?>

    <form action="page.php" method="POST">
        <span>ID :</span>
        <input type="text" name="id"><br>
        <span>Thu tu :</span>
        <input type="text" name="thu_tu"><br>
        <span>Name :</span>
        <input type="text" name="name"><br>
        <span>img :</span>
        <input type="text" name="img"><br>
        <span>Cost :</span>
        <input type="text" name="cost"><br>
        <span>status :</span>
        <input type="text" name="status"><br>
        <span>Details :</span>
        <input type="text" name="details"><br>
        <span>HSD :</span>
        <input type="date" name="HSD"><br>
        <span>NXS :</span>
        <input type="date" name="NXS"><br>
        <span>Suplier:</span>
        <input type="text" name="Supply"><br>
        <span>Type :</span>
        <select name="type" id="">
            <option value="combo">Combo</option>
            <option value="cake">Cake</option>
            <option value="milk_tea">Milk tea</option>
            <option value="fast_food">Fast food</option>
            <option value="juice">Juice</option>
        </select><br>
        <span>Category :</span>
        <select name="category" id="">
            <option value="combo">Combo</option>
            <option value="cake">Cake</option>
            <option value="milk_tea">Milk tea</option>
            <option value="fast_food">Fast food</option>
            <option value="juice">Juice</option>
        </select><br>
        <input type="submit" name="add" >
    </form>
    <a href="../index.php">Return Main Menu</a>
