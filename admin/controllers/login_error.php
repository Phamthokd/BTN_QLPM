<?php
include('session_start.php');
if(!empty($_SESSION['login_error'])) {
    echo '<div class="alert alert-warning" role="alert">username or password is not correct</div>';
}
