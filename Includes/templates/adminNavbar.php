<!-- TRANG CHU NAVBAR HEADER -->

<header class="headerMenu сlearfix sb-page-header">   
    <div class="nav-header">
        <a class="navbar-brand" href="admin.php">Admin</a> 
    </div>

    <div class="nav-controls top-nav">
        <ul class="nav top-menu">
            <li class="navbar-item dropdown pe-3 profile-user">
                <?php if (isset($_SESSION['is_login']['hoten'])): ?>
                    <a class="navbar-link  navbar-profile d-flex align-items-center pe-0 profile-main" style="color: black;" href="#" role="button" data-bs-toggle="dropdown">
                        <img src="./Design/images/<?php echo $_SESSION['is_login']['hinhanh'] ?>" alt="Profile" class="rounded-circle" style="width: 30px; height: 30px;">&nbsp;
                        <?php if (isset($_SESSION['is_login']['hoten'])): ?>
                            <span style="font-family: sans-serif;" class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['is_login']['hoten'] ?></span>
                        <?php endif; ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" style="background-color: #fff; box-shadow: 1px 2px 3px #000;">
                        <li class="dropdown-header">
                            <h6 class="text-center"><b><?php echo $_SESSION['is_login']['hoten'] ?></b></h6>
                            <p class="text-center"><?php echo $_SESSION['is_login']['tenvaitro']; ?></p>
                        </li>
                        <?php if (isset($_SESSION['login']) && $_SESSION['is_login']['vaitro'] != 4): ?>
                            <li>
                                <a class="dropdown-item" href="admin.php">
                                    <i class="fa-solid fa-gear"></i>
                                    <span class="ml-2">Vào trang quản lý</span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="admin.php?mod=Profile">
                                <i class="bi bi-person"></i>
                                <span class="ml-2">Thông tin tài khoản</span>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span class="ml-2">Trợ giúp?</span>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="index.php?mod=logout">
                                <i class="bi bi-box-arrow-right"></i>
                                <span class="ml-2">Đăng xuất</span>
                            </a>
                        </li>
                    </ul>
                <?php else: ?>
                    <li class="navbar-item">
                        <a class="navbar-link text-white" href="?mod=login" id="login">Đăng nhập</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </li>
                <?php endif; ?>
            </li>
            
            <li class="main-li webpage-btn">
                <a class="nav-item-button " href="index.php" target="_blank">
                    <i class="fas fa-binoculars"></i>
                    <span>Xem Website</span>
                </a>
            </li>
        </ul>
    </div>
</header>

<!-- VERTICAL NAVBAR -->

<aside class="vertical-menu" id="vertical-menu">
    <div>
        <ul class="menu-bar">
            <div class="dropdown-divider"></div>
            <li>
                <a href="admin.php" class="a-verMenu dashboard_link">
                    <i class="fas fa-tachometer-alt icon-ver"></i>
                    <span style="padding-left:6px;">Trang chủ</span>
                </a>
            </li>
            <div class="dropdown-divider"></div> 
            <li>
                <a href="View/vadminThucdon.php" class="a-verMenu menus_link">
                    <i class="fas fa-utensils icon-ver"></i>
                    <span style="padding-left:6px;">Thực đơn</span>
                </a>
            </li>
            <div class="dropdown-divider"></div>
            <!-- Add other menu items as needed -->
        </ul>
    </div>
</aside>

<!-- START BODY CONTENT -->

<div id="content" style="margin-left:240px;"> 
    <section class="content-wrapper" style="width: 100%;padding: 70px 0 0;">
        <div class="inside-page" style="padding:20px">
            <div class="page_title_top" style="margin-bottom: 1.5rem!important;">
                <h1 style="color: #5a5c69!important;font-size: 1.75rem;font-weight: 400;line-height: 1.2;">
                    <?php echo $pageTitle; ?>
                </h1>
            </div>
            <!-- Add your page content here -->
        </div>
    </section>
</div>
