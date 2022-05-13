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
          <h1>Thêm mới</h1>
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
                <option>Quần</option>
                <option>Áo</option>
                <option>Giày</option>
                <option>Phụ kiện</option>
              </select>
            </div>

            <div class="variations px-2 my-3" style="border: solid #ced4da 1px;">
              <div class="mb-3 pt-2 px-2" style="font-size: 20px;">Phân loại hàng</div>
              <div class="btn btn-primary" onclick=them_moi()>Thêm phân loại</div>
              <div class="variation">
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="mo_ta">Màu</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="">Danh mục hàng</label>
                      <select class="form-control">
                        <option>-- Chọn một size --</option>
                        <option>X</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                      </select>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="mo_ta">Số lượng</label>
                      <div class="row">
                        <div class="col-sm-9">
                          <input type="number" class="form-control"></div>
                        <div class="col-sm-3 variation-remove">
                          <a href="tu_choi.php" class="btn btn-danger"><i class="fas fa-times"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="form-group mb-3">
              <label for="mo_ta_chi_tiet">Giá</label>
              <input type="number" class="form-control">
            </div>

            <div class="images">
              <div class="mb-2 mt-2">Ảnh sản phẩm</div>
              <div class="upload-btn-wrapper">
                <button class="button"><span>+</span></button>
                <input type="file" name="myfile" />
              </div>
              <div class="upload-btn-wrapper">
                <button class="button"><span>+</span></button>
                <input type="file" name="myfile" />
              </div>
              <div class="upload-btn-wrapper">
                <button class="button"><span>+</span></button>
                <input type="file" name="myfile" />
              </div>
              <div class="upload-btn-wrapper">
                <button class="button"><span>+</span></button>
                <input type="file" name="myfile" />
              </div>
              <div class="upload-btn-wrapper">
                <button class="button"><span>+</span></button>
                <input type="file" name="myfile" />
              </div>
            </div>

            <div class="form-group mt-3">
              <label for="mo_ta_chi_tiet">Mô tả</label>
              <textarea name="mo_ta" class="form-control" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-block btn-primary">Thêm mới</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- FOOTER -->
  <div style="height: 100px;"></div>

  <!-- SCRIPTS -->
  <script src="../assets/js/jquery-3.3.1.js"></script>
  <script src="../assets/js/popper.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script>
    var inputs = document.querySelectorAll('.inputfile');
    Array.prototype.forEach.call(inputs, function(input) {
      var label = input.nextElementSibling,
        labelVal = label.innerHTML;

      input.addEventListener('change', function(e) {
        var fileName = '';
        if (this.files && this.files.length > 1)
          fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
        else
          fileName = e.target.value.split('\\').pop();

        if (fileName)
          label.querySelector('span').innerHTML = fileName;
        else
          label.innerHTML = labelVal;
      });
    });

    function them_moi() {
      var variation = document.getElementsByClassName("variation")[0];

      $(".variations").append(variation.innerHTML); // Append new elements
    }
  </script>
</body>

</html>