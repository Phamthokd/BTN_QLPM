<!DOCTYPE html>
<html lang="en">

<?php include('../shared/header.php') ?>

<body>
  <!-- NAVIGATION -->
  <?php include('../shared/menu.php') ?>
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
  <?php include('../shared/footer.php') ?>
  <!-- SCRIPTS -->
  <?php include('../shared/script.php') ?>
</body>

</html>