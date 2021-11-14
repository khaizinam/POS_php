<?php
    include('classes/func.php');
    // session_start();
    if(isset($_POST['add'])){ 
        $name =$item_show['name']; 
        $img =$item_show['img']; 
        $cost =$item_show['cost']; 
        $amount = $_POST['amount'];
        $id_cart = "11001";
        $id_user = '001';
        $user_name = 'Clak kenz';
        $status = 'đang nấu';
        $pay='0';
        add_to_cart($mysqli, $id_item_show, $name, $img, $cost, $amount, $id_cart, $id_user,$user_name,$status,$pay);
    };  
?>
<div class="menu-001">  
    <div class="close-001">
        <a href="index.php?id_sp=0&show_item=0" class="close_show_item">Close</a>
    </div>
    <div class="menu-002 d-flex">     
        <div class="ca-100">
            <img class="show_img_item"src="assets/img/<?php echo $item_show['img'];?>" alt="">
            <p>ID: <?php echo $id_item_show;?></p>
            <h3 class="ca-1001"><?php echo $item_show['name']; ?></h3>
            <span class="ca-1002m"><?php echo number_format($item_show['cost']) ;?> vnd</span>
            <form action="index.php?id_sp=<?php echo $id_item_show;?>&show_item=1" method="POST">
                <input class="input-00010" type="number" name="amount" value="0" min="1" max="20"><br>
                <input class="input-00011" type="submit" name="add" value="OK">
            </form> 
            
        </div>
        <div class="ca-101">
            <p> Detail: <?php echo $item_show['details'] ; ?></p>
            <p>From: <?php echo $item_show['Supply'] ; ?></p>
            <p>NSX: <?php echo $item_show['NXS'] ; ?></p>
            <p>HSD: <?php echo $item_show['HSD'] ; ?></p>
            <p>Type: <?php echo $item_show['type'] ; ?></p>
            <p>Note: <?php if(isset($_POST['add'])){echo 'Ban da them '.$_POST['amount'].' '.$item_show['name'].' vao gio hang.';}?></p>
        </div>  
    </div>
</div>