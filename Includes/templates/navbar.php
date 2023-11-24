<!-- START NAVBAR SECTION -->
<header id="header" class="header-section">
    <div class="container">
        <nav class="navbar">
            <a href="index.php" class="navbar-brand">
                <img src="Design/images/Nhom_vo_tri_logos_white.png" alt="Restaurant Logo" style="width: 150px;">
            </a>
            <div class="d-flex menu-wrap align-items-center">
                <div class="mainmenu" id="mainmenu">
                    <ul class="nav">
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="?act=menus" id="menus">Thực đơn</a></li>
                        <li><a href="?act=pay" id="pay">Thanh toán</a></li>
                        <li><a href="?act=introduce" id="introduce">Giới thiệu</a></li>
                    </ul>
                </div>
                <ul class="nav ms-auto">
                    <?php if (isset($_SESSION['is_login']['hoten'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="index.php?act=login" data-bs-toggle="dropdown">
                                <img src="./Design/images/<?php echo $_SESSION['is_login']['hinhanh'] ?>" alt="Profile" class="rounded-circle" style="width: 30px; height: 30px;">&nbsp;
                                <span style="font-weight: 700;" class="d-none d-md-block dropdown-toggle ps-2"> <?php echo $_SESSION['is_login']['hoten']; ?> </span>
                            </a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a href="?act=login" id="login">Đăng nhập</a>
                        </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a href="#"><img src="./Design/images/cart.png" alt=""></a>
                    </li>
                    <li class="nav-item">
                        <div class="container-1" style="margin-top: 20px;">
                            <input type="search" id="search" placeholder="Tìm kiếm..." style="height: 32px; width: 150px; padding: 5px; font-size: 14px;">
                            <button type="button" class="btn-search" onclick="searchFunction()" style="height: 32px;">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<div class="header-height" style="height: 120px;"></div>
<!-- END NAVBAR SECTION -->

<script>
    function searchFunction() {
        // Add your search functionality here
        alert("Searching...");
    }
</script>
