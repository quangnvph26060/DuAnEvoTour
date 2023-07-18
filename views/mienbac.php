<?php include_once "header.php" ?>
<link rel="stylesheet" href="./layout/css/tour_khuyen_mai.css">
<section class="bread-crumb">
  <div class="container">

    <ul>
      <li>
        <a href="?ctr=home">Trang chủ</a>
      </li>
      <li class="cheo">/ </li>
      <li>
        <a href="?ctr=tourDL_mb&tk=1"> Miền Bắc /</a>
      </li>
      <?php foreach ($ten_tour as $item) : ?>
        <?php if ($item['tour_cu_the'] == $mb) : ?>
          <a href="#"> <?= $item['tour_cu_the'] ?> </a>
        <?php endif ?>
      <?php endforeach ?>
      <?php
      foreach ($ten_tour as $q) {
          extract($q);

          if (isset($_GET['mb'])) {
              $mb = $_GET['mb'];
          } else {
              $mb = '';
          }
          if ($tour_cu_the == $mb) {
              echo $tour_cu_the;
          }
      }

      ?>
    </ul>
  </div>
</section>
<section class="cat-banner">
  <a href="#">
    <img src="./layout/images/cat-banner-2.png" alt="" />
  </a>
</section>
<section class="search-all">
  <div class="container">
    <form action="" method="post">
      <div class="search">
        <div class="group-a">
          <img src="./layout/images/place-localizer.svg" alt="" />
          <input type="text" placeholder="Bạn muốn đi đâu?" />
        </div>
        <div class="group-b">
          <img src="./layout/images/date.svg" alt="" />
          <div class="banner-date-content">
            <p>Ngày khởi hành</p>
            <input type="text" name="" id="banner-date" placeholder="Chọn Ngày khởi hành" />
          </div>
        </div>
        <div class="group-c">
          <img src="./layout/images/paper-plane.svg" alt="" />
          <div class="banner-plane-content">
            <p>Khởi hành từ</p>
            <select name="" id="" class="">
              <option value="">Tất cả</option>
              <option value="">TP.Hồ Chí Minh</option>
              <option value="">Hà Nội</option>
              <option value="">TP.Huế</option>
            </select>
          </div>
        </div>
        <button type="submit" class="banner-btn">TÌM</button>
      </div>
    </form>
  </div>
</section>
<section class="sale">
  <div class="container">
    <div class="sort-cate">
      <div class="sort-left">
        <h3>Xếp theo:</h3>
        <form action="" method="post">
          <li><input type="radio" name="sort" id="" />Tên A - Z</li>
          <li><input type="radio" name="sort" id="" />Tên Z - A</li>
          <li><input type="radio" name="sort" id="" />Giá tăng dần</li>
          <li><input type="radio" name="sort" id="" />Giá giảm dần</li>
        </form>
      </div>
    </div>

  </div>
</section>
<section class="tour-inbound">
  <div class="container">
    <div class="tour-last">
      <?php
      $fl = 0;
      foreach ($cuthe_mb as $cu) {
        extract($cu);
        $hinh = 'upload/' . $image;
        echo '
                                        <div class="tour-last-item ">
                                        <div class="tour-last-img">
                                        <a href="tour_detail.html">
                                            <img src="' . $hinh . '" alt="" />
                                        </a>
                                        </div>
                
                                        <div class="tour-last-info">
                                        <h3 class="info-tour-title">
                
                                            <a href="tour_detail.html">' . $name_tour . '</a>
                                        </h3>
                                        <div class="vote-box">
                                            <div class="meta-vote">
                                            <img src="./images/tag_icon_1.svg" alt="" />
                                            <img src="./images/tag_icon_3.svg" alt="" />
                                            </div>
                                            <div class="sale-off">' . $sale_price . '</div>
                                        </div>
                                        <div class="date-go">
                                            <ul>
                                            <li>
                                                <img src="./images/tag_icon_4.svg" alt="" />
                                                <div>
                                                <span class="date">Lịch khởi hành:</span>
                                                <span class="date-go-color">' . $lich_khoi_hanh . '</span>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="./images/tag_icon_5.svg" alt="" />
                                                <div>
                                                <span class="date">Thời gian:</span>
                                                <span class="date-go-color">' . $thoi_gian . '</span>
                                                </div>
                                            </li>
                                            </ul>
                                        </div>
<div class="action-box">
                                            <h2 class="price-box">' . $price . 'đ</h2>
                                            <a href="#" class="booking-box">ĐẶT TOUR</a>
                                        </div>
                                        </div>
                                    </div>    
                                                    
                                    ';
        $fl++;
      }
      if ($fl == 0) {
        echo '
                        <div class="alert alert-warning alert-dismissible show" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
						Không có Tour nào trong danh mục này.
					    </div>
                        ';
      }


      ?>

    </div>
  </div>
</section>
<?php include_once "footer.php" ?>