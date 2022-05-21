<!DOCTYPE html>
<html lang="en">

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
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            foreach ($food_list as $food) {
              if($food['id']==$id){
                $current_food_name = $food['title'];
              } 
            }
            
        }
        else
        {
            //Redirect to Manage Food
            header('http://localhost:88/BTN_QLPM/admin/hang/index.php');
        }
    ?>
          <form method='post' action="update_food.php">
            <input type="hidden" name="id">
            <div class="form-group">
              <label for="ten_tieu_de">Tên hàng</label>
              <input type="text" class="form-control" placeholder="<?php echo $current_food_name ?>" />
            </div>
            <div class="form-group">
              <label for="">Danh mục hàng</label>
              <select id="danh_muc_sp" class="form-control" name="category_id">
                <option value="" disabled selected>-- Chọn một danh mục --</option>
                <?php foreach ($category_list as $category) {
                  echo '<option value='. $category['id'] .'>'. $category['title'] .'</option>';
                 } 
                 ?>
              </select>
            </div>
            <div class="form-group">
              <label for="image">Ảnh sản phẩm</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="image" />
                <label for="image" class="custom-file-label">Chọn ảnh sản phẩm</label>
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
            <button type="submit" class="btn btn-block btn-primary" >Cập nhật</button>
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