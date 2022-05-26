<?php 
    include("../../configs/database.php");
    if(isset($_GET['id']))
        $id = $_GET['id'];
    $sql = "DELETE FROM `oder` WHERE id = $id";
    $res = mysqli_query($conn, $sql);
    if($res==TRUE){
        $value='success1';
        header("Location: http://localhost:88/BTN_QLPM/admin/donhang/index.php?response=$value");
    }else{
        $value='fail1';
        header("Location: http://localhost:88/BTN_QLPM/admin/donhang/index.php?response=$value");
    }
    mysqli_close($conn)
?>