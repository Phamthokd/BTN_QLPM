<?php
include('session_start.php');
include("../../configs/database.php");
$target_dir = "../../assets/images/";
$target_file = basename($_FILES["fileToUpload"]["name"]) != '' ?  $target_dir . basename($_FILES["fileToUpload"]["name"]) : null;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"]) && file_exists($target_file)) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File là một ảnh - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File không phải một ảnh.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Xin lỗi, file này đã tồn tại.";
    $uploadOk = 0;
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
include('../functions/console_log.php');
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Xin lỗi, file của bạn chưa được tải lên.";
    $_SESSION['login'] = '<div class="alert alert-success" role="success">Them hang khong thanh cong</div>';
    header('Location: http://localhost:88/BTN_QLPM/admin/hang/index.php');
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $price = $_POST["price"];
        $active = $_POST["active"];
        $title = $_POST["food_name"];
        $description = $_POST["mo_ta"];
        $imagename = basename($_FILES["fileToUpload"]["name"]);
        $category_id = $_POST["category_id"];
        $sqlInsert = "INSERT INTO food (title, description, price,image_name,category_id,active) VALUES ('$title','$description','$price','$imagename','$category_id','$active')";
        $du_lieu = mysqli_query($conn, $sqlInsert);
        if ($du_lieu == 1) {
            $_SESSION['upload'] = "<div class='alert alert-success' role='success'>Thêm thành công.</div>";
            header('Location: http://localhost:88/BTN_QLPM/admin/hang/index.php');
        } else echo $du_lieu;
    } else {
        echo "Xin lỗi, có lỗi khi tải file của bạn.";
    }
}
