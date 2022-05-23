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
    if(isset($_GET['response'])){
      if($_GET['response']=='success'){
        echo '<h4>Xóa thành công</h4>';
      }
      if($_GET['response']=='fail'){
        echo '<h4>Xóa thất bại</h4>';
      }
    }
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
              <?php include('../data/category_list.php') ?>
              <?php foreach ($category_list as $category) {
                console_log($category);
                echo '<tr>
            <td >'. $category['id'] .'</td>
            <td >'. $category['title'] .'</td>
            <td >'. $category['active'] .'</td>
            <td class="d-flex justify-content-around">
            <a href="sua.php?id='. $category['id'] .'" class="btn btn-primary btn-sm">
              <i class="fas fa-edit"></i>
            </a>
            <a href="../controllers/delete_category.php?id='. $category['id'] .'"" class="btn btn-danger btn-sm ms-auto">
            <i class="fas fa-trash"></i>
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
  <?php include('../shared/footer.php') ?>
  <!-- SCRIPT -->
  <?php include('../shared/script.php') ?>
</body>

</html>