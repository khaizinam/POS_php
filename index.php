

<?php
            session_start();
            //call include file 
            include('config/config.php') ;
            include('config/format.php') ;
            include('classes/session.php') ;
            include('classes/class.php') ;
            //class cal
            if(Session::get('userLogin')==false || Session::get('userLogin')==NULL){
                header('location:upload/login.php');
            }
            $category = new category();
            $cart = new cart();
            //session work
            if(isset($_GET['page'])){
                Session::set('page',$_GET['page']);
            } 
            //direct page to other page
            if(isset($_SESSION['page']) && $_SESSION['page']=='cart'){//CART page
                include('inc/head.php');//goi file head cua html
                include('upload/cart.php');  
            //call main menu 
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