<?php
include('session_start.php');
include('../constants.php');
unset($_SESSION['username']);
header('Location: ' . SITEURL . '/admin/login.php');
