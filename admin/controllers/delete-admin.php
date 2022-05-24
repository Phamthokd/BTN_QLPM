<?php 
    include('./session_start.php');
    include('../../configs/database.php');
    include('../constants.php');

    $id = $_GET['id'];

    $sql = "DELETE FROM admin WHERE id=$id";

    $res = mysqli_query($conn, $sql);

    if($res==true)
    {
        $_SESSION['delete'] = "<div class='success'>Xóa thành công.</div>";
        header('location:'.SITEURL.'/admin/employee/manage_admin.php');
    }
    else
    {
        $_SESSION['delete'] = "<div class='error'>Xóa thất bại. Thử lại sau</div>";
        header('location:'.SITEURL.'/admin/employee/manage_admin.php');
    }

?>