<?php 
    include('../../configs/database.php');
    include('../constants.php');

    $id = $_GET['id'];

    $sql = "DELETE FROM admin WHERE id=$id";

    $res = mysqli_query($conn, $sql);

    if($res==true)
    {
        $_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully.</div>";
        header('location:'.SITEURL.'/admin/employee/manage_admin.php');
    }
    else
    {
        $_SESSION['delete'] = "<div class='error'>Failed to Delete Admin. Try Again Later.</div>";
        header('location:'.SITEURL.'/admin/employee/manage_admin.php');
    }

?>