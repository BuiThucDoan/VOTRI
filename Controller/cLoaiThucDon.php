<?php
include_once("Model/mLoaiThucDon.php");

class controlCateMenu
{
    function getAllCateMenu()
    {
        $p = new modelCateMenu();
        $tbl = $p->SelectAllCateMenu();
        return $tbl;
    }
}
?>
