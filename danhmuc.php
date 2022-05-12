<!-- danh muc -->
<div class="container danhmuc">
    <h2 class="py-5">Danh mục</h2>
    <!--Grid row-->
    <div class="row">
        <?php include('./configs/database.php');
        $sql = "SELECT * FROM `category` WHERE active = '1'";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        if ($count > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $id = $row['id'];
                $title = $row['title'];
                $image_name = $row['image_name'];
                ?>
                
        <!--Grid column-->
        <div class="mb-4 col ">
            <img src="./assets/images/<?php echo $image_name; ?>" class="img-fluid rounded-4 shadow-2-strong" alt="" />
            <h3><?php echo $title ;?></h3>
        </div>
        <!--Grid column-->
        <?php
            }
        }
        ?>
    </div>
    <!--Grid row-->
</div>
<!-- danh muc -->