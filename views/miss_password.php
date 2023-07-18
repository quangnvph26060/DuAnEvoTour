<link rel="stylesheet" href="./layout/css/tour_khuyen_mai.css" />
<link rel="stylesheet" href="./layout/css/dang_ky.css" />
<?php include_once "views/header.php"?>
    <section class="bread-crumb">
      <div class="container">
        <ul>
          <li>
            <a href="index.html">Trang chủ</a>
          </li>
          <li class="cheo">/</li>
          <li>Quên Mật Khẩu</li>
        </ul>
      </div>
    </section>
    <section class="login">
      <div class="container">
        <div class="page-login">
          <div class="account-banner">
            <!-- <img src="./images/account-banner.png" alt="" /> -->
            <div class="account_policy_title">Quyền lợi thành viên</div>
            <div class="account_policy_content">
              <p>Tour chọn lọc chất lượng nhất</p>
              <p>Đội ngũ tư vấn chi tiết và tận tình</p>
              <p>Nhận nhiều chương trình ưu đãi hấp dẫn từ chúng tôi</p>
            </div>
          </div>
          <div class="account-login">
            <ul class="auth-block__menu-list">
              <li class="active">
                <a href="?ctr=login" title="Đăng nhập">Đăng nhập</a>
              </li>
              <li>
                <a href="?ctr=signup" title="Đăng ký">Đăng ký</a>
              </li>
            </ul>
            <div class="miss-text">
              Bạn quên mật khẩu? Nhập địa chỉ email để lấy lại mật khẩu qua
              email.
            </div>
            <form action="" method="post" class="form-login">
              <div class="form-signup">
                <div class="form-group">
                  <label>Email<span class="required">*</span></label>
                  <input
                    placeholder="Nhập Địa chỉ Email"
                    type="email"
                    class="form-control form-control-lg"
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                    name="email"
                    required=""
                  />
                </div>
                <button type="submit" class="btn-blues">
                  Lấy lại mật khẩu
                </button>
              </div>
            </form>
            <p class="return">
              Quay lại
              <a href="dang_nhap.html" class="">tại đây.</a>
            </p>
          </div>
        </div>
      </div>
    </section>
<?php include_once "views//footer.php";