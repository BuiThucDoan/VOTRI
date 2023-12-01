<?php
	session_start();
	ob_start();
	


	if (isset($_GET['mod'])) {
	  if ($_GET['mod'] == 'login') {
		include_once('View/vlogin.php');

	  } elseif($_GET['mod'] == 'menus' ){

            include_once('View/vMonan.php');
	 
		
	  }elseif ($_GET['mod'] == 'addcart'){
		if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
			$id_monan = $_POST['id_monan'];
			$hinhanh = $_POST['hinhanh'];
			$tenmonan = $_POST['tenmonan'];
			$gia = $_POST['gia'];

		
			// Kiểm tra xem $_SESSION['giohang'] đã tồn tại chưa
			if (!isset($_SESSION['giohang'])) {
				$_SESSION['giohang'] = array(); // Nếu chưa tồn tại, tạo mới
			}
		
			$item = array($id_monan, $hinhanh, $tenmonan, $gia);
		
			// Thêm vào giỏ hàng
			$_SESSION['giohang'][]=$item;
		}
		
	
		include_once('View/vCart.php');

	
	  }
	  elseif($_GET['mod'] == 'introduce'){
		include_once('gioithieu.php');
	  }elseif($_GET['mod'] == 'pay'){
		include_once('thanhtoan.php');

	  }elseif ($_GET['mod'] == 'chitiet') {
        if (isset($_GET['id'])) {
			include 'Includes/functions/functions.php';
			include "Includes/templates/header.php";
			include "Includes/templates/navbar.php";
			
			include_once('View/vChitietmonan.php');
			include_once ("Includes/templates/footer.php");
            
        } else {
            echo "Không có ID món ăn được cung cấp.";
        }
    }
	}else {
    include "connect.php";
    include 'Includes/functions/functions.php';
    include "Includes/templates/header.php";
    include "Includes/templates/navbar.php";
	include_once ("View/vindex.php");
	include_once ("Includes/templates/footer.php");
}
?>

