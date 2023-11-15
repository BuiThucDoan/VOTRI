<?php
	include_once("Model/mMonan.php");
class controlMonan{
	    function getAllMonan() {
        $p = new modelMonan();
        $tbl = $p->SelectAllMonan();
        return  $tbl;
    }
	function getShowchitiet($id) {
			$p = new  modelMonan();
			$tbl = $p->Showchitiet($id);
			return $tbl;
			}
	function getAllMonanbyLoai($cate) {
			$p = new  modelMonan();
			$tbl = $p-> SelectAllMonanbyLoai($cate);
			return $tbl;
			}
			
			function getAllMonanbyThucdon($menu) {
			$p = new  modelMonan();
			$tbl = $p-> SelectAllMonanbyThucDon($menu);
			return $tbl;
			}
	function getAllMonanbyMenuAndCate($menu, $cate) {
			$p = new  modelMonan();
			$tbl = $p-> SelectAllMonanbyMenuAndCate($menu, $cate);
			return $tbl;
			}
			
	}
?>