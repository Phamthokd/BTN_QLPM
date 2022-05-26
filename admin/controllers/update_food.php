<?php
include('../constants.php');
include('session_start.php');
include("../../configs/database.php");
$target_dir = "../../assets/images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $price = $_POST["price"];
    $food_id = $_POST["id"];
    $active = $_POST["active"];
    $title = $_POST["food_name"];
    $description = $_POST["mo_ta"];
    $image_name = basename($_FILES["fileToUpload"]["name"]);
    $current_image = $_POST["current_image"];
    $category_id = $_POST["category_id"];
    $check = $_FILES["fileToUpload"]["tmp_name"] ? getimagesize($_FILES["fileToUpload"]["tmp_name"]) : false;
    if ($check == false) {
        $sqlUpdate = "UPDATE food SET title = '$title',description = '$description',price = '$price',category_id = '$category_id',active = '$active'WHERE id='$food_id'";
        echo $sqlUpdate;
        $du_lieu = mysqli_query($conn, $sqlUpdate);
        if ($du_lieu == 1) {
            $_SESSION['update'] = "<div class='alert alert-success mt-3'>Cập nhật thành công</div>";
            header('Location: http://localhost:88/BTN_QLPM/admin/hang/index.php');
        } else {
            $_SESSION['update'] = "<div class='alert alert-error mt-3'>Cập nhật thất bại</div>";
            header('Location: http://localhost:88/BTN_QLPM/admin/hang/index.php');
        }
    }
    if ($check !== false) {
        echo "File là một ảnh - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File không phải một ảnh.";
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Xin lỗi, kích thước file của bạn quá lớn.";
    $uploadOk = 0;
}

// Allow certain file formats
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
) {
    echo "Xin lỗi, chỉ các file có phần mở rộng JPG, JPEG, PNG & GIF được cho phép.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Xin lỗi, file của bạn chưa được tải lên.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $sqlUpdate = "UPDATE food SET title = '$title',description = '$description',price = '$price',image_name = '$image_name',category_id = '$category_id',active = '$active'WHERE id='$food_id'";
        $du_lieu = mysqli_query($conn, $sqlUpdate);
        if ($du_lieu == 1) {
            $_SESSION['update'] = "<div class='success'>Cập nhật thành công</div>";
            header('Location: http://localhost:88/BTN_QLPM/admin/hang/index.php');
        } else {
            $_SESSION['update'] = "<div class='error'>Cập nhật thất bại</div>";
            header('Location: http://localhost:88/BTN_QLPM/admin/hang/index.php');
        }
    } else {
        echo "Xin lỗi, có lỗi khi tải file của bạn.";
    }
}
