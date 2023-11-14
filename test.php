<?php
    //Set page title
    $pageTitle = 'Thực đơn';


    include 'Includes/functions/functions.php';
    include "Includes/templates/header.php";
    include "Includes/templates/navbar.php";


?>


	<section class="our_menus" id="menus">
		<div class="container">
			<h2 style="text-align: center;margin-bottom: 30px">Thực đơn trong tuần</h2>
            <div class="menus_tabs">
            <div class="sidebar__item__size">
            <h2 style="margin-bottom: 30px">Lọc theo ngày</h2>
				<?php
					include ("View/vLoaiThucDon.php");
					$p = new ViewCateMenu();
					$p->viewAllCateMenu();
				?>
				</div>
                </div>
            <div class="menus_tabs">
            <div class="sidebar__item__size">
            <h2 style="margin-bottom: 30px">Lọc theo thực đơn</h2>
            
				<?php
					include ("View/vThucdon.php");
					$p = new ViewMenu();
					$p->viewAllMenu();
				?>
				</div>
                </div>
				<div class="menus_tabs">
                
            <div class="sidebar__item__size">
			<?php
					include("View/vMonan.php");
					$p = new viewMonan();
					
					if (isset($_REQUEST["menu"])) {
						// Xử lý tham số 'menu'
						$p->viewAllMonanbyThucdon($_REQUEST["menu"]);
					} elseif (isset($_REQUEST["cate"])) {
						// Xử lý tham số 'cate'
						$p->viewAllMonanbyLoai($_REQUEST["cate"]);
					}elseif (isset($_REQUEST["id"])) {
						
					include_once("View/vChitietmonan.php");
					} else {
						// Hiển thị tất cả món ăn nếu không có tham số nào được gửi
						$p->viewAllMonan();
					}
					?>

				</div>
                </div>
			</div>
		</div>
     
	</section>
	<!-- WIDGET SECTION / FOOTER -->

     <section class="widget_section" style="background-color: #222227;padding: 100px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                <img src="Design/images/Nhom_vo_tri_logos_white.png" alt="Restaurant Logo" style="width: 150px;margin-bottom: 20px;">
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
<!-- FOOTER BOTTOM  -->
<?php include "Includes/templates/footer.php"; ?>
