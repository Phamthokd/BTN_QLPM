<?php include('../controllers/login_check.php') ?>

<!-- NAVIGATION -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-3">
    <div class="container">
        <a href="#" class="navbar-brand">ABC Food</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item px-2">
                    <a href="../hang/index.php" class="nav-link active">Hàng</a>
                </li>
                <li class="nav-item px-2">
                    <a href="#" class="nav-link">Danh mục hàng</a>
                </li>
                <li class="nav-item px-2">
                    <a href="#" class="nav-link">Bán hàng</a>
                </li>
                <li class="nav-item px-2">
                    <a href="#" class="nav-link">Giao hàng</a>
                </li>
                <li class="nav-item px-2">
                    <a href="#" class="nav-link">Tài khoản</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown mr-3">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="fas fa-user"></i> <?php echo $_SESSION['username'] ?>
                    </a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-cog"></i> Cài đặt
                        </a>
                        <a href="../controllers/logout_account.php" class="dropdown-item">
                            <i class="fas fa-sign-out-alt"></i> Đăng xuất
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>