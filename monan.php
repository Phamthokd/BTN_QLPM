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
    $result = mysqli_query($conn, 'select count(id) as total from food');
    $row = mysqli_fetch_assoc($result);
    $total_records = $row['total'];

    // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 4;

    // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
    // tổng số trang
    $total_page = ceil($total_records / $limit);

    // Giới hạn current_page trong khoảng 1 đến total_page
    if ($current_page > $total_page) {
      $current_page = $total_page;
    } else if ($current_page < 1) {
      $current_page = 1;
    }

    // Tìm Start
    $start = ($current_page - 1) * $limit;

    // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
    // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
    if (isset($_GET['id_category'])) {
      $id_catagory = $_GET['id_category'];
      $sql1 = "SELECT * FROM `food` WHERE active = '1' and category_id = $id_catagory LIMIT $start,$limit";

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
                <a href="./dathang.php?id=<?php echo $id1 ?>&id_user=<?php echo $id_user ?>" class="btn btn-outline-light">Mua</a>
              </form>
            </div>
            <!-- Card -->
          </div>

          <!--Grid column-->
      <?php
        }
      } 
      ?>
      <div class="pagination">
        <?php
        // PHẦN HIỂN THỊ PHÂN TRANG
        // BƯỚC 7: HIỂN THỊ PHÂN TRANG

        // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
        if ($current_page > 1 && $total_page > 1) {
          echo '<a href="monan-food.php?page=' . ($current_page - 1) . '&id_user=' . $id_user . '&id_category=' . $id_catagory . '">Trước</a> | ';
        }

        // Lặp khoảng giữa
        for ($i = 1; $i <= $total_page; $i++) {
          // Nếu là trang hiện tại thì hiển thị thẻ span
          // ngược lại hiển thị thẻ a
          if ($i == $current_page) {
            echo '<span>' . $i . '</span> | ';
          } else {
            echo '<a href="monan-food.php?page=' . $i . '&id_user=' . $id_user . '&id_category=' . $id_catagory . '">' . $i . '</a> | ';
          }
        }

        // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
        if ($current_page < $total_page && $total_page > 1) {
          echo '<a href="monan-food.php?page=' . ($current_page + 1) . '&id_user=' . $id_user . '&id_category=' . $id_catagory . '">Sau</a> | ';
        }
        ?>
      </div>
      <?php
    } else {
      $sql = "SELECT * FROM `food` WHERE active = '1' LIMIT $start,$limit";
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
      }?>
    <div class="pagination">
        <?php
        // PHẦN HIỂN THỊ PHÂN TRANG
        // BƯỚC 7: HIỂN THỊ PHÂN TRANG

        // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
        if ($current_page > 1 && $total_page > 1) {
          echo '<a href="monan-food.php?page=' . ($current_page - 1) . '&id_user=' . $id_user . '">Trước</a> | ';
        }

        // Lặp khoảng giữa
        for ($i = 1; $i <= $total_page; $i++) {
          // Nếu là trang hiện tại thì hiển thị thẻ span
          // ngược lại hiển thị thẻ a
          if ($i == $current_page) {
            echo '<span>' . $i . '</span> | ';
          } else {
            echo '<a href="monan-food.php?page=' . $i . '&id_user=' . $id_user . '">' . $i . '</a> | ';
          }
        }

        // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
        if ($current_page < $total_page && $total_page > 1) {
          echo '<a href="monan-food.php?page=' . ($current_page + 1) . '&id_user=' . $id_user . '">Sau</a> | ';
        }
        ?>
      </div>
    <?php
    }
    ?>
  </div>
</div>