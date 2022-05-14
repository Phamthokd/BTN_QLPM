<?php include('./configs/database.php');
$sql = "SELECT * FROM `food` WHERE active = '1'";
$res = mysqli_query($conn, $sql);
$count = mysqli_num_rows($res); ?>

<div class="container monan">
<?php
  if (isset($_POST['btn_oder'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $qty = $_POST['qty'];
    $total = $qty * $price;
    $sql1 = "INSERT INTO `oder`(`user_id`, `food_id`, `qty`, `total`,`custormer_name`, `customer_contact`, `customer_address`) VALUES (23,$id,'$qty','$total','$name','$phone','$address') ";
    $res1 = mysqli_query($conn, $sql1);
    if($res1 == true){
      $values_oder = 'success';
      echo $values_oder;
    }
  }


  ?>
    <h2 class="py-5">Món ăn</h2>
    <div class="row">
        <!--Grid row-->
        <?php
        if ($count > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $id = $row['id'];
                $title = $row['title'];
                $description = $row['description'];
                $price = $row['price'];
                $image_name = $row['image_name']; ?>

                <!--Grid column-->
                <div class="col-lg-6 col-md-6 mb-6">
                    <!-- Card -->
                    <div class="bg-image card shadow-1-strong h-100" style="
              background-image: url('./assets/images/<?php echo $image_name ?>');
            ">
                        <form class="card-body text-white">
                            <h5 class="card-title"><?php echo $title ?></h5>
                            <h6><?php echo $price ?></h6>
                            <p> <?php echo $description ?></p>
                            <a href="./dathang.php?id=<?php echo $id ?>" class="btn btn-outline-light">Mua</a>
                        </form>
                    </div>
                    <!-- Card -->
                </div>
                <!--Grid column-->

        <?php
            }
        }
        ?>
    </div>