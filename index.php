<?php include('partials_front/header.php'); ?>
<nav class="navbar navbar-light py-5 bg-image" style="
        background-image: url('./assets/images/chup-anh-thuc-an-1.jpg');
        height: 20vh;
      "
    >

    <div class="container-fluid justify-content-center">
        <form class="d-flex input-group w-auto" action="search_food.php" method="POST">
            <input type="search" class="form-control rounded" name="search_food" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button type="submit"  class="input-group-text border-0" id="search-addon">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>
</nav>
<?php include('./danhmuc.php'); ?>
<?php include('./monan.php'); ?>
<?php include('partials_front/footer.php'); ?>