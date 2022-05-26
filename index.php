<?php
if (isset($_GET['id_user'])) {
    $id_user = $_GET['id_user'];
}
?>
<?php include("partials_front/header.php"); ?>
<div class="carousel container py-3">
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleControls" class="carousel slide" data-mdb-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">     
                        <img src="./assets/images/chup-anh-thuc-an-1.png" class="d-block w-100 img-fluid " alt="Camera" />
                    </div>
                    <div class="carousel-item">
                    <img src="./assets/images/banhmi.png" class="d-block w-100 img-fluid " alt="Wild Landscape" />
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/images/banh-donut.png" class="d-block w-100 img-fluid h-50" alt="Exotic Fruits" />
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
<?php include('./danhmuc.php'); ?>
<?php include('./monan.php'); ?>
<?php include('partials_front/footer.php'); ?>
<!-- <script>
    $(document).ready(function () {
       alert("Đăng nhập thành công");

});
</script> -->