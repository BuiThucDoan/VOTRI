<?php
	class KetNoiDB{
		function moKetNoi(& $con){
		$con = mysql_connect("localhost","root","");
		mysql_set_charset("utf8");
		if ($con){
			$db = mysql_select_db("bepan_votri");
			return $db;
		}else {
			return false;
		}
		}
		function dongKetNoi($con){
			mysql_close($con);
		}
	}
?>