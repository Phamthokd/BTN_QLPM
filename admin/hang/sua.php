<!DOCTYPE html>
<html lang="en">

<?php include('../shared/header.php') ?>

<body>
  <!-- NAVIGATION -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-3">
    <div class="container">
      <a href="#" class="navbar-brand">Bich Lua</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item px-2">
            <a href="../hang/index.php" class="nav-link active">Hàng</a>
          </li>
          <li class="nav-item px-2">
            <a href="../danh_muc_hang/index.php" class="nav-link">Danh mục hàng</a>
          </li>
          <li class="nav-item px-2">
            <a href="../ban_hang/index.php" class="nav-link">Bán hàng</a>
          </li>
          <li class="nav-item px-2">
            <a href="../giao_hang/index.php" class="nav-link">Giao hàng</a>
          </li>
          <li class="nav-item px-2">
            <a href="../tai_khoan/index.php" class="nav-link">Tài khoản</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown mr-3">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <i class="fas fa-user"></i> Hi, Thảo!
            </a>
            <div class="dropdown-menu">
              <a href="../tai_khoan/cai_dat.php" class="dropdown-item">
                <i class="fas fa-cog"></i> Cài đặt
              </a>
              <a href="../login.php" class="dropdown-item">
                <i class="fas fa-sign-out-alt"></i> Đăng xuất
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- HEADER -->
  <header id="main-header" class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>Sửa</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- CONTENT -->
  <section id="posts">
    <div class="container">
      <div class="row py-2">
        <div class="col-md-8">
          <form>
            <input type="hidden" name="id">
            <div class="form-group">
              <label for="ten_tieu_de">Tên hàng</label>
              <input type="text" class="form-control" />
            </div>
            <div class="form-group">
              <label for="">Danh mục hàng</label>
              <select class="form-control">
                <option>-- Chọn một danh mục --</option>
                <option>Thịt</option>
                <option>Rau</option>
                <option>Trái cây</option>
              </select>
            </div>
            <div class="form-group">
              <label for="image">Ảnh sản phẩm</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="image" />
                <label for="image" class="custom-file-label">Chọn ảnh bìa</label>
              </div>
              <small class="form-text text-muted">Max Size 3mb</small>
            </div>
            <div class="form-group">
              <label for="mo_ta">Số lượng</label>
              <input type="number" class="form-control">
            </div>
            <div class="form-group">
              <label for="mo_ta_chi_tiet">Giá</label>
              <input type="number" class="form-control">
            </div>
            <div class="form-group">
              <label for="mo_ta_chi_tiet">Mô tả</label>
              <textarea name="mo_ta" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="mo_ta_chi_tiet">Mô tả chi tiết</label>
              <textarea name="mo_ta_chi_tiet" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-block btn-primary">Thêm mới</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- FOOTER -->
  <div style="height: 100px;"></div>
  <footer id="main-footer" class="bg-dark text-white mt-5" style="height: 50px; line-height:50px; text-align: center;">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="text-center">
            Copyright © 2019 Bich Lua - All rights reserved
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- SCRIPTS -->
  <script src="../assets/js/jquery-3.3.1.js"></script>
  <script src="../assets/js/popper.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>