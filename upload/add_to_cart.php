<?php

    if(isset($_POST['add'])){ 
        $name =$item_show['name']; 
        $img =$item_show['img']; 
        $cost =$item_show['cost']; 
        $amount = $_POST['amount'];
        $id_cart = "11001";
        $id_user = "111";
         $item_add = "INSERT INTO my_cart(id_item,name,img,cost,amount,id_cart,id_user) VALUE('".$id_item_show."','".$name."','".$img."','".$cost."', '".$amount."', '".$id_cart."', '".$id_user."')" ;
         mysqli_query($mysqli, $item_add);
    };
    
    
?>
<div class="menu-001">  
    <div class="close-001">
        <a href="index.php?id_sp=0&show_item=0" class="close_show_item">Close</a>
    </div>
    <div class="menu-002 d-flex">     
        <div class="ca-100">
            <img class="show_img_item"src="assets/img/<?php echo $item_show['img'];?>" alt="">
        </div>
        <div class="ca-101">
            <p><?php echo $id_item_show ; ?></p>
            <h3 class="content-product-h3"><?php echo $item_show['name']; ?></h3>
            <span class="money"><?php echo number_format($item_show['cost']) ; ?></span>
            <form action="index.php?id_sp=<?php echo $id_item_show ?>&show_item=1" method="POST">
                <input class="input-00010" type="number" name="amount" value="0" min="1" max="100"><br>
                <input class="input-00011" type="submit" name="add" value="OK">
            </form>             
        </div>  
    </div>
</div>