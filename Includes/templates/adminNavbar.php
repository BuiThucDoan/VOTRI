

    
    <!-- TRANG CHU NAVBAR HEADER -->

    <header class="headerMenu сlearfix sb-page-header">   
        <div class="nav-header">
        
            <a class="navbar-brand" href="admin.php">
                Admin
            </a> 
        </div>

        <div class="nav-controls top-nav">
            <ul class="nav top-menu">
            <li class="nav-item">
    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="index.php?act=login" data-bs-toggle="dropdown">
        <!-- Set a fixed width and height for the profile image -->
        <img src="./Design/images/<?php echo $_SESSION['is_login']['hinhanh'] ?>" alt="Profile" class="rounded-circle" style="width: 30px; height: 30px;">&nbsp;
        <span style="font-weight: 700;" class="d-none d-md-block dropdown-toggle ps-2"> <?php echo  $_SESSION['is_login']['hoten']; ?> </span>
    </a>
</li>
                <li id="user-btn" class="main-li dropdown" style="background:none;">
                    <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i>
                            <span class="username">Cài đặt</span>
                            <b class="caret"></b>
                        </a>
                        
                        <!-- DROPDOWN MENU -->
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user-cog"></i>
                                <span style="padding-left:6px">
                                    Quản lý tài khoản
                                </span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs"></i>
                                <span style="padding-left:6px">
                                    Chỉnh sửa tài khoản
                                </span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="">
                                <i class="fas fa-sign-out-alt"></i>
                                <span style="padding-left:6px">
                                    Đăng xuất
                                </span>
                            </a>
                        </div>
                    </div>
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
                    <a href="View/avThucdon.php" class="a-verMenu menus_link">
                        <i class="fas fa-utensils icon-ver"></i>
                        <span style="padding-left:6px;">Thực đơn</span>
                    </a>
                </li>
                
                
                <div class="dropdown-divider"></div>
                
              

            </ul>
        </div>
    </aside>

    <!-- START BODY CONTENT  -->

    <div id="content" style="margin-left:240px;"> 
        <section class="content-wrapper" style="width: 100%;padding: 70px 0 0;">
            <div class="inside-page" style="padding:20px">
                <div class="page_title_top" style="margin-bottom: 1.5rem!important;">
                    <h1 style="color: #5a5c69!important;font-size: 1.75rem;font-weight: 400;line-height: 1.2;">
                        <?php echo $pageTitle; ?>
                    </h1>
                </div>