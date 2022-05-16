<?php
include('session_start.php');
if (empty($_SESSION['username'])) {
    header('Location: http://localhost:88/BTN_QLPM/admin/login.php');
}

