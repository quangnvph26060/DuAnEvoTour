<?php include_once "header.php" ?>
<link rel="stylesheet" href="./layout/css/tour_khuyen_mai.css">
<section class="bread-crumb">
    <div class="container">
        <ul>
            <li>
                <a href="index.html">Trang chủ</a>
            </li>
            <li class="cheo">/</li>
            <li>Kết Quả Tìm Kiếm</li>
        </ul>
    </div>
    <style>
        .title-search h1 {
            font-size: 22px;
            line-height: 28px;
            margin: 25px 0 20px;
            font-weight: 400;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-align: center;
        }
    </style>

</section>
<center>
    <?php
    if (isset($_POST['tktour'])) {
        $tk = $_POST['tktour'];
        if ($tk == "") {
            echo '
                <h1 >NHẬP TỪ KHÓA ĐỂ TÌM KIẾM</h1>  
                <form action="?ctr=search_tours" method="POST"> 
                    <input type="text"placeholder="Bạn Cần Tìm Gì ?"  name = "tktour">
                    <button name="btn">Tìm Kiếm</button> 
                </form>
                ';
            include_once "footer.php";
            die;
        } else {
            $fl = 0;
            foreach ($timkiem as $item) {
                extract($item);
                $fl++;
            }
            if ($fl == 0) {
                echo '
                <h1>KHÔNG TÌM THẤY BẤT KỲ KẾT QUẢ NÀO VỚI TỪ KHÓA TRÊN.</h1>
                <h5>Vui lòng nhập từ khóa tìm kiếm khác</h5>
                <form action="?ctr=search_tours" method="POST"> 
                    <input type="text"placeholder="Bạn Cần Tìm Gì ?"  name = "tktour">
                    <button name="btn">Tìm Kiếm</button> 
                </form>
                ';
            } else {
                echo '  <div class="title-search">
                <div class="container">
                    <h1>CÓ  ' . $fl . ' KẾT QUẢ TÌM KIẾM PHÙ HỢP</h1>
                </div>
            </div>  ';
            }
        }
    }
    ?>
</center>
<section class="tour-inbound">
    <div class="container">
        <div class="tour-last">
            <?php foreach ($timkiem as $tour) : ?>
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
                                <div class="sale-off"><?= $tour['price'] ?>₫</div>
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
            <!-- <ul class="pagination pagination phantrang">
            <li><a href="?ctr=tourDL&trang=1">1</a></li>
            <li><a href="?ctr=tourDL&trang=2 ">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            </ul> -->
        </div>
    </div>    
</section>
<?php include_once "footer.php" ?>