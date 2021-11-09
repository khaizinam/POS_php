<?php
        if(isset($_GET['action']) == 'return_login'){
            header('location:login.php');
        }
?>
<p>Wrong password / username please return</p>

    <a href="wrong.php?action=return_login">return</a>
