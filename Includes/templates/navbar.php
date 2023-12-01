<!-- START NAVBAR SECTION -->
<header id="header" class="header-section" style="height: 100px;">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="index.php" class="navbar-brand text-white">
                <img src="Design/images/Nhom_vo_tri_logos_white.png" alt="Restaurant Logo" style="width: 150px;">
            </a>
            <form action="" method="get" class="navbar-form ms-auto">
                <div class="input-group">
                    <input type="search" name="search" id="search" class="form-control" placeholder="Tìm kiếm...">
                    <button type="submit" class="btn btn-primary" id="btn_search">Tìm kiếm</button>
                </div>
            </form>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php">Trang chủ</a>
                    </li>
                    <?php  
                        $ngay_hien_tai = date('Y-m-d');

                        // Lấy mã số ngày trong tuần (1 là thứ 2, 7 là Chủ Nhật)
                        $ngay_trong_tuan = date('N', strtotime($ngay_hien_tai));
                    
                        if ($ngay_trong_tuan >= 6) {
                            // Nếu hôm nay là thứ 6, thứ 7 hoặc Chủ Nhật, lấy ngày của thứ 2 tuần tiếp theo
                            $ngay_ngay_mai = date('Y-m-d', strtotime('next Monday', strtotime($ngay_hien_tai)));
                        } else {
                            // Ngược lại, lấy ngày tiếp theo sau 1 ngày
                            $ngay_ngay_mai = date('Y-m-d', strtotime('+1 day', strtotime($ngay_hien_tai)));
                        }
                    ?>
                    <li class="nav-item">
                        <a href="index.php?mod=menus&act=list&date=<?php echo $ngay_ngay_mai ?>" class="navbar-link text-white" data-nav-link>Thực đơn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="?mod=pay">Thanh toán</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="?mod=introduce">Giới thiệu</a>
                    </li>
                </ul>
                
                <ul class="navbar-nav ms-auto">
                    <?php if (isset($_SESSION['is_login']['hoten'])): ?>
                        <li class="nav-item">
                            <a class="nav-link nav-profile d-flex align-items-center pe-0 text-white" href="index.php?mod=login" data-bs-toggle="dropdown">
                                <img src="./Design/images/<?php echo $_SESSION['is_login']['hinhanh'] ?>" alt="Profile" class="rounded-circle" style="width: 30px; height: 30px;">&nbsp;
                                <span style="font-weight: 700;" class="d-none d-md-block dropdown-toggle ps-2"> <?php echo $_SESSION['is_login']['hoten']; ?> </span>
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="?mod=login" id="login">Đăng nhập</a>
                        </li>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <img src="./Design/images/cart.png" alt="Giỏ hàng"> Giỏ hàng
                        </a>
                    </li>
                </ul>
               
            </div>
        </nav>
    </div>
</header>
<!-- END NAVBAR SECTION -->
