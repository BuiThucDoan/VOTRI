<?php
include_once("ketnoi.php");
class modelMonan
{

function SelectAllMonan(){
			$p = new KetNoiDB();
			$con;
			if ($p->moKetNoi($con)){
				$query = "Select * from monan ";
				$tbl = mysql_query($query);
				$p->dongKetNoi($con);
				return $tbl;	
			}else{
				return false;
			}
	}
function SelectAllMonanbyid($id){
			$p = new KetNoiDB();
			$con;
			if ($p->moKetNoi($con)){
				$query = "Select * from monan where idmonan = ".$id;
				$tbl = mysql_query($query);
				$p->dongKetNoi($con);
				return $tbl;	
			}else{
				return false;
			}
	}
	
		function SelectAllMonanbyLoai($cate){
			$p = new KetNoiDB();
			$con;
			if ($p->moKetNoi($con)){
				$query = "Select * from monan where idloaithucdon =".$cate;
				$tbl = mysql_query($query);
				$p->dongKetNoi($con);
				return $tbl;	
			}else{
				return false;
			}
	} 
	
/*
	function SelectAllMonanbyMenuAndCate($menu, $cate){
    $p = new KetNoiDB();
    $con;
    if ($p->moKetNoi($con)){
        $query = "SELECT * FROM monan WHERE idthucdon = " . $menu . " and idloaithucdon = " . $cate;
        $tbl = mysql_query($query);
        $p->dongKetNoi($con);
        return $tbl;    
    } else {
        return false;
    }
}

	*/
	function SelectAllMonanbyThucDon($menu){
			$p = new KetNoiDB();
			$con;
			if ($p->moKetNoi($con)){
				$query = "Select * from monan where idthucdon =".$menu;
				$tbl = mysql_query($query);
				$p->dongKetNoi($con);
				return $tbl;	
			}else{
				return false;
			}
	} 

}

