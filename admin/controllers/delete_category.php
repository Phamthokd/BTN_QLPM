<?php 
    include("../../configs/database.php");
    if(isset($_GET['id']))
        $id = $_GET['id'];
    $sql = "DELETE FROM `category` WHERE id = $id";
    $res = mysqli_query($conn, $sql);
    if($res==TRUE){
        $value='success';
        header("Location: http://localhost:88/BTN_QLPM/admin/danhmuc/index.php?response=$value");
    }else{
        $value='fail';
        header("Location: http://localhost:88/BTN_QLPM/admin/danhmuc/index.php?response=$value");
    }
    mysqli_close($conn)
?>