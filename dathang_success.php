<?php
if (isset($_GET['id_user'])) {
    $id_user = $_GET['id_user'];
}
?>
<?php include('./partials_front/header.php') ?>
<!-- Jumbotron -->
<div
  class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white"
  style="background-image: url('./assets/images/bg.jpg');"
>

<?php
include('./configs/database.php');
$sql = "SELECT * FROM `food` WHERE active = '1'";
$res = mysqli_query($conn, $sql);
$count = mysqli_num_rows($res);

  if (isset($_POST['btn_oder'])) {
    if(isset($_GET['id'])&isset($_GET['price'])&isset($_GET['id_user'])){
    $id = $_GET['id'];
    $id_user = $_GET['id_user'];
    $price=(double)$_GET['price'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $qty = $_POST['qty'];
    $total = $qty * $price;
    $sql1 = "INSERT INTO `oder`(`user_id`, `food_id`, `qty`, `total`,`custormer_name`, `customer_contact`, `customer_address`) VALUES ($id_user,$id,'$qty','$total','$name','$phone','$address') ";
    $res1 = mysqli_query($conn, $sql1);
    if($res1 == true){

      echo '<h1 class="mb-3 h2">Đặt hàng thành công</h1>

      <p>
        Quý khách đã đặt hàng thành công. Đơn hàng sẽ được chuyển đến trong thời gian ngắn nhất <br>
        Chúc quý khách ngon miệng <br>
        Xin cảm ơn!!!
      </p>
    </div>
    <!-- Jumbotron -->';
    }
    }
  }


  ?>
  
<?php include('./partials_front/footer.php')?>