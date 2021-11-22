
<?php
        session_start();
        if(isset($_SESSION['user_name'])){
            include('config/config.php') ;
            include('classes/func.php') ;
            $live_user_name=$_SESSION['user_name'];
            $live_user_id=$_SESSION['user_id'];
            if(isset($_GET['page'])){
                $_SESSION['page']=$_GET['page'];
            } 
            //direct page to other page
            if(isset($_SESSION['page']) && $_SESSION['page']=='cart'){
                include('inc/head.php');
                include('upload/cart.php');  
            } elseif((isset($_SESSION['page'])&& $_SESSION['page']=='main_menu' )|| (!isset($_SESSION['page']) || $_SESSION['page']=='') ){
                include('inc/head.php');  
            
           
               

?>
                    <body>
                        <div class="sys-wrapper">
                            <?php include('inc/header_menu.php')?>
                            <!-- End header -->
                                <div id="Item-menu" class="d-flex">             
                                        <?php                           
                                            include("upload/side_bar_all.php");//sidebar                               
                                            include("upload/category.php");//category
                                        ?>                                  
                                </div>     
                            <!-- end content-->
                            <?php include ('inc/footer.php');?>
                            <!-- end footer-->
                            </div> 
                    </body>
                    </html>
            <?php } ?>
<?php
        } else{//tra ve trang login
            header('location:upload/login.php');
        }
?>