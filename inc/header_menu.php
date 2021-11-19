<?php 
    if(isset($_GET['action']) && $_GET['action'] == 'signout'){
        unset($_SESSION['login']);
        header('location:upload/login.php');
    }
    $id_item_show =0;
    $_SESSION['category']='all';
    if(isset($_GET['cate'])&&$_GET['cate']!=''){
        $_SESSION['category'] = $_GET['cate']; 
    }
   $get_type=$_SESSION['category'];
   $query_pro =  category($mysqli,$get_type);
?>
<div id="header" >
            <div class="wr-header">
                <div class="container">
                    <div class="box logo-body">
                      <a href="index.php"><img src="assets/img/logo_1.png" width="50px" alt=""> Home</a>
                    </div>
                    <div class="box search-body">
                         <form action="" id="search">
                             <input type="text" name="q" placeholder="Bạn muốn tìm gì?">
                             <button><i class="fas fa-search"></i></button>
                         </form>     
                    </div>
                    <div class="box login-body">
                        <ul class="log-in-out d-flex">
                             <li> 
                                <button id="btn-user"><img src="assets/img/rem.png" width="40px" alt=""></i> <?php echo $_SESSION['login'] ;?></button>
                                <div id="user-Dropdown" class="user-dropdown-content">
                                 <a href="#">My Account</a>
                                 <a href="admin/index.php">Quản lí</a>
                                 <a href="cart/index.php">My Cart</a>
                                 <a href="index.php?action=signout"><i class="fas fa-sign-out-alt"></i>Sign out</a>
                               </div>
                             </li>
                             <li> 
                                <a href="cart/index.php?status_cart=cart" id="to-cart"><i class="fa fa-shopping-basket" ></i> My Cart</a>
                             </li>
                        </ul>
                        <script src="assets/js/cart.js"></script>
                    </div>
                 </div>
                 <div class="main-menu-1">
                     <nav>
                         <ul id="main-menu" class="d-flex" >
                             <li><a href="index.php?cate=all">Tất cả danh mục</a></li>
                             <li><a href="index.php?cate=main_food">Món ăn chính</a></li>
                             <li><a href="index.php?cate=cake">Bánh ngọt</a></li>
                             <li><a href="index.php?cate=drink">Thức uống</a></li>
                             <li><a href="index.php?cate=KFC">KFC</a></li>
                             <li><a href="index.php?cate=juice">Nước ép trái cây</a></li>
                         </ul>             
                     </nav>
                 </div>
            </div>           
</div>