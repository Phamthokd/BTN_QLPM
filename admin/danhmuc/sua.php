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
          <form method='post' action="../controllers//edit_category.php" enctype='multipart/form-data'>
            <?php if(isset($_GET['id'])) 
              $id = $_GET['id'];
            ?>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
              <label for="ten_tieu_de">Tên danh mục</label>
              <input type="text" name="category_name" class="form-control" />
            </div>
    

            <div class="variations px-2 my-3" style="border: solid #ced4da 1px;">
              <div class="mb-3 pt-2 px-2" style="font-size: 20px;">Trạng thái danh mục</div>
              <div class="variation">
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <select id="active" name="active" class="form-control">
                      <option value="" disabled selected>-- Chọn trạng thái --</option>
                      <option value='1'>Hoạt động</option>
                      <option value='0'>Không hoạt động</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="images">
              <div class="mb-2 mt-2">Ảnh danh mục</div>
              <div class="upload-btn-wrapper">
                <button class="button" id="uploadBtn"><span>+</span></button>
                <input type="file" name="fileToUpload" id="imgInp"/>
                <img id="blah" src="#" alt="your image" style="width: 100px; height: 100px; display: none;"/>
              </div>
            </div>

            <button type="submit" class="btn btn-block btn-primary" name="btn_edit_category">Cập nhật</button>
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