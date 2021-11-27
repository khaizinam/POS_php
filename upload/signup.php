
<!DOCTYPE htnl>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/main.css">  
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome/css/all.css">
    <script src="assets/js/cart.js"></script>
    <title>🍔POS: retaurant mini of my</title>
</head>
<body>
<?php
        session_start();
        //file call
        include('../config/format.php'); 
        include('../config/config.php'); 
        include('../classes/session.php');
        include('../classes/class.php'); 
        //work
        $user = new userLogin();
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $fullname = $_POST['name'];
            $userName = $_POST['userName'];
            $userPass = $_POST['password'];
            $repassword = $_POST['repassword'];
            $email = $_POST['email'];
            $phone_number = $_POST['phone_number'];
            $login_check = $user->signup($userName , $userPass ,$fullname,$repassword, $email,  $phone_number);
        }
        if(Session::get('userLogin') == true){
            header('location:../index.php');
        }
        
?>
    <div class="sign-wrapper">
            <!-- End header -->
            <div id="wrapper-login">
                <form action="signup.php" method="POST">
                    <span>Email</span><br>
                <?php
                    if(isset($login_check)){
                    echo $login_check;
                }
                ?>
                    <input type="text"name = "email" placeholder="email"><br>
                    <span>Phone Number</span><br>
                    <input type="text"name = "phone_number" placeholder="phone number" ><br>
                    <span>Tên hiển thị</span><br>
                    <input type="text"name = "name" placeholder="full name" ><br>
                    <span>Tên đăng nhập</span><br>
                    <input type="text" name = "userName" placeholder="Tên login" ><br>
                    <span>mật khẩu</span><br>
                    <input type="password"name= "password" placeholder="Mật khẩu" ><br>
                    <span>Nhập lại mật khẩu</span><br>
                    <input type="password"name= "repassword" placeholder="Nhập lại Mật khẩu"  ><br>
                    <input type="submit" name="signup" id="submit-login" value="Sign up"><br>
                    <a href="login.php" id="sign-up" >Sign in</a>     
                </form>
                    
            </div>          
        </div>       
</body>
</html>