<!DOCTYPE html>
<html lang="en">
<?php include('../constants.php') ?>
<?php include('../shared/header.php') ?>
<?php include('../data/category_list.php') ?>
<?php include('../data/food_list.php') ?>

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
          <?php
          if (isset($_GET['id'])) {
            $current_id = $_GET['id'];
            foreach ($food_list as $food) {


              if ($food['id'] == $current_id) {
                $current_name = $food['title'];
                $current_price = $food['price'];
                $current_image = $food['image_name'];
                $current_active = $food['active'];
                $current_description = $food['description'];
                $category_id = $food['category'];
              }
            }
          } else {
            header('http://localhost:88/BTN_QLPM/admin/hang/index.php');
          }
          ?>
          <form method='post' action="../controllers/update_food.php" enctype='multipart/form-data'>
            <input type="hidden" name="id" value="<?php echo $current_id ?>">
            <div class="form-group">
              <label for="ten_tieu_de">Tên hàng</label>
              <input type="text" class="form-control" value="<?php echo $current_name ?>" name="food_name" />
            </div>
            <div class="form-group">
              <label for="">Danh mục hàng</label>
              <select id="danh_muc_sp" class="form-control" name="category_id" required>
                <option value="" disabled>-- Chọn một danh mục --</option>
                <?php foreach ($category_list as $category) {
                  $select = $category["id"] == $category_id ? "selected" : "";
                  echo '<option  value=' . $category['id'] . ' selected=' . $select . ' >' . $category['title'] . '</option>';
                }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="">Trạng thái hàng</label>
              <select id="active" name="active" class="form-control" required>
                <option value="" disabled selected>-- Chọn trạng thái --</option>
                <?php 
                  $select = $current_active == 1 ? "selected" : "";
                  echo '<option selected=' . $select . ' value="1">Hoạt động</option>';
                ?>
                 <?php 
                  $select = $current_active == 0 ? "selected" : "";
                  echo '<option selected=' . $select . ' value="0">Không hoạt động</option>';
                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="image">Ảnh sản phẩm</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="image" name="fileToUpload" />
                <label for="image" class="custom-file-label">Chọn ảnh sản phẩm mới</label>
              </div>
              <small class="form-text text-muted">Max Size 3mb</small>
              <?php
              if ($current_image == "") {
                echo "<div class='error'>Ảnh không có sẵn.</div>";
              } else {
              ?>
                <img id="imagePreview" style="margin-top: 10px" src="<?php echo SITEURL; ?>/assets/images/<?php echo $current_image; ?>" width="150px">
                <input type="hidden" name="current_image" value="<?php echo $current_image ?>">
              <?php
              }
              ?>
            </div>
            <div class="form-group">
              <label for="mo_ta_chi_tiet">Giá</label>
              <input type="number" class="form-control" name="price" value="<?php echo $current_price; ?>">
            </div>
            <div class="form-group">
              <label for="mo_ta_chi_tiet">Mô tả</label>
              <textarea name="mo_ta" class="form-control"><?php echo $current_description; ?></textarea>
            </div>
            <button type="submit" class="btn btn-block btn-primary" name="submit">Cập nhật</button>
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
  <script>
    image.onchange = evt => {
      const [file] = image.files
      if (file) {
        imagePreview.src = URL.createObjectURL(file);
        imagePreview.style.display = 'block';
        image.style.display = 'none';
        uploadBtn.style.display = 'none';
      }
    }
  </script>
</body>

</html>