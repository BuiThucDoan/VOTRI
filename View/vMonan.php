<?php
	include("Controller/cMonan.php");
	class viewMonan{
		function viewAllMonan(){
			$p = new controlMonan();
			$tbl = $p->getAllMonan();
			$this->displayProduct($tbl);		
		}
		function viewAllMonanbyLoai($cate) {
				$p = new controlMonan();
				 $tbl = $p->getAllMonanbyLoai($cate);
				 $this->displayProduct($tbl);
			}
			
		function viewAllMonanbyThucdon($menu) {
				$p = new controlMonan();
				 $tbl = $p->getAllMonanbyThucdon($menu);
				 $this->displayProduct($tbl);
			}
			/*
		function viewAllMonanbyMenuAndCate($menu, $cate) {
				$p = new controlMonan();
				 $tbl = $p->getAllMonanbyMenuAndCate($menu, $cate);
				 $this->displayProduct($tbl);
			}
		*/
	function displayProduct($tbl) {
    if ($tbl) {
        if (mysql_num_rows($tbl) > 0) {
            $p = new controlMonan();
            $dem = 0;
            echo '<div class="container">';
            echo '<div class="row justify-content-center">';
            echo '<div class="col-md-10">'; 

            echo '<div class="row">';
            while ($row = mysql_fetch_assoc($tbl)) {
                if ($dem % 4 == 0) {
                    echo '</div><div class="row">';
                }
                echo '<div class="col-md-3">';
                echo '<div class="thumbnail" style="cursor:pointer">';
                echo '<div class="menu-image">';
                echo '<div class="image-preview circular-image">'; 
				
                echo '<img src="Design/image/' . $row['hinhanh'] . '" style="width: 200px; height: 200px; border-radius: 50%; border: 4px solid orange;" /><br>'; 
                echo '</div>';
                echo '</div>';
                echo '<br><p><b>' . $row['tenmonan'] . '</b></p>';
                echo number_format($row['gia'], 0, ',', '.') . ' VND';
				echo '<br>';
				echo '<a href="test.php?id=' . $row['id_monan'] . '" onclick="showDetails(this)"><button>Xem chi tiết</button></a>';
                echo '<div class="buttondatmon">';
                echo '<a href="order_food.php">';
                echo '<button class="btn btn-danger btn-icon" style="margin: 5px 0;" type="button">';
                echo 'Đặt món';
                echo '</button>';
                echo '</a></div>';
                echo '<br><br></div>';
                echo '</div>';
                $dem++;
            }

            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        } else {
            echo '0 result';
        }
    }
}



	
			}
?>

  
