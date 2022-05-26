<?php 
    //Include COnstants Page
    include('../constants.php');
    include('../../configs/database.php');
    include('../functions/console_log.php');
    include('../controllers/session_start.php');

    //echo "Delete Food Page";

    if(isset($_GET['id']) && isset($_GET['image_name'])) //Either use '&&' or 'AND'
    {
        //Process to Delete
        //echo "Process to Delete";

        //1.  Get ID and Image NAme
        $id = $_GET['id'];
        $image_name = $_GET['image_name'];
        //2. Remove the Image if Available
        //CHeck whether the image is available or not and Delete only if available
        if($image_name != "")
        {
            // IT has image and need to remove from folder
            //Get the Image Path
            $path = "../../assets/images/".$image_name;

            //REmove Image File from Folder
            $remove = @unlink($path);

            //Check whether the image is removed or not
            if($remove==false)
            {
                //Failed to Remove image
                $_SESSION['upload'] = "<div class='alert alert-error' role='error'>Xóa ảnh không thành công.</div>";
                //REdirect to Manage Food
                header('location:'.SITEURL.'/admin/hang/index.php');
                //Stop the Process of Deleting Food
                die();
            }

        }

        //3. Delete Food from Database
        $sqlDelete1 = "DELETE FROM oder WHERE food_id=$id";
        $sqlDelete = "DELETE FROM food WHERE id=$id";
        //Execute the Query
        $du_lieu1 = mysqli_query($conn, $sqlDelete1);
        $du_lieu = mysqli_query($conn, $sqlDelete);

        //CHeck whether the query executed or not and set the session message respectively
        //4. Redirect to Manage Food with Session Message
        if($du_lieu==true && $du_lieu1==true)
        {
            //Food Deleted
            $_SESSION['delete'] = "<div class='alert alert-success' role='success'>Xóa thành công.</div>";
            header('location:'.SITEURL.'/admin/hang/index.php');
        }
        else
        {
            //Failed to Delete Food
            $_SESSION['delete'] = "<div class='alert alert-error' role='error'>Xóa thất bại.</div>";
            header('location:'.SITEURL.'/admin/hang/index.php');
        }

        

    }
    else
    {
        //Redirect to Manage Food Page
        //echo "REdirect";
        $_SESSION['unauthorize'] = "<div class='alert alert-success' role='success'>";
        header('location:'.SITEURL.'/admin/hang/index.php');
    }

?>