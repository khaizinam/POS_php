<?php
if(isset($_GET['show_item']) && $_GET['show_item']==1){
        $id_item_show = $_GET['id_sp'];
        $query_item = $category->show($id_item_show);
        $item_show = $query_item->fetch_assoc();
        include('upload/add_to_cart.php');
    }elseif(isset($_GET['show_item']) && $_GET['show_item']==0)
    {
        $id_item_show = 0;
        $item_info = "" ;
        $query_item = "";
    } 
    ?>
<div class="wrapper">
    <div class="products"> 
        <ul>
<?php
    while($row_pro = $query_pro->fetch_assoc()){
        ?>
            <li class="main-product">
                        <div class="img-product">
                             <img class="img-prd"src="assets/img/<?php echo $row_pro['img'];?> "alt="">
                        </div>
                        <div class="content-product">
                            <h3 class="content-product-h3"><?php echo $row_pro['name']; ?></h3>
                        <div class="content-product-deltals">
                        <div class="price">
                            <span class="money"><?php echo number_format($row_pro['cost']) ; ?></span>
                        </div>
                        <a class="btn btn-cart" href="index.php?id_sp=<?php echo number_format($row_pro['id']);?>&show_item=1">Add to cart</a>
                    </div>
                   
                </div>
            </li>
        <?php
    }   
?>
        </ul>
    </div>
</div>   