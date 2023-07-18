<?php include_once "header.php" ?>
<link rel="stylesheet" href="./layout/css/tour_khuyen_mai.css" />
<link rel="stylesheet" href="./layout/css/account_detail.css" />
<section class="bread-crumb">
  <div class="container">
    <ul>
      <li>
        <a href="?ctr=home">Trang chủ</a>
      </li>
      <li class="cheo">/</li>
      <li>Quản Lý Đơn Hàng</li>
    </ul>
  </div>
</section>
<section class="account-details">
  <div class="container">
    <div class="account">
      <aside class="account-menu">
        <h1 class="title-account">Đơn hàng của bạn</h1>

        <p class="name-account">Xin chào, <?= isset($_SESSION['user']['hoten']) ? $_SESSION['user']['hoten'] : "" ?> !</p>
        <ul class="menu-account">
          <li class="menu-account_item">
            <a href="?ctr=account_detail" class="menu-account_link">Thông tin tài khoản</a>
          </li>
          <li class="menu-account_item">
            <a href="?ctr=my_cart" class="menu-account_link click">Đơn hàng của bạn</a>
          </li>
          <li class="menu-account_item">
            <a href="?ctr=change_pass" class="menu-account_link">Đổi mật khẩu</a>
          </li>
          <li class="menu-account_item">
            <a href="#" class="menu-account_link">Bình luận</a>
          </li>
        </ul>
      </aside>
      <article class="acount-detail">

        <form action="?ctr=my_cart" method="post" class="account-info" enctype="multipart/form-data">
          <?php if (isset($_COOKIE['message'])) : ?>
            <div class="alert alert-success" role="alert">
              <?= $_COOKIE['message'] ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="tio-clear tio-lg" style="color: white;"></i>
              </button>
            </div>
          <?php endif ?>
          <table class="my_cart">
            <thead>
              <tr>
                <th>Đơn hàng</th>
                <th>Ngày Đi</th>
                <th>Địa chỉ</th>
                <th>Giá trị đơn hàng</th>
                <th>TT thanh toán</th>
                <th>TT vận chuyển</th>
                <th>Thao Tác</th>

              </tr>
            </thead>
            <tbody>

              <?php if (isset($_SESSION['user'])) : ?>


                <?php foreach ($show_dh as $item) : ?>
                  <?php if ($_SESSION['user']['id_users'] == $item['id_users']) : ?>
                    <tr>
                      <td style="color: #1ba0e2"># <?= $item['ma_dh'] ?></td>
                      <td> <?= $item['ngay_di'] ?></td>
                      <td><?= $item['dia_chi'] ?></td>
                      <td> <?= number_format($item['tong_tien_tour']) ?>₫</td>
                      <td> <?= $item['pttt'] ?></td>
                      <td> <?= $item['status'] ?></td>
                      <?php if ($item['status'] == 'Chờ Xác Nhận') : ?>
                        <td><a onclick="return confirm('Bạn Có Muốn Xóa Không') " href="?ctr=delete_dh&id_booking_detail=<?= $item['id_booking_detail'] ?>">Hủy Đơn Hàng</a></td>
                      <?php endif ?>
                    </tr>
                  <?php endif ?>
                <?php endforeach ?>



              <?php endif ?>
            </tbody>
          </table>
        </form>
      </article>
    </div>
  </div>
</section>
<?php include_once "footer.php" ?>