<?php include('./partials_front/header.php') ;?>
<div class="container col-6 mt-5 h-100">
      <h2>Tiến hành đặt hàng</h2>
      <form action="process_login.php" method="post">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
              <input type="text" id="first_name" name="first_name" class="form-control" />
              <label class="form-label" for="first_name">Họ</label>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
              <input type="text" id="last_name" name="last_name" class="form-control" />
              <label class="form-label" for="last_name">Tên</label>
            </div>
          </div>
        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">
          <input type="text" id="address" name="address" class="form-control" />
          <label class="form-label" for="address">Địa chỉ</label>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="email" id="eamil" name="email" class="form-control" />
          <label class="form-label" for="email">email</label>
        </div>

        <!-- sdt input -->
        <div class="form-outline mb-4">
          <input type="tel" id="number_phone" name="number_phone" class="form-control" />
          <label class="form-label" for="number_phone">Số điện thoại</label>
        </div>

        <div class="input-group mb-3 form-outline">
            <span class="input-group-text">$</span>
            <span class="input-group-text">0.00</span>
            <input type="number" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" placeholder="Số lượng"/>
        </div>

        <!-- Message input -->
        <div class="form-outline mb-4">
          <textarea class="form-control" id="note" name="note" rows="4"></textarea>
          <label class="form-label" for="note">chú ý thêm</label>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4" name="btn_oder">
          Đặt hàng
        </button>
      </form>
    </div>
<?php include('./partials_front/footer.php'); ?>