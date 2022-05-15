<?php
if (isset($_GET['id_user'])) {
    $id_user = $_GET['id_user'];
}
?>
<?php

use function PHPSTORM_META\sql_injection_subst;

include('./partials_front/header.php'); ?>

<nav class="navbar navbar-light py-5 bg-image" style="
        background-image: url('./assets/images/chup-anh-thuc-an-1.jpg');
        height: 20vh;
      ">
    <?php
    include('./configs/database.php');
    $search = mysqli_real_escape_string($conn, $_POST['search_food']);
    ?>
    <div class="container-fluid justify-content-center">
        <form class="d-flex input-group w-auto">
            <h2 class="text-white">Các món ăn liên quan tới <a href="#" class="text-white">"<?php echo $search; ?>"</a></h2>
        </form>
    </div>
</nav>


<?php include('./configs/database.php');
$sql = "SELECT * FROM `food` WHERE active = '1' and title like '%$search%' or active = '1' and description like '%$search%'";
$res = mysqli_query($conn, $sql);
$count = mysqli_num_rows($res); ?>

<div class="container monan">
    <h2 class="py-5">Món ăn</h2>
    <div class="row">
        <!--Grid row-->
        <?php
        if ($count > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $id = $row['id'];
                $title = $row['title'];
                $description = $row['description'];
                $price = $row['price'];
                $image_name = $row['image_name']; ?>

                <!--Grid column-->
                <div class="col-lg-6 col-md-6 mb-6">
                    <!-- Card -->
                    <div class="bg-image card shadow-1-strong h-100" style="
              background-image: url('./assets/images/<?php echo $image_name ?>');
            ">
                        <div class="card-body text-white">
                            <h5 class="card-title"><?php echo $title ?></h5>
                            <h6><?php echo $price ?></h6>
                            <p> <?php echo $description ?></p>
                            <a href="./dathang.php?id=<?php echo $id ?>&id_user=<?php echo $id_user ?>" class="btn btn-outline-light">Mua</a>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!--Grid column-->

        <?php

            }
        }
        else{ ?>
        <h3>Không tìm thấy. Vui lòng kiểm tra lại từ khóa tìm kiếm!!!</h3>
        <?php
        }
        ?>
    </div>


    <?php include('./partials_front/footer.php') ?>