<?php 
    include('../controllers/session_start.php');
    include('../../configs/database.php');
    include('../constants.php');
    include('../shared/header.php');
    include('../shared/menu.php');
?>

<div class="main-content">
    <div class="wrapper">
        <h1>Cập nhật Admin</h1>
        <?php 
            $id=$_GET['id'];
            $sql="SELECT * FROM admin WHERE id=$id";
            $res=mysqli_query($conn, $sql);
            if($res==true)
            {
                $count = mysqli_num_rows($res);
                if($count==1)
                {
                    $row=mysqli_fetch_assoc($res);

                    $full_name = $row['full_name'];
                    $username = $row['user_name'];
                }
                else
                {
                    header('location:'.SITEURL.'/admin/employee/manage_admin.php');
                }
            }
        
        ?>

        <div class="col-md-8">
            <form action="" method="POST">

                <table class="tbl-30">
                    <tr>
                        <td>Họ tên: </td>
                        <td>
                            <input type="text" name="full_name" value="<?php echo $full_name; ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>Tên đăng nhập: </td>
                        <td>
                            <input type="text" name="username" value="<?php echo $username; ?>">
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

<?php 

    if(isset($_POST['submit']))
    {
        $id = $_POST['id'];
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];

        $sql = "UPDATE admin SET full_name = '$full_name',user_name = '$username' WHERE id='$id'";

        $res = mysqli_query($conn, $sql);

        if($res==true)
        {
            $_SESSION['update'] = "<div class='success'>Cập nhật thành công.</div>";
            header('location:'.SITEURL.'/admin/employee/manage_admin.php');
        }
        else
        {
            $_SESSION['update'] = "<div class='error'>Cập nhật thất bại.</div>";
            header('location:'.SITEURL.'/admin/employee/manage_admin.php');
        }
    }

?>


<?php  include('../shared/footer.php');  ?>