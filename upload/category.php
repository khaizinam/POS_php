
<?php
    $id_item_show =0;
    if(isset($_GET['cate'])){
        $get_type = $_GET['cate']; 
    }else{
        $get_type = 'all';
   }//goi category hien thi san phamr trong main menu
    if($get_type == 'all'){
        $sql_pro = "SELECT * FROM item_1 WHERE status='active' ORDER BY type ASC" ;
    }else{
        $sql_pro = "SELECT * FROM item_1 WHERE type= '".$get_type."' AND status='active'  ORDER BY name ASC" ;
    } 
    $query_pro = mysqli_query($mysqli, $sql_pro);
    if(isset($_GET['show_item']) && $_GET['show_item']==1){
        $id_item_show = $_GET['id_sp'];
        $item_info = "SELECT * FROM item_1 WHERE id= '".$id_item_show."' LIMIT 1" ;
        $query_item = mysqli_query($mysqli, $item_info);
        $item_show = mysqli_fetch_array($query_item);
        include('upload/add_to_cart.php');
    }elseif(isset($_GET['show_item']) && $_GET['show_item']==0)
    {
        $id_item_show = 0;
        $item_info = "" ;
        $query_item = "";
    }  
?>
<div class="wrapper">
    <!-- <div class="feature-thumb">
        <img src="assets/img/post_5.jpg" alt="">
    </div> -->
    <div class="products"> 
        <ul>
<?php
    while($row_pro = mysqli_fetch_array($query_pro)){
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
    <!-- <div class="footer-thumb">
        <img src="assets/img/post_6.jpg" alt="">
    </div> -->
</div>   