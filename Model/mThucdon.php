<?php
	include_once("ketnoi.php");
	class modelMenu{
		function SelectAllMenu(){
			$p = new KetNoiDB();
			$con;
			if ($p->moKetNoi($con)){
				$query = "Select * from thucdon";
				$tbl = mysql_query($query);
				$p->dongKetNoi($con);
				return $tbl;	
			}else{
				return false;
			}
	}
	
	
	
	}
?>