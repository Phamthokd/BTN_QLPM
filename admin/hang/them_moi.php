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

          <form method='post' action="../controllers//upload_food.php" enctype='multipart/form-data'>
            <input type="hidden" name="id">
            <div class="form-group">
              <label for="food_name">Tên hàng</label>
              <input id="food_name" type="text" name="food_name" class="form-control" />
            </div>
            <div class="form-group">
              <label for="danh_muc_sp">Danh mục hàng</label>
              <?php include('../functions/console_log.php') ?>
              <?php include('../data/category_list.php') ?>
              <select id="danh_muc_sp" class="form-control" name="category_id" required>
                <option value="" disabled selected>-- Chọn một danh mục --</option>
                <?php foreach ($category_list as $category) {
                // console_log($category);
                  echo '<option value='. $category['id'] .'>'. $category['title'] .'</option>';
                 } 
                 ?>
              </select>
            </div>

            <div class="variations px-2 my-3" style="border: solid #ced4da 1px;">
              <div class="mb-3 pt-2 px-2" style="font-size: 20px;">Phân loại hàng</div>
              <div class="variation">
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <select id="active" name="active" class="form-control" required>
                      <option value="" disabled selected>-- Chọn trạng thái --</option>
                      <option value='1'>Hoạt động</option>
                      <option value='0'>Không hoạt động</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group mb-3">
              <label for="price">Giá</label>
              <input id="price" type="number" name="price" class="form-control">
            </div>

            <div class="images">
              <div class="mb-2 mt-2">Ảnh sản phẩm</div>
              <div class="upload-btn-wrapper">
                <button class="button" id="uploadBtn"><span>+</span></button>
                <input type="file" name="fileToUpload" id="imgInp"/>
                <img id="blah" src="#" alt="your image" style="width: 100px; height: 100px; display: none;"/>
              </div>
            </div>

            <div class="form-group mt-3">
              <label for="mo_ta_chi_tiet">Mô tả</label>
              <textarea id="mo_ta" name="mo_ta" class="form-control" rows="5"></textarea>
            </div>
            <button type="submit" value="Upload Image" name="submit" class="btn btn-block btn-primary">Thêm mới</button>
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
    
    imgInp.onchange = evt => {
      const [file] = imgInp.files
      if (file) {
        blah.src = URL.createObjectURL(file);
        blah.style.display = 'block';
        imgInp.style.display = 'none';
        uploadBtn.style.display = 'none';
      }
    }
  </script>
</body>

</html>