<?php
include('../constants.php');
include('../../configs/database.php');
include('../shared/header.php');
include('../shared/menu.php');
?>
<?php
if (isset($_POST['submit'])) {
    $fisrt_name = $_POST['fisrt_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $registration_date = $_POST['registration_date'];
    $pass = md5($_POST['pass']);

    $sql = "INSERT INTO `user`(`fisrt_name`, `last_name`, `username`, `registration_date`, `email`, `phone`, `address`, `pass`) VALUES ('$fisrt_name','$last_name','$username','$address','$email','$phone','$registration_date','$pass')";
    $res = mysqli_query($conn, $sql);
    if ($res == TRUE) {
        $_SESSION['add'] = "<div class='success'>Người dùng được thêm thành công.</div>";
        header("location:" . SITEURL . '/admin/employee/manage_user.php');
    } else {
        $_SESSION['add'] = "<div class='error'>Người dùng thêm thất bại.</div>";
        header("location:" . SITEURL . '/admin/employee/manage_user.php');
    }
}

?>
<div class="main-content">
    <div class="wrapper">
        <h1>Thêm người dùng</h1>
        <div class="col-md-8">
            <form action="" method="POST">
                <table class="tbl-30">
                    <tr>
                        <td>Họ: </td>
                        <td>
                            <input type="text" name="fisrt_name" placeholder="Nhập họ của bạn">
                        </td>
                    </tr>
                    <tr>
                        <td>Tên: </td>
                        <td>
                            <input type="text" name="last_name" placeholder="Nhập tên của bạn">
                        </td>
                    </tr>
                    <tr>
                        <td>Tên đăng nhập: </td>
                        <td>
                            <input type="text" name="username" placeholder="Nhập đăng nhập của bạn">
                        </td>
                    </tr>
                    <tr>
                        <td>Địa chỉ: </td>
                        <td>
                            <input type="text" name="address" placeholder="Nhập địa chỉ của bạn">
                        </td>
                    </tr>

                    <tr>
                        <td>Email: </td>
                        <td>
                            <input type="email" name="email" placeholder="Nhập email của bạn">
                        </td>
                    </tr>
                    <tr>
                        <td>Số điện thoại: </td>
                        <td>
                            <input type="number" name="phone" placeholder="Điện thoại của bạn">
                        </td>
                    </tr>
                    <tr>
                        <td>Ngày đăng kí: </td>
                        <td>
                            <input type="date" name="registration_date" placeholder="">
                        </td>
                    </tr>
                    <tr>
                        <td>Mật khẩu: </td>
                        <td>
                            <input type="password" name="pass" placeholder="Mật khẩu của bạn">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add Admin" class="btn btn-block btn-primary">
                        </td>
                    </tr>

                </table>
        </div>
        </form>


    </div>
</div>

<?php include('../shared/footer.php'); ?>