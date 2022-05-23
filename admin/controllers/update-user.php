<?php
include('../controllers/session_start.php');
include('../../configs/database.php');
include('../constants.php');
include('../shared/header.php');
include('../shared/menu.php');
?>
<?php

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $fisrt_name = $_POST['fisrt_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $registration_date = $_POST['registration_date'];
    $pass = $_POST['pass'];

    $sql = "UPDATE `user` SET `id`='$id',`fisrt_name`='$fisrt_name',`last_name`='$last_name',`username`='$username',`registration_date`='$registration_date',`email`='$email',`phone`='$phone',`address`='$address',`pass`='$pass' WHERE id='$id'";

    $res = mysqli_query($conn, $sql);

    if ($res == true) {
        $_SESSION['update'] = "<div class='success'>Cập nhật thành công.</div>";
        header('location:' . SITEURL . '/admin/employee/manage_user.php');
    } else {
        $_SESSION['update'] = "<div class='error'>Cập nhật thất bại.</div>";
        header('location:' . SITEURL . '/admin/employee/manage_user.php');
    }
}

?>
<div class="main-content">
    <div class="wrapper">
        <h1>Cập nhật người dùng</h1>
        <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM user WHERE id=$id";
        $res = mysqli_query($conn, $sql);
        if ($res == true) {
            $count = mysqli_num_rows($res);
            if ($count == 1) {
                $row = mysqli_fetch_assoc($res);
                $fisrt_name = $row['fisrt_name'];
                $last_name = $row['last_name'];
                $username = $row['username'];
                $address = $row['address'];
                $email = $row['email'];
                $phone = $row['phone'];
                $registration_date = $row['registration_date'];
                $pass = $row['pass'];
            } else {
                // header('location:' . SITEURL . '/admin/employee/manage_admin.php');
            }
        }

        ?>

        <div class="col-md-8">
            <form action="" method="POST">
                <table class="tbl-30">
                    <tr>
                        <td>Họ: </td>
                        <td>
                            <input type="text" name="fisrt_name" value="<?php echo $fisrt_name; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Tên: </td>
                        <td>
                            <input type="text" name="last_name" value="<?php echo $last_name; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Tên đăng nhập: </td>
                        <td>
                            <input type="text" name="username" value="<?php echo $username; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Địa chỉ: </td>
                        <td>
                            <input type="text" name="address" value="<?php echo $address; ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>Email: </td>
                        <td>
                            <input type="email" name="email" value="<?php echo $email; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Số điện thoại: </td>
                        <td>
                            <input type="tel" name="phone" value="<?php echo $phone; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Ngày đăng kí: </td>
                        <td>
                            <input type="date" name="registration_date" value="<?php echo $registration_date; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Mật khẩu: </td>
                        <td>
                            <input type="password" name="pass" value="<?php echo $pass; ?>">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="submit" name="submit" value="Update Admin" class="btn btn-block btn-primary">
                        </td>
                    </tr>
                </table>

            </form>
        </div>
    </div>
</div>



<?php include('../shared/footer.php');  ?>