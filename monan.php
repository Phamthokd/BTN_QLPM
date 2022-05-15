<?php
if (isset($_GET['id_user'])) {
  $id_user = $_GET['id_user'];
}
?>
<div class="container monan">
  <!--  -->
  <h2 class="py-5">Món ăn</h2>
  <div class="row">
    <!--Grid row-->
    <?php
    include('./configs/database.php');
    if (isset($_GET['id_category'])) {
      $id_catagory = $_GET['id_category'];
      $sql1 = "SELECT * FROM `food` WHERE active = '1' and category_id = $id_catagory ";
      $res1 = mysqli_query($conn, $sql1);
      $count1 = mysqli_num_rows($res1);
      if ($count1 > 0) {
        while ($row1 = mysqli_fetch_assoc($res1)) {
          $id1 = $row1['id'];
          $title1 = $row1['title'];
          $description1 = $row1['description'];
          $price1 = $row1['price'];
          $image_name1 = $row1['image_name'];
    ?>
          <!--Grid column-->
          <div class="col-lg-6 col-md-6 mb-6">
            <!-- Card -->
            <div class="bg-image card shadow-1-strong h-100" style="
              background-image: url('./assets/images/<?php echo $image_name1 ?>');
            ">
              <form class="card-body text-white">
                <h5 class="card-title"><?php echo $title1 ?></h5>
                <h6><?php echo $price1 ?></h6>
                <p> <?php echo $description1 ?></p>
                <a href="./dathang.php?id=<?php echo $id ?>&id_user=<?php echo $id_user ?>" class="btn btn-outline-light">Mua</a>
              </form>
            </div>
            <!-- Card -->
          </div>
          <!--Grid column-->
        <?php
        }
      }
    } else {
      $sql = "SELECT * FROM `food` WHERE active = '1'";
      $res = mysqli_query($conn, $sql);
      $count = mysqli_num_rows($res);
      if ($count > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
          $id = $row['id'];
          $title = $row['title'];
          $description = $row['description'];
          $price = $row['price'];
          $image_name = $row['image_name'];
        ?>

          <!--Grid column-->
          <div class="col-lg-6 col-md-6 mb-6">
            <!-- Card -->
            <div class="bg-image card shadow-1-strong h-100" style="
              background-image: url('./assets/images/<?php echo $image_name ?>');
            ">
              <form class="card-body text-white">
                <h5 class="card-title"><?php echo $title ?></h5>
                <h6><?php echo $price ?></h6>
                <p> <?php echo $description ?></p>
                <a href="./dathang.php?id=<?php echo $id ?>&id_user=<?php echo $id_user ?>" class="btn btn-outline-light">Mua</a>
              </form>
            </div>
            <!-- Card -->
          </div>
          <!--Grid column-->

    <?php
        }
      }
    }
    ?>
  </div>