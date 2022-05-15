<?php
$target_dir = "../../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
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
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Xin lỗi, chỉ các file có phần mở rộng JPG, JPEG, PNG & GIF được cho phép.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Xin lỗi, file của bạn chưa được tải lên.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "File ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " đã được tải lên.";
  } else {
    echo "Xin lỗi, có lồi khi tải file của bạn.";
  }
}


include("../../configs/database.php");
$price = $_POST["price"];
$title = $_POST["food_name"];
$description = $_POST["mo_ta"];
$imagename = basename( $_FILES["fileToUpload"]["name"]);
$sqlInsert = "INSERT INTO food (title, description, price,image_name,categori_id)
VALUES ($title,$description,$price,$imagename)";
$du_lieu = mysqli_query($conn, $sqlUpdate);
?>