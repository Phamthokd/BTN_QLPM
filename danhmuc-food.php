<?php
if (isset($_GET['id_user'])) {
    $id_user = $_GET['id_user'];
}

?>
<?php include('partials_front/header.php'); ?>
<?php include('./danhmuc.php'); ?>
<?php include('partials_front/footer.php'); ?>