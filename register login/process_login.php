<?php
session_start();
if (isset($_POST['btn_login'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    //thực hiện truy vấn
    //B1: kết nối
    include('../configs/database.php');
    //b2: truy vấn
    //kiểm tra đã có email đk hợp lệ chưa
    $sql_1   =   "SELECT * FROM `user` WHERE email = '$email'";
    $res  =  mysqli_query($conn, $sql_1);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        $pass_saved = $row['pass'];
        if($pass == $pass_saved){//kiểm tra mk nhập và mk trên hệ thống có trùng ko và thêm đk là status phaiar bằng 1
            header('Location: http://localhost:88/BTN_QLPM/index.php?email='.$email.'');
        }else {
            $values = 'false';
            header("location:login.php?response=$values");
        }
    } else {

        $values = "false";
        header("Location:login.php?response=$values");
    }
}
?>