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
          <h1>Quản lý hàng</h1>
        </div>
      </div>
    </div>
    <section id="actions" class="py-4 mb-4">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <a href="./them_moi.php" class="btn btn-primary">Thêm mới
            </a>
          </div>
   
        </div>
      </div>
    </section>
  </header>
  <!-- CONTENT -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                <h4 class="col-md-6">Danh sách hàng</h4>
                <div class="dropdown ml-auto col-md-3">
                  <button class="btn btn-primary btn-block dropdown-toggle" type="button" data-toggle="dropdown">
                    Đang kinh doanhh
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Đang khuyến mại</a>
                    <a class="dropdown-item" href="#">Không khuyến mại</a>
                    <a class="dropdown-item" href="#">Sắp hết hàng</a>
                    <a class="dropdown-item" href="#">Hết hàng</a>
                    <a class="dropdown-item" href="#">Đã ẩn</a>
                    <a class="dropdown-item" href="#">Quần</a>
                    <a class="dropdown-item" href="#">Áo</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <table>
            <thead class="bg-dark">
              <tr>
                <th>Mã hàng</th>
                <th>Tên hàng</th>
                <th>Danh mục</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Khuyến mại</th>
                <th style="width: 120px;"></th>
              </tr>
            </thead>
            <tbody class>
            <?php include('../functions/console_log.php') ?>
              <?php include('../data/food_list.php') ?>
              <?php foreach ($food_list as $food) {
                console_log($food);
                echo '<tr>
            <td >'. $food['id'] .'</td>
            <td >'. $food['title'] .'</td>
            <td >'. $food['description'] .'</td>
            <td >'. $food['price'] .'</td>
            <td >'. $food['category_id'] .'</td>
            <td >'. $food['active'] .'</td>
            <td>
            <a href="chi_tiet.php" class="btn btn-primary btn-sm">
              <i class="fas fa-info"></i>
            </a>
            <a href="sua.php" class="btn btn-primary btn-sm">
              <i class="fas fa-edit"></i>
            </a>
            <a href="an.php" class="btn btn-danger btn-sm">
              <i class="fas fa-eye-slash"></i>
            </a>
          </td>
        </tr>
          ';
              } ?>
            </tbody>
          </table>
          <div class="card-footer">
            <ul class="pagination">
              <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- FOOTER -->
  <div style="height: 100px;"></div>


  <?php include('../shared/script.php') ?>'
  <?php include('../shared/script.php') ?>
</body>

</html>