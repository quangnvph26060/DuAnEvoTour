<?php include_once "header.php" ?>
<link rel="stylesheet" href="./layout/css/tour_khuyen_mai.css">
<section class="bread-crumb">
    <div class="container">
        <ul>
            <li>
                <a href="index.html">Trang chủ</a>
            </li>
            <li class="cheo">/</li>
            <?php
            if (isset($_GET['mien'])) {
                $mien = $_GET['mien'];
                if ($mien == 1) {
                    echo '<li>Tour Miền Bắc</li> ';
                } elseif ($mien == 2) {
                    echo '<li>Tour Miền Trung</li> ';
                } elseif ($mien == 3) {
                    echo '<li>Tour Miền Nam</li> ';
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
            <?php if(isset($_GET['mien'])) : ?>
                <?php $mien = $_GET['mien'] ?>
                <?php if($mien == '1') : ?>
                    <?php foreach ($tour_3mien as $tour) : ?>
                        <div class="tour-last-item">
                            <div class="tour-last-img">
                                <a href="?ctr=tour_detail&id_tour=<?= $tour['id_tour'] ?>">
                                    <img src="./layout/images/products/<?= $tour['image'] ?>" alt="" />
                                </a>
                            </div>
                            <div class="tour-last-info">
                                <h3 class="info-tour-title">
                                    <a href="?ctr=tour_detail&id_tour=<?= $tour['id_tour'] ?>"><?= $tour['name_tour'] ?></a>
                                </h3>
                                <div class="info-bottom">
                                    <div class="vote-box">
                                        <div class="meta-vote">
                                            <img src="./layout/images/<?= $tour['phuong_tien'] ?>" alt="" />
                                        </div>
                                        <div class="sale-off"><?= $tour['price'] ?>đ</div>
                                    </div>
                                    <div class="date-go">
                                        <ul>
                                            <li>
                                                <img src="./layout/images/tag_icon_4.svg" alt="" />
                                                <div>
                                                    <span class="date">Lịch khởi hành:</span>
                                                    <span class="date-go-color"><?= $tour['lich_khoi_hanh'] ?></span>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="./layout/images/tag_icon_5.svg" alt="" />
                                                <div>
                                                    <span class="date">Thời gian:</span>
                                                    <span class="date-go-color"><?= $tour['thoi_gian'] ?></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="action-box">
                                        <h2 class="price-box"><?= $tour['price'] - $tour['sale_price'] ?>₫</h2>
                                        <a href="?ctr=tour_detail&id_tour=<?= $tour['id_tour'] ?>" class="booking-box">ĐẶT TOUR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php elseif($mien == '2') : ?> 
                    <?php foreach ($tour_3mien as $tour) : ?>
                        <div class="tour-last-item">
                            <div class="tour-last-img">
                                <a href="?ctr=tour_detail&id_tour=<?= $tour['id_tour'] ?>">
                                    <img src="./layout/images/products/<?= $tour['image'] ?>" alt="" />
                                </a>
                            </div>
                            <div class="tour-last-info">
                                <h3 class="info-tour-title">
                                    <a href="?ctr=tour_detail&id_tour=<?= $tour['id_tour'] ?>"><?= $tour['name_tour'] ?></a>
                                </h3>
                                <div class="info-bottom">
                                    <div class="vote-box">
                                        <div class="meta-vote">
                                            <img src="./layout/images/<?= $tour['phuong_tien'] ?>" alt="" />
                                        </div>
                                        <div class="sale-off"><?= $tour['price'] ?>đ</div>
                                    </div>
                                    <div class="date-go">
                                        <ul>
                                            <li>
                                                <img src="./layout/images/tag_icon_4.svg" alt="" />
                                                <div>
                                                    <span class="date">Lịch khởi hành:</span>
                                                    <span class="date-go-color"><?= $tour['lich_khoi_hanh'] ?></span>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="./layout/images/tag_icon_5.svg" alt="" />
                                                <div>
                                                    <span class="date">Thời gian:</span>
                                                    <span class="date-go-color"><?= $tour['thoi_gian'] ?></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="action-box">
                                        <h2 class="price-box"><?= $tour['price'] - $tour['sale_price'] ?>₫</h2>
                                        <a href="?ctr=tour_detail&id_tour=<?= $tour['id_tour'] ?>" class="booking-box">ĐẶT TOUR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php elseif($mien == '3') : ?>
                    <?php foreach ($tour_3mien as $tour) : ?>
                        <div class="tour-last-item">
                            <div class="tour-last-img">
                                <a href="?ctr=tour_detail&id_tour=<?= $tour['id_tour'] ?>">
                                    <img src="./layout/images/products/<?= $tour['image'] ?>" alt="" />
                                </a>
                            </div>
                            <div class="tour-last-info">
                                <h3 class="info-tour-title">
                                    <a href="?ctr=tour_detail&id_tour=<?= $tour['id_tour'] ?>"><?= $tour['name_tour'] ?></a>
                                </h3>
                                <div class="info-bottom">
                                    <div class="vote-box">
                                        <div class="meta-vote">
                                            <img src="./layout/images/<?= $tour['phuong_tien'] ?>" alt="" />
                                        </div>
                                        <div class="sale-off"><?= $tour['price'] ?>đ</div>
                                    </div>
                                    <div class="date-go">
                                        <ul>
                                            <li>
                                                <img src="./layout/images/tag_icon_4.svg" alt="" />
                                                <div>
                                                    <span class="date">Lịch khởi hành:</span>
                                                    <span class="date-go-color"><?= $tour['lich_khoi_hanh'] ?></span>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="./layout/images/tag_icon_5.svg" alt="" />
                                                <div>
                                                    <span class="date">Thời gian:</span>
                                                    <span class="date-go-color"><?= $tour['thoi_gian'] ?></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="action-box">
                                        <h2 class="price-box"><?= $tour['price'] - $tour['sale_price'] ?>₫</h2>
                                        <a href="?ctr=tour_detail&id_tour=<?= $tour['id_tour'] ?>" class="booking-box">ĐẶT TOUR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php endif ?>    
            <?php endif ?>    
        </div>
    </div>
</section>
<?php include_once "footer.php" ?>