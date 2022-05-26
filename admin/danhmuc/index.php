<!DOCTYPE html>
<html lang="en">
<?php include('../shared/header.php') ?>

<body>
  <?php include('../shared/menu.php') ?>
  <!-- HEADER -->
  <header id="main-header" class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>Quản lý danh mục</h1>
        </div>
      </div>
    </div>

    <section id="actions" class="py-4 mb-4">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <a href="./them_moi.php" class="btn btn-primary">Thêm mới danh mục
            </a>
          </div>

        </div>
      </div>
    </section>
  </header>

  <!-- CONTENT -->

  <section id="posts">
    <div class="container">
      <?php
      if (isset($_GET['response'])) {
        if ($_GET['response'] == 'success') {
          echo '<h4>Xóa thành công</h4>';
        }
        if ($_GET['response'] == 'fail') {
          echo '<h4>Xóa thất bại</h4>';
        }
      }
      ?>
      <?php
      include('../data/category_list.php');
      $result = mysqli_query($conn, 'select count(id) as total from category');
      $row = mysqli_fetch_assoc($result);
      $total_records = $row['total'];

      // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
      $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
      $limit = 10;

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
      $result = mysqli_query($conn, "select * from category LIMIT $start,$limit");
      ?>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                <h4 class="col-md-6">Danh sách danh mục</h4>
                <div class="dropdown ml-auto col-md-3">

                </div>
              </div>
            </div>
          </div>
          <table>
            <thead class="bg-dark">
              <tr>
                <th>Mã danh mục</th>
                <th>Tên danh mục</th>
                <th>Hoạt động</th>
                <th style="width: 120px;"></th>
              </tr>
            </thead>
            <tbody class>
              <?php include('../functions/console_log.php') ?>

              <?php
              // PHẦN HIỂN THỊ TIN TỨC
              // BƯỚC 6: HIỂN THỊ DANH SÁCH TIN TỨC
              while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>
                <td >' . $row['id'] . '</td>
                <td >' . $row['title'] . '</td>
                <td >' . $row['active'] . '</td>
      
    
                <td class="d-flex justify-content-around">
                <a href="sua.php?id=' . $row['id'] . '" class="btn btn-primary btn-sm">
                <i class="fas fa-edit"></i>
                </a>
                <a href="../controllers/delete_category.php?id=' . $row['id'] . '"" class="btn btn-danger btn-sm ms-auto">
                <i class="fas fa-trash"></i>
                </a>
              </td>
            </tr>
                
          ';
              } ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="pagination">
        <?php
        // PHẦN HIỂN THỊ PHÂN TRANG
        // BƯỚC 7: HIỂN THỊ PHÂN TRANG

        // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
        if ($current_page > 1 && $total_page > 1) {
          echo '<a href="index.php?page=' . ($current_page - 1) . '">Trước</a> | ';
        }

        // Lặp khoảng giữa
        for ($i = 1; $i <= $total_page; $i++) {
          // Nếu là trang hiện tại thì hiển thị thẻ span
          // ngược lại hiển thị thẻ a
          if ($i == $current_page) {
            echo '<span>' . $i . '</span> | ';
          } else {
            echo '<a href="index.php?page=' . $i . '">' . $i . '</a> | ';
          }
        }

        // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
        if ($current_page < $total_page && $total_page > 1) {
          echo '<a href="index.php?page=' . ($current_page + 1) . '">Sau</a> | ';
        }
        ?>
      </div>
    </div>
    </div>
  </section>
  <!-- FOOTER -->
  <div style="height: 100px;"></div>
  <?php include('../shared/footer.php') ?>
  <!-- SCRIPT -->
  <?php include('../shared/script.php') ?>
</body>

</html>