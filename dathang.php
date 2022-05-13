<?php include('./partials_front/header.php'); ?>

<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
include('./configs/database.php');
$sql = "SELECT * FROM `food` WHERE id = '$id'";
$res = mysqli_query($conn, $sql);
$count = mysqli_num_rows($res);
if ($count > 0) {
  while ($row = mysqli_fetch_assoc($res)) {
    $price = $row['price'];
    $title = $row['title'];
  }
?>

  <div class="container col-6 mt-5 h-100">
    <h2>Tiến hành đặt hàng</h2>
    <form action="" method="POST">
      <h4>Món ăn: <?php echo $title; ?></h4>
      <input type="hidden" name="food" value="<?php echo $title; ?>">
      <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="row mb-4">
        <div class="col">
          <div class="form-outline">
            <input type="text" id="name" name="name" class="form-control" />
            <label class="form-label" for="name">Tên</label>
          </div>
        </div>
      </div>

      <!-- sdt input -->
      <div class="form-outline mb-4">
        <input type="tel" id="phone" name="phone" class="form-control" />
        <label class="form-label" for="phone">Số điện thoại</label>
      </div>

      <!-- Text input -->
      <div class="form-outline mb-4">
        <input type="text" id="address" name="address" class="form-control" />
        <label class="form-label" for="address">Địa chỉ</label>
      </div>


      <div class="input-group mb-3 form-outline">
        <span class="input-group-text">$</span>
        <span class="input-group-text"><?php echo $price;
                                      } ?></span>
        <input type="number" class="form-control" name="qty" aria-label="Dollar amount (with dot and two decimal places)" placeholder="Số lượng" />
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4" name="btn_oder">
        Đặt hàng
      </button>
    </form>
  </div>
  <?php
  if (isset($_POST['btn_oder'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $qty = $_POST['qty'];
    $total = $qty * $price;
    $sql1 = "INSERT INTO `oder`(`user_id`, `food_id`, `qty`, `total`,`custormer_name`, `customer_contact`, `customer_address`) VALUES (1,$id,'$qty','$total','$name','$phone','$address') ";
    $res1 = mysqli_query($conn, $sql1);
  }


  ?>
  <?php include('./partials_front/footer.php'); ?>