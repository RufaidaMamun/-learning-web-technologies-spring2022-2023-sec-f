<?php 

    session_start();
    setcookie('status', $_REQUEST["username"], time()-10, '/');
    header('location: rlogin.php');

?>