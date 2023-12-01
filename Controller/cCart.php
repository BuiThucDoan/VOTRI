<?php

include_once("Model/mCart.php");
class controlCart
{
    function getAllCart($idTaiKhoan)
    {
        $p = new modelCart();
        $tbl = $p->SelectAllCart($idTaiKhoan);
        return  $tbl;
    }

    function getAllCartbyDateandbyIDTK($ngayTao, $idTaiKhoan){
        $p = new modelCart();
        $tbl = $p->SelectAllCartbyDateandbyIDTK($ngayTao, $idTaiKhoan);
        return  $tbl;
    }
}
?>