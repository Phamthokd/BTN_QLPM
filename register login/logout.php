<?php
session_start();

if(isset($_SESSION['login_ok'])){
    unset($_SESSION['login_ok']);
    header("Location:http://localhost:88/BTN_QLPM/register%20login/login.php");
}
?>