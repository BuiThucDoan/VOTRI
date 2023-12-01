<?php
include_once("Model/mMonan.php");

class controlMonan
{
    function getAllMonan()
    {
        $p = new modelMonan();
        $tbl = $p->SelectAllMonan();
        return $tbl;
    }

    function getShowchitiet($id)
    {
        $p = new modelMonan();
        $tbl = $p->Showchitiet($id);
        return $tbl;
    }
    function getAllMonAnThucdon()
    {
        $p = new modelMonan();
        $tbl = $p->selectAllMonAnThucdon();
        return $tbl;
    }

    function getAllMonanbyLoai($cate)
    {
        $p = new modelMonan();
        $tbl = $p->SelectAllMonanbyLoai($cate);
        return $tbl;
    }

    function getAllMonAnThucdonbyDate($date)
    {
        $p = new modelMonan();
        $tbl = $p->selectAllMonAnThucdonbyDate($date);
        return $tbl;
    }

    function getAllLoaiThucdon()
    {
        $p = new modelMonan();
        $tbl = $p->selectAllLoaiThucdon();
        return $tbl;
    }

    function getAllMonAnLoaiThucdon($cm)
    {
        $p = new modelMonan();
        $tbl = $p->selectAllMonAnLoaiThucdon($cm);
        return $tbl;
    }

    function getAllLoaiMonAn()
    {
        $p = new modelMonan();
        $tbl = $p->SelectAllLoaiMonAn();
        return $tbl;
    }
    function getSearch($search)
    {
        $p = new modelMonan();
        $tbl = $p->selectSearch($search);
        return $tbl;
    }
}
?>
