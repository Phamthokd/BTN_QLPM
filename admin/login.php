<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./assets/css/" />
  <link rel="stylesheet" href="./assets/css/bootstrap.css" />
  <link rel="stylesheet" href="./assets/css/style.css" />
  <title>ABC Food - Login</title>
</head>

<body>
  <?php include('./controllers/logout_check.php') ?>
  <!-- HEADER -->
  <header id="main-header" class="text-white bg-dark fixed-top">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            <i class="fas fa-user"></i> ABC Food Admin</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- LOGIN -->
  <div class="container">
    <div class="row my-auto " style="height: 200px;"></div>
    <div class="col-md-6 m-auto">
      <div class="card">
        <div class="card-header">
          <h4>Account Login</h4>
        </div>
        <div class="card-body">
          <form action="./controllers/login_account.php" method="post" >
            <div class="form-group">
              <label for="email">Tên đăng nhập</label>
              <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
              <label for="password">Mật khẩu</label>
              <input type="password" class="form-control" name="password">
            </div>
            <?php include('./controllers/login_error.php') ?>
            <input type="submit" value="Login" class="btn btn-primary btn-block">
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- FOOTER -->
  <div style="height: 100px;"></div>
  <footer id="main-footer" class="bg-dark text-white mt-5" style="height: 50px; line-height:50px; text-align: center;">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="text-center">
            Copyright © 2022 ABC Food - All rights reserved
          </p>
        </div>
      </div>
    </div>
  </footer>

  <script src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
    integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
  </script>



</body>

</html>