<?php
include_once("ketnoi.php");

class modelCart
{
    function SelectAllCart($idTK)
    {
        $p = new KetNoiDB();
        $con;

        if ($p->moKetNoi($con)) {
            $query = "SELECT * FROM phieudatmon JOIN monan ON phieudatmon.id_monan = monan.id_monan 
            JOIN taikhoan ON phieudatmon.idtaikhoan = taikhoan.idtaikhoan
                    WHERE taikhoan.idtaikhoan = '$idTK'";
            $result = $con->query($query);

            if ($result) {
                $p->dongKetNoi($con);
                return $result;
            } else {
                // Xử lý lỗi truy vấn
                echo "Lỗi truy vấn: " . $con->error;
            }
        } else {
            return false;
        }
    }


    function SelectAllCartbyDateandbyIDTK($ngayTao, $idTaiKhoan)
{
    $p = new KetNoiDB();
    $con;

    if ($p->moKetNoi($con)) {
        try {
            $query = "SELECT * FROM phieudatmon 
                INNER JOIN taikhoan ON phieudatmon.idtaikhoan = taikhoan.idtaikhoan 
                INNER JOIN monan ON phieudatmon.id_monan = monan.id_monan
                INNER JOIN chitietthucdon ON monan.id_monan = chitietthucdon.id_monan
                INNER JOIN thucdon ON chitietthucdon.idthucdon = thucdon.idthucdon
                WHERE thucdon.ngayTao= ? AND taikhoan.idTaiKhoan = ?";
            
            $stmt = $con->prepare($query);
            $stmt->bind_param("si", $ngayTao, $idTaiKhoan);
            $stmt->execute();
            
            $result = $stmt->get_result();

            return $result;
        } catch (Exception $e) {
            // Xử lý lỗi, ví dụ: ghi log lỗi
            echo "Lỗi truy vấn: " . $e->getMessage();
        } finally {
            // Đóng kết nối dù có lỗi hay không
            $p->dongKetNoi($con);
        }
    } else {
        return false;
    }
}


    
}
?>
