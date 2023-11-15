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
    <title>Chi Tiết Món Ăn</title>
    <link rel="stylesheet" href="../Design/css/bootstrap.min.css">
   
    <style>
        /* Định dạng hình ảnh */
.chitiet img {
    width: 100%;
    height: auto;
    object-fit: cover; 
}

/* Định dạng phần thông tin món ăn */
.info {
    overflow: hidden;
}

.name {
    font-size: 24px;
    font-weight: bold;
}

.desc {
    margin-top: 10px;
    margin-bottom: 20px;
}

.price {
    font-size: 18px;
    font-weight: bold;
    color: #e44d26; /* Màu cam, có thể điều chỉnh tùy ý */
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
      
           

            <div class="chitiet">
                <img src="Design/image/<?php echo $monan['hinhanh']; ?>" alt="<?php echo $monan['tenmonan']; ?>">
            </div>


            <div class="info">
                <div class="name"><?php echo $monan['tenmonan']; ?></div>
                <div class="price"><?php echo number_format($monan['gia'], 0, ',', '.') ?> VNĐ</div>
                <div class="order"><a href="#" class="btn btn-primary">Đặt món</a></div>
                
            </div>

            <!-- Tabs cho mô tả và đánh giá -->
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


<!-- Sử dụng Bootstrap JS và Popper.js nếu cần thiết -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- Nếu bạn muốn sử dụng Bootstrap 5, hãy thay đổi đường dẫn đến file JS -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha2/dist/js/bootstrap.min.js"></script> -->

</body>
</html>






 

   
