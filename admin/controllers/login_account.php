<?php
$username = $_POST["username"];
$password = $_POST["password"];

include("../../configs/database.php");

$sql = "
        SELECT *
        FROM admin
        WHERE user_name = '" . $username . "' AND pass = '" . $password . "'
    ";

$du_lieu = mysqli_query($conn, $sql);
$so_luong = mysqli_num_rows($du_lieu);
if ($so_luong == 1) {
    session_start();
    unset($_SESSION['login_error']);
    $_SESSION['username'] = $username;
    $_SESSION['login'] = '<div class="alert alert-success" role="success">Đăng nhập thành công</div>';
    header("Location: http://localhost:88/BTN_QLPM/admin/hang/index.php");
} else {
    session_start();
    $_SESSION['login_error'] = true;
    header('Location: http://localhost:88/BTN_QLPM/admin/login.php');
};
