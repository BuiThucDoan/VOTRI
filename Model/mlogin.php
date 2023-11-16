<?php
include_once("ketnoi.php");
class modellogin
{
	function selectLogin($user, $pas){
		$p = new KetNoiDB();
		$con;
			if ($p->moKetNoi($con)){
				$query = "SELECT * FROM taikhoan INNER JOIN `vaitro` ON taikhoan.vaitro = vaitro.idvaitro";
				$tbl = mysql_query($query);
				$p->dongKetNoi($con);
				return $tbl;	
			}else{
				return false;
			}
	}

}

