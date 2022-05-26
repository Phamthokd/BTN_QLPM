<!-- danh muc -->
<div class="container danhmuc">
    <h2 class="py-5">Danh mục</h2>
    <!--Grid row-->
    <div class="row">  
        <?php include('./configs/database.php');
       if(isset($_GET['detail'])){
        $sql = "SELECT * FROM `category` WHERE active = '1' ";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        if ($count > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $id = $row['id'];
                $title = $row['title'];
                $image_name = $row['image_name'];
                ?>
                
        <!--Grid column-->
        <div class="mb-4 col-lg-4 col-md-4 mb-4">
           <a href="http://localhost:88/BTN_QLPM/monan-food.php?id_user=<?php echo $id_user ?>&id_category=<?php echo $id ?>"> <img src="./assets/images/<?php echo $image_name; ?>" class="img-fluid rounded-4 shadow-2-strong w-100 h-75" alt="" /></a>
            <h3><?php echo $title ;?></h3>
        </div>
        <!--Grid column-->
        <?php
            }
        }
    }else{
        $sql = "SELECT * FROM `category` WHERE active = '1' limit 0,3";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        if ($count > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $id = $row['id'];
                $title = $row['title'];
                $image_name = $row['image_name'];
                ?>
                
        <!--Grid column-->
        <div class="mb-4 col-lg-4 col-md-4 mb-4">
           <a href="http://localhost:88/BTN_QLPM/monan-food.php?id_user=<?php echo $id_user ?>&id_category=<?php echo $id ?>"> <img src="./assets/images/<?php echo $image_name; ?>" class="img-fluid rounded-4 shadow-2-strong w-100 h-75" alt="" /></a>
            <h3><?php echo $title ;?></h3>
        </div>
        <!--Grid column-->
        <?php
            }
        }
    }
        ?>
       
    </div>
    <!--Grid row-->
</div>
<!-- danh muc -->