<?php 
    include('../controllers/session_start.php');
    include('../../configs/database.php');
    include('../constants.php');
    include('../functions/console_log.php');

    $id = $_GET['id'];

    $sql1 = "DELETE FROM oder WHERE user_id=$id";
    $sql2 = "DELETE FROM user WHERE id=$id";
    $res1 = mysqli_query($conn, $sql1);
    $res2 = mysqli_query($conn, $sql2);
    if($res1==true && $res2==true)
    {
        $_SESSION['delete'] = "<div class='success'>Xóa thành công.</div>";
        header('location:'.SITEURL.'/admin/employee/manage_user.php');
    }
    else
    {
        $_SESSION['delete'] = "<div class='error'>Xóa thất bại. Thử lại sau!</div>";
        header('location:'.SITEURL.'/admin/employee/manage_user.php');
    }

?>