<?php 
    include('./session_start.php');
    include('../constants.php');
    include('../../configs/database.php');
    include('../shared/header.php');
    include('../shared/menu.php');
?>
<?php
    if(isset($_POST['submit']))
    {
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']); 

        $sql = "INSERT INTO admin SET full_name='$full_name',user_name='$username',pass='$password'";
        $res = mysqli_query($conn, $sql);
        if($res==TRUE)
        {
            $_SESSION['add'] = "<div class='success'>Admin được thêm thành công.</div>";
            header("location:".SITEURL.'/admin/employee/manage_admin.php');
        }
        else
        {
            $_SESSION['add'] = "<div class='error'>Admin thêm thất bại.</div>";
            header("location:".SITEURL.'/admin/employee/manage_admin.php');
        }
    }
    
?>
<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>

        <div class="col-md-8">
            <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Họ tên: </td>
                    <td>
                        <input type="text" name="full_name" placeholder="Nhập tên của bạn" required>
                    </td>
                </tr>

                <tr>
                    <td>Tên đăng nhập: </td>
                    <td>
                        <input type="text" name="username" placeholder="Tên đăng nhập của bạn" required>
                    </td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="password" name="password" placeholder="Mật khẩu của bạn" required>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn btn-block btn-primary" >
                    </td>
                </tr>

            </table>
        </div>
        </form>


    </div>
</div>

<?php  include('../shared/footer.php'); ?>

