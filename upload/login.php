   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/main.css">  
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome/css/all.css">
    
    <title>🍔POS: retaurant mini of my</title>
</head>
<body>
<div class="sign-wrapper">
    <div id="wrapper-login">
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
            $userName = $_POST['userName'];
            $userPass = $_POST['userPass'];
            $login_check = $user->login($userName , $userPass );
        }
        if(Session::get('userLogin') == true){
            header('location:../index.php');
        }
        
?>
        <form action="login.php" method="POST">
            <span>Acount</span><br>
            <?php
                if(isset($login_check)){
                    echo $login_check;
                }
            ?>
            <input type="text" id="username" required name="userName"><br>
            <span>Pass word</span><br>
            <input type="password" id="pass" required name="userPass"><br>
            <input type="submit" name="login" id="submit-login" value="Log in"><br>
            <a href="signup.php" id="sign-up">Sign up</a>
        </form>  
                       
    </div>
</div>
</body>
</html>