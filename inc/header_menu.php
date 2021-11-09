<?php 
    if(isset($_GET['action']) && $_GET['action'] == 'signout'){
        unset($_SESSION['login']);
        header('location:upload/login.php');
    }
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
                                 <a href="admin/index.php">Manage/ Clerk</a>
                                 <a href="cart/index.php">My Cart</a>
                                 <a href="index.php?action=signout"><i class="fas fa-sign-out-alt"></i>Sign out</a>
                               </div>
                             </li>
                             <li> 
                                <a href="cart/index.php" id="to-cart"><i class="fa fa-shopping-basket" ></i> My Cart</a>
                             </li>
                        </ul>
                        <script src="assets/js/cart.js"></script>
                    </div>
                 </div>
                 <div class="main-menu-1">
                     <nav>
                         <ul id="main-menu" class="d-flex" >
                             <li><a  href="index.php?cate=all">All</a></li>
                             <li><a href="index.php?cate=combo">Combo</a></li>
                             <li><a href="index.php?cate=cake">Cake</a></li>
                             <li><a href="index.php?cate=milk_tea">Milk Tea</a></li>
                             <li><a href="index.php?cate=fast_food">Fast Food</a></li>
                             <li><a href="index.php?cate=juice">Juice</a></li>
                         </ul>             
                     </nav>
                 </div>
            </div>           
</div>