<?php
	session_start();
	ob_start();
	
	if (isset($_GET['act'])) {
	  if ($_GET['act'] == 'login') {
		include_once('View/vlogin.php');
	  } elseif($_GET['act'] == 'menus'){
		include_once('thucdon.php');
	  }elseif($_GET['act'] == 'introduce'){
		include_once('gioithieu.php');
	  }elseif($_GET['act'] == 'pay'){
		include_once('thanhtoan.php');
	  }elseif ($_GET['act'] == 'chitiet') {
        // Kiểm tra xem có tham số 'id' không
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

