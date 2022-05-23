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
          <h1>Quản lý người dùng</h1>
        </div>
      </div>
    </div>
    <section id="actions" class="py-4 mb-4">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <a href="../controllers/add-user.php" class="btn btn-primary">Thêm mới</a>
            <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }

            if(isset($_SESSION['delete']))
            {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }

            if(isset($_SESSION['update']))
            {
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            }
            ?>
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
                <h4 class="col-md-6">Danh sách người dùng</h4>
                <div class="dropdown ml-auto col-md-3">

                </div>
              </div>
            </div>
          </div>
          <table>
            <thead class="bg-dark">
              <tr>
                <th>STT</th>
                <th>Họ tên</th>
                <th>Tên đăng nhập</th>
                <th>Địa chỉ</th>
                <th>Email</th>
                <th>Điện thoại</th>
                <th>Ngày đăng kí</th>
                <th style="width: 120px;"></th>
              </tr>
            </thead>
            <tbody class>
              <?php include('../functions/console_log.php') ?>
              <?php include('../data/user_list.php') ?>
              <?php foreach ($user_list as $user) {
                echo '<tr>
                  <td >' . $user['id'] . '</td>
                  <td >' . $user['fisrt_name'].' '.  $user['last_name'] . '</td>
                  <td >' . $user['username']. '</td>
                  <td >' . $user['address']. '</td>
                  <td >' . $user['email']. '</td>
                  <td >' . $user['phone']. '</td>
                  <td >' . $user['registration_date']. '</td>
                  <td>
                  <a href="../controllers/update-user.php?id='.$user['id'].'" class="btn btn-primary btn-sm">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="../controllers/delete-user.php?id='.$user['id'].'" class="btn btn-danger btn-sm">
                    <i class="fas fa-trash"></i>
                  </a>
                  </td>
                </tr>';
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