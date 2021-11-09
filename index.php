
<?php
        session_start();
        if(isset($_SESSION['login'])){
            include('inc/head.php');include('config/config.php') ;
        
?>
<body>
    <div class="sys-wrapper">
        <?php include('inc/header_menu.php')?>
        <!-- End header -->
            <div id="Item-menu" class="d-flex">             
                    <?php                           
                        include("sidebar/side_bar_all.php");                               
                        include("category/category.php");
                    ?>                                  
            </div>     
         <!-- end content-->
        <?php include ('inc/footer.php');?>
        <!-- end footer-->
        </div> 
</body>
</html>
<?php
        } else{
            header('location:upload/login.php');
        }
?>