<!-- PHP INCLUDES -->

<?php
    //Set page title
    $pageTitle = 'Thực đơn';

    include "connect.php";
    include 'Includes/functions/functions.php';
    include "Includes/templates/header.php";
    include "Includes/templates/navbar.php";


?>




<section class="our_menus" id="menus">
		<div class="container">
			<h2 style="text-align: center;margin-bottom: 30px">THỰC ĐƠN TRONG TUẦN</h2>
			<div class="menus_tabs">
            <div class="sidebar__item__size">
							<?php

							 ?>
             </div>

				<div class="menus_tabs_picker">
					<ul style="text-align: center;margin-bottom: 70px">
						<?php

	                        $stmt = $con->prepare("Select * from loai_thucdon  ");
	                        $stmt->execute();
	                        $rows = $stmt->fetchAll();
	                        $count = $stmt->rowCount();

	                        $x = 0;

							foreach ($rows as $row) {
								if ($x == 0) {
									echo "<li class = 'menu_category_name tab_category_links active_category' onclick=showCategoryMenus(event,'".str_replace(' ', '', $row['tenloaithucdon'])."')>";
									echo $row['tenloaithucdon'];
									echo "</li>";
								} else {
									echo "<li class = 'menu_category_name tab_category_links' onclick=showCategoryMenus(event,'".str_replace(' ', '', $row['tenloaithucdon'])."')>";
									echo $row['tenloaithucdon'];
									echo "</li>";
								}
							
								$x++;
							}
						?>
					</ul>
				</div>

				<div class="menus_tab">
					<?php
                
                        $stmt = $con->prepare("Select * from loai_thucdon, thucdon");
                        $stmt->execute();
                        $rows = $stmt->fetchAll();
                        $count = $stmt->rowCount();
						
					
                        $i = 0;

                        foreach($rows as $row) 
                        {

                            if($i == 0)
                            {
									
									   echo '<div class="menu_item  tab_category_content" id="'.str_replace(' ', '', $row['tenloaithucdon'] and $row['tenthucdon']).'" style="display:block">';
									
									$stmt_menus = $con->prepare("Select * from monan where idloaithucdon = ? and idthucdon = ? ORDER BY idloaithucdon, idthucdon ");
									$stmt_menus->execute(array($row['idloaithucdon'], $row['idthucdon']));
									$rows_menus = $stmt_menus->fetchAll();

                                    if($stmt_menus->rowCount() == 0)
                                    {
                                        echo "<div style='margin:auto'>không có món ăn nào trong thực đơn!</div>";
                                    }

                                    echo "<div class='row'>";
	                                    foreach($rows_menus as $menu)
	                                    {
	                                        ?>

	                                            <div class="col-md-4 col-lg-3 menu-column">
													<a href="View/vChitietmonan.php?id">
	                                                <div class="thumbnail" style="cursor:pointer">
	                                                    <?php $source = "Design/image/".$menu['hinhanh']; ?>

	                                                    <div class="menu-image">
													        <div class="image-preview">
													            <div style="background-image: url('<?php echo $source; ?>');"></div>
													        </div>
													    </div>
													</a>                                                    
	                                                    <div class="caption">
	                                                        <h3>
	                                                            <?php echo $menu['tenmonan'];?>
	                                                        </h3>
	                                                        <p>
	                                                            <?php echo $menu['mota']; ?>
	                                                        </p>
	                                                        <span class="menu_price text-warning" >
	                                                        	<?php echo number_format($menu['gia'], 0, ',', '.') . " VND"; ?>
	                                                        </span>
                                                           <div class="buttondatmon">
																<a href="order_food.php">
																	<button class="btn btn-danger btn-icon" style="margin: 5px 0;" type="button">Đặt món</button>	
																</a>
															</div>
	                                                    </div>
														
													</div>
	                                            </div>

	                                        <?php
	                                    }
	                                echo "</div>";

                                echo '</div>';

                            }

                            else
                            {

										echo '<div class="menu_item  tab_category_content" id="'.str_replace(' ', '', $row['tenloaithucdon'] and $row['tenthucdon']).'" style="display:block">';
										
										$stmt_menus = $con->prepare("Select * from monan where idloaithucdon = ? and idthucdon = ? ");
										$stmt_menus->execute(array($row['idloaithucdon'], $row['idthucdon']));
										$rows_menus = $stmt_menus->fetchAll();


                                    if($stmt_menus->rowCount() == 0)
                                    {
                                        echo "<div style='margin:auto'>không có món ăn nào trong thực đơn!</div>";
                                    }

                                    echo "<div class='row'>";
	                                    foreach($rows_menus as $menu)
	                                    {
	                                        ?>

	                                            <div class="col-md-4 col-lg-3 menu-column">
	                                                <div class="thumbnail" style="cursor:pointer">
	                                                	<?php $source = "Design/image/".$menu['hinhanh']; ?>
	                                                    <div class="menu-image">
													        <div class="image-preview">
													            <div style="background-image: url('<?php echo $source; ?>');"></div>
													        </div>
													    </div>
	                                                    <div class="caption">
	                                                       <h3>
	                                                            <?php echo $menu['tenmonan'];?>
	                                                        </h3>
	                                                        <p>
	                                                            <?php echo $menu['mota']; ?>
	                                                        </p>
	                                                       <span class="menu_price text-warning" >
	                                                        	<?php echo number_format($menu['gia'], 0, ',', '.') . " VND"; ?>
	                                                        </span>
                                                            <div class="buttondatmon">
																<a href="order_food.php">
																	<button class="btn btn-danger btn-icon" style="margin: 5px 0;" type="button">Đặt món</button>	
																</a>
															</div>
	                                                    </div>
	                                                </div>
	                                            </div>

	                                        <?php
	                                    }
	                               	echo "</div>";

                                echo '</div>';

                            }

                            $i++;
                            
                        }
                    
                        echo "</div>";
                
                    ?>
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
