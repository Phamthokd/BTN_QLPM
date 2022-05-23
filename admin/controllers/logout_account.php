<?php
   include('session_start.php');
   unset($_SESSION['username']);
   header("Location: http://localhost:88/BTN_QLPM/admin/index.php");
