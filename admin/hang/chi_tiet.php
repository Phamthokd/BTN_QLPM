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
          <h1>Chi tiết</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- CONTENT -->
  <section id="chi_tiet_hang">
    <div class="container">
      <dl>
        <dt>Mã hàng</dt>
        <dd>QT01</dd>
        <dt>Tên hàng</dt>
        <dd>Quần tây QT01</dd>
        <dt>Danh mục</dt>
        <dd>Quần</dd>
        <dt>Ảnh sản phẩm</dt>
        <dd>anh1</dd>
        <dd>anh2</dd>
        <dd>anh3</dd>
        <dt>Số lượng</dt>
        <dd>15</dd>
        <dt>Giá cả</dt>
        <dd>15</dd>
        <dt>Mô tả</dt>
        <dd>abcdefghijklmnop</dd>
        <dt>Mô tả chỉ tiết</dt>
        <dd>abcdefghijklmnop</dd>
      </dl>
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