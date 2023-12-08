<?php
    include("Model/mPhieudatmon.php");

    class controlPhieu{

    function getOrderDetail(){
        $p = new modelPhieu();
        $tbl = $p->SelectOrderDetail();
        return  $tbl;
    }
    function getAllOrder(){
        $p = new modelPhieu();
        $tbl = $p->SelectOrder();
        return  $tbl;
    }

    function getOrderNewCreateByIdTaiKhoan($idtaikhoan){
        $p = new modelPhieu();
        $tbl = $p->SelectOrderNewCreateByIdTaiKhoan($idtaikhoan);
        return  $tbl;
        
    }

    function UpdateTotalOrder($totalByPhieuId){
        $p = new modelPhieu();
        $tbl = $p->UpdateTotalOrder($totalByPhieuId); 
        return  $tbl;
    }
    
    function InsertChiTietPhieu($dsgio, $dsphieu){
        $p = new modelPhieu();
        $tbl = $p->InsertChiTietPhieu($dsgio, $dsphieu);
        return  $tbl;
    }

    function InsertPhieu($idtaikhoan, $result, $tongtien, $ngaydat)
    {
        $p = new modelPhieu();
        $tbl = $p->InsertPhieu($idtaikhoan, $result, $tongtien, $ngaydat);
        return  $tbl;
    }
    }
?>