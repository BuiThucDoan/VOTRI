<?php
	include_once("ketnoi.php");
	class modelCateMenu{

	function SelectAllCateMenu(){
			$p = new KetNoiDB();
			$con;
			if ($p->moKetNoi($con)){
				$query = "Select * from loai_thucdon";
				$tbl = mysql_query($query);
				$p->dongKetNoi($con);
				return $tbl;	
			}else{
				return false;
			}
	}
	
	
	}
?>