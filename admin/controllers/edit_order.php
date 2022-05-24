<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        include("../../configs/database.php");
        $sql = "select * from oder where id = $id";
        $res = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($res);
        if($count > 0){
            $row = mysqli_fetch_assoc($res);
            $status = $row['status'];
            // echo $status;
            if($status == 0){
                $sql1 = "UPDATE `oder` SET `status`= 1 WHERE id = $id";
                $res1 = mysqli_query($conn,$sql1);
                if($res1>0){
                    $values = 'success';
                    header("Location:http://localhost:88/BTN_QLPM/admin/donhang/index.php?response=$values");
                }
                else{
                    $values = 'fail';
                    header("Location:http://localhost:88/BTN_QLPM/admin/donhang/index.php?response=$values");
                }
            }
            else{
                $sql2 = "UPDATE `oder` SET `status`= 2 WHERE id = $id";
                $res2 = mysqli_query($conn,$sql2);
                if($res2>0){
                    $values = 'complete';
                    header("Location:http://localhost:88/BTN_QLPM/admin/donhang/index.php?response=$values");
                }
                else{
                    $values = 'fail';
                    header("Location:http://localhost:88/BTN_QLPM/admin/donhang/index.php?response=$values");
                }
            }
        }else{
            echo "có lỗi";
        }
        
        
    }
?>