<?php
include('session_start.php');
if(!empty($_SESSION['login_error'])) {
    echo '<div class="alert alert-warning" role="alert">Tên đăng nhập hoặc mật khẩu không đúng<br>Vui lòng nhập lại!</div>';
}
