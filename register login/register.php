<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Đăng ký</p>
                                    <form class="mx-1 mx-md-4" action="process_register.php" method="POST">
                                        <?php
                                        if (isset($_GET['response'])) {
                                            if ($_GET['response'] == "existed") {
                                                echo "<p>email đã tồn tại</p>";
                                            }
                                        }
                                        if (isset($_GET['response'])) {
                                            if ($_GET['response'] == "success") {
                                                echo "<p>Đăng ký thành công</p>";
                                            }
                                        }
                                        if (isset($_GET['response'])) {
                                            if ($_GET['response'] == "fail") {
                                                echo "<p>Pass nhập lại không khớp</p>";
                                            }
                                        }
                                        ?>


                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="first_name" class="form-control" name="first_name" />
                                                <label class="form-label" for="first_name">First name</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="last_name" class="form-control" name="last_name" />
                                                <label class="form-label" for="last_name">Last name</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="username" class="form-control" name="username" />
                                                <label class="form-label" for="username">Username</label>
                                            </div>
                                        </div>


                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" id="email" class="form-control" name="email" />
                                                <label class="form-label" for="email">Email</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="tel" id="phone" class="form-control" name="phone" />
                                                <label class="form-label" for="phone">Phone number</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="address" class="form-control" name="address" />
                                                <label class="form-label" for="address">Address</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="pass" class="form-control" name="pass" />
                                                <label class="form-label" for="pass">Password</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="repass" class="form-control" name="repass" />
                                                <label class="form-label" for="repass">Repeat your password</label>
                                            </div>
                                        </div>
                                        <?php if (isset($_GET['response'])) {
                                            if ($_GET['response'] == "error") {
                                                echo "<p>Vui lòng xác nhận</p>";
                                            }
                                        } ?>
                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="checkbox" name="checkbox" />
                                            <label class="form-check-label" for="checkbox">
                                                Đồng ý các <a href="#!">điều khoản và chính sách</a>
                                            </label>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg" name="btn_account">Đăng ký</button>
                                        </div>
                                        <p class="text-center text-muted mt-5 mb-0">Bạn đã có tài khoản? <a href="./login.php" class="fw-bold text-body"><u>Đăng nhập tại đây.</u></a></p>
                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>
</body>

</html>