<?php
include_once("Controller/cMonan.php");


$p = new controlMonan();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $monan = $p->getShowchitiet($id);

    if (!$monan) {
        echo "Không có món ăn nào được tìm thấy với ID này.";
        exit; // Stop execution if no menu item is found
    }
} else {
    echo "Không có ID món ăn được cung cấp.";
    exit; // Stop execution if no ID is provided
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết món ăn</title>
    <style>
        body{
            background-color: black;
            color: white;
        }
        /* Định dạng hình ảnh */
        .chitiet img {
            width: 650px; /* Điều chỉnh kích thước để nó đầy đủ cả chiều rộng của phần chứa */
            height: 400px; /* Đảm bảo tỷ lệ khung hình được giữ nguyên */
            object-fit: cover; /* Hiển thị toàn bộ hình ảnh và không bị méo */
        }

        /* Định dạng phần thông tin món ăn */
        .info {
            overflow: hidden;
            margin-top: 20px;
        }

        .name {
            font-size: 24px;
            font-weight: bold;
        }

        .price {
            font-size: 18px;
            font-weight: bold;
            color: #e44d26; /* Màu cam, có thể điều chỉnh tùy ý */
            margin-top: 10px;
        }

        .order {
            margin-top: 10px;
        }

        /* Định dạng tabs */
        .nav-tabs {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<section style="padding: 100px 0 100px; background-color: black;">
<div class="container mt-5 ">
    <div class="row">
        <div class="col-md-8">
            <div class="chitiet">
                <img src="Design/image/<?php echo $monan['monan']['hinhanh']; ?>" alt="<?php echo $monan['monan']['tenmonan']; ?>">
            </div>
        </div>

        <div class="col-md-4">
        <div class="info">
    <div class="name"><h2><?php echo $monan['monan']['tenmonan']; ?></h2></div>

    <div class="price"><?php echo number_format($monan['monan']['gia'], 0, ',', '.') ?> VNĐ</div>
    <div><h3>Nguyên liệu bao gồm:</h3></div>

    <?php
    if (isset($monan['nguyenlieu']) && is_array($monan['nguyenlieu'])) {
        echo '<ul>';
        foreach ($monan['nguyenlieu'] as $nguyenlieu) {
            // Hiển thị thông tin nguyên liệu với số lượng sử dụng và đơn vị tính
            echo '<li>' . $nguyenlieu['tennguyenlieu'] . ': ' . $nguyenlieu['soluongsudung'] . ' ' . $nguyenlieu['donvitinh'] . '</li>';
        }
        echo '</ul>';
    } else {
        echo 'Không có nguyên liệu.';
    }
    ?>

        <a href="index.php?mod=cart&act=Add&id_monan=<?php echo $monan['monan']['id_monan']; ?>&date=<?php echo $_GET['date'] ?>" class="btn btn-danger">Đặt món</a>
 
</div>


        </div>

        <!-- Tabs cho mô tả và đánh giá -->
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" id="moTa-tab" data-toggle="tab" href="#moTa">Mô tả</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="danhGia-tab" data-toggle="tab" href="#danhGia">Đánh giá</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="moTa">
                    <p><?php echo $monan['monan']['mota']; ?></p>
                </div>
                <div class="tab-pane fade" id="danhGia">
                <div class="product__details__text">
                            <h3><?php echo  $monan['monan']['tenmonan'] ?></h3>
                            <div class="product__details__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <span>(<?php if (!empty($phanhoi)) {
                                            echo count($phanhoi);
                                        } else {
                                            echo 0;
                                        } ?> nhận xét)</span>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="widget_section" style="background-color: #222227;padding: 100px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                <img src="./Design/images/Nhom_vo_tri_logos_white.png" alt="Restaurant Logo" style="width: 150px;margin-bottom: 20px;">
                    <div class="footer_widget">
                        
                        <p>
                            Bếp ăn chúng tui cam kết đem lại cho nhân viên công ty những bữa ăn chất lượng và đầy đủ dinh dưỡng
                        </p>
                        <ul class="widget_social">
                            <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f fa-2x"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="fab fa-twitter fa-2x"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" title="Instagram"><i class="fab fa-instagram fa-2x"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" title="LinkedIn"><i class="fab fa-linkedin fa-2x"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" title="Google+"><i class="fab fa-google-plus-g fa-2x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                     <div class="footer_widget">
                        <h3>Địa chỉ</h3>
                        <p>
                            Số 4, Nguyễn Văn Bảo, Phường 4, Gò Vấp
                        </p>
                        <p>
                            votri666.@gmail.com <br>
                            0123456789
                        </p>
                     </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer_widget">
                        <h3>
                            Thời gian hoạt động
                        </h3>
                        <ul class="opening_time">
                            <li>Thứ 2 _ 6:30am - 6:00pm</li>
                            <li>Thứ 3 _ 6:30am - 6:00pm</li>
                            <li>Thứ 4 _ 6:30am - 6:00pm</li>
                            <li>Thứ 5 _ 6:30am - 6:00pm</li>
                            <li>Thứ 6 _ 6:30am - 6:00pm</li>
                            <li>Thứ 7 _ 6:30am - 6:00pm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
						<div class="footer_widget">
                        <h3>
                            Thời gian hoạt động
                        </h3>
                   
						<ul class="footer_social">
							<li><a href="#">Đặt món</a></li> <br>
							<li><a href="#">Giới thiệu</a></li><br>
							<li><a href="#">Báo cáo vấn đề</a></li><br>
						</ul>
					
                    </div>
					</div>
            </div>
        </div>
    </section>

</body>
</html>






 

   
