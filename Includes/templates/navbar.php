
    
    <!-- START NAVBAR SECTION -->

    <header id="header" class="header-section">
        <div class="container">
            <nav class="navbar">
                <a href="index.php" class="navbar-brand">
         
                    <img src="Design/images/Nhom_vo_tri_logos_white.png" alt="Restaurant Logo" style="width: 150px;">
                </a>
                <div class="d-flex menu-wrap align-items-center ">
                    <div class="mainmenu" id="mainmenu">
                        <ul class="nav">
                            <li><a href="index.php#home">Trang chủ</a></li>
                            <li><a href="thucdon.php">Thực đơn</a></li>
                            <li><a href="thanhtoan.php">Thanh toán</a></li>
                            <li><a href="gioithieu.php">Giới thiệu</a></li>
                            <li><a href="index.php#contact">CSKH</a></li>
                            <li><a href="index.php?act=login" id="login"><img src="Design/images/user.png<?php echo $_SESSION['is_login']['hinhanh'] ?>" alt="Login" class="rounded-circle">&nbsp;</a>
                            <span style="font-weight: 700;" class="d-none d-md-block dropdown-toggle ps-2"> <?php echo  $_SESSION['is_login']['hoten']; ?> </span></li>
                            <li><a href="#"><img src="./Design/images/cart.png" alt=""></a></li>
                        </ul>
                    </div>
                    <div>
                </div>
            </nav>
        </div>
    </header>

	<div class="header-height" style="height: 120px;"></div>

    <!-- END NAVBAR SECTION -->