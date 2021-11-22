
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
    include('../config/config.php');
    include('../classes/func.php');
    if(isset($_POST['login'])){
        $tai_khoan = $_POST['username'];
        $pass = $_POST['pass'];
        $sql = "SELECT * FROM username WHERE username='".$tai_khoan."' AND password='".$pass."' LIMIT 1";
        $row = mysqli_query($mysqli, $sql);
        $acc_001 = mysqli_fetch_array($row);
        $count = mysqli_num_rows($row);
        if($count>0){
            $userID=$acc_001['id'];
            $userName=$acc_001['name'];
            session_set('user_id', $userID);
            session_set('user_name', $userName);
            session_set('login', true);
            header("location:../index.php?page=main_menu");
        }else {
            $message = "wrong password/ username";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
?>
        <form action="login.php" method="POST">
            <span>Acount</span><br>
            <input type="text" id="username" required name="username"><br>
            <span>Pass word</span><br>
            <input type="password" id="pass" required name="pass"><br>
            <input type="submit" name="login" id="submit-login" value="Log in"><br>
            <a href="signup.php" id="sign-up">Sign up</a>
        </form>                            
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</div>
</body>
</html>