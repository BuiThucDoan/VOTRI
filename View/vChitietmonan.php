 <?php
 
    include_once("Controller/cMonan.php");

  	
	$p = new  controlMonan();
	if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $monan = $p->getShowchitiet($id);
} else {
    echo "Không có ID món ăn được cung cấp.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết món ăn</title>
    <style>
        /* Định dạng hình ảnh */
        .chitiet img {
            width: 100%; /* Điều chỉnh kích thước để nó đầy đủ cả chiều rộng của phần chứa */
            height: auto; /* Đảm bảo tỷ lệ khung hình được giữ nguyên */
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

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <div class="chitiet">
                <img src="Design/image/<?php echo $monan['hinhanh']; ?>" alt="<?php echo $monan['tenmonan']; ?>">
            </div>
        </div>

        <div class="col-md-4">
            <div class="info">
                <div class="name"><?php echo $monan['tenmonan']; ?></div>
                <div class="price"><?php echo number_format($monan['gia'], 0, ',', '.') ?> VNĐ</div>
                <div class="order"><a href="#" class="btn btn-primary">Đặt món</a></div>
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
                    <p><?php echo $monan['mota']; ?></p>
                </div>
                <div class="tab-pane fade" id="danhGia">
                    <!-- Nội dung đánh giá ở đây -->
                </div>
            </div>
        </div>
    </div>
</div>



</body>
</html>






 

   
