<?php
include_once("Model/mThucdon.php");

class controlMenu
{
    function getAllMenu()
    {
        $p = new modelMenu();
        $tbl = $p->SelectAllMenu();
        return $tbl;
    }

    function getAllCateMenu()
    {
        $p = new modelMenu();
        $tbl = $p->SelectAllCateMenu();
        return $tbl;
    }
}
?>
