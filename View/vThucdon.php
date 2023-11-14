<?php
	//include controller Company
	include_once("Controller/cThucdon.php");
	class ViewMenu{
	//tao moi dooi tuong controller company
	function viewAllMenu(){
		$p = new controlMenu();
		$tblMenu = $p->getAllMenu();
		if($tblMenu){
			//kiemm tra ket qua nhan duoc co du lieu 
			if(mysql_num_rows($tblMenu) > 0){
			// duyet tung dong du lieu trong ket qua nhan duoc
			while($row = mysql_fetch_assoc($tblMenu)){
				// hien thi ket qua nhan duoc
				echo "<a href='test.php?menu=".$row["idthucdon"]."'>".$row["tenthucdon"]."</a><br>";
				
			}
		}else {
				echo "0 result";
			}
			
	}else {
			echo "Error";
		}
	}
	function viewAllCateMenu(){
		$p = new controlMenu();
		$tbl = $p->getAllCateMenu();
		if($tbl){
			//kiemm tra ket qua nhan duoc co du lieu 
			if(mysql_num_rows($tbl) > 0){
			// duyet tung dong du lieu trong ket qua nhan duoc
			while($row = mysql_fetch_assoc($tbl)){
				// hien thi ket qua nhan duoc
				echo "<a href='test.php?menu=".$row["idloaithucdon"]."'>".$row["tenloaithucdon"]."</a><br>";
				
			}
		}else {
				echo "0 result";
			}
			
	}else {
			echo "Error";
		}
	}


	  
	}
?>	