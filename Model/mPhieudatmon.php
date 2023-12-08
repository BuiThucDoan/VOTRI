<?php
include_once("ketnoi.php");
class modelPhieu
{

    function SelectOrder()
    {
        $p = new KetNoiDB();
        $con = $p->moKetNoi($con);
        $tbl = "SELECT * FROM phieudatmon ";
        $table = mysqli_query($con, $tbl);
        $list_users = array();
        if (mysqli_num_rows($table) > 0) {
            while ($row = mysqli_fetch_assoc($table)) {
                $list_users[] = $row;
            }
            return $list_users;
        }
        $p->dongKetNoi($con);
    }

    function SelectOrderDetail()
    {
        $p = new KetNoiDB();
        $con = $p->moKetNoi($con);
        $tbl = "SELECT * FROM chitietphieu INNER JOIN monan ON chitietphieu.id_monan = monan.id_monan";
        $table = mysqli_query($con, $tbl);
        $list_users = array();
        if (mysqli_num_rows($table) > 0) {
            while ($row = mysqli_fetch_assoc($table)) {
                $list_users[] = $row;
            }
            return $list_users;
        }
        $p->dongKetNoi($con);
    }

    function SelectOrderNewCreateByIdTaiKhoan($idtaikhoan)
    {
        // Kiểm tra xem $idtaikhoan có giá trị hay không
        if ($idtaikhoan === null) {
            // Trả về mảng rỗng nếu $idtaikhoan là NULL
            return array();
        }
    
        $p = new KetNoiDB();
        $con = $p->moKetNoi($con);
    
        // Thêm dấu ngoặc kép (`) cho tên cột ngaydat
        $tbl = "SELECT * FROM phieudatmon WHERE idtaikhoan = $idtaikhoan ORDER BY `ngaydat` DESC LIMIT 1";
    
        $table = mysqli_query($con, $tbl);
        $list_users = array();
    
        if ($table) {
            if (mysqli_num_rows($table) > 0) {
                while ($row = mysqli_fetch_assoc($table)) {
                    $list_users[] = $row;
                }
            }
    
            // Giải phóng bộ nhớ
            mysqli_free_result($table);
        } else {
            // Báo lỗi nếu có vấn đề với truy vấn
            trigger_error("Lỗi truy vấn: " . mysqli_error($con), E_USER_ERROR);
        }
    
        // Đóng kết nối
        $p->dongKetNoi($con);
    
        // Trả về mảng dữ liệu
        return $list_users;
    }
    
    

    function UpdateTotalOrder($totalByPhieuId)
    {
        if (empty($totalByPhieuId)) {
            // Xử lý trường hợp mảng rỗng hoặc NULL
            return false;
        }
    
        $p = new KetNoiDB();
        $con = $p->moKetNoi($con);
    
        $update = '';
        foreach ($totalByPhieuId as $idPhieu => $total) {
            // Thêm kiểm tra xem $idPhieu và $total có giá trị hợp lệ hay không
            if ($idPhieu && $total) {
                $update .= "UPDATE phieudatmon SET `tongtien` = $total WHERE idPhieu = $idPhieu; ";
            }
        }
    
        if (!empty($update)) {
            $kq = mysqli_multi_query($con, $update);
            $p->dongKetNoi($con);
            return $kq;
        } else {
            // Xử lý trường hợp $update là chuỗi trống
            return false;
        }
    }
    

    function InsertChiTietPhieu($dsgio, $dsphieu)
    {
        $p = new KetNoiDB();
        $con = $p->moKetNoi($con);
        $insert = "INSERT INTO chitietphieu (`idPhieu`, `id_monan`, `soluong`, `ngaylenmon`) VALUES";

        foreach ($dsgio as $item) {
            foreach ($dsphieu as $order) {
                if ($item['ngaylenmon'] == $order['ngaylenmon'] && $item['idtaikhoan'] == $order['idtaikhoan']) {
                    $id_monan = $item['id_monan'];
                    $soluong = $item['soluong'];
                    $ngaylenmon =  $item['ngaylenmon'];
                    $idPhieu = $order['idPhieu'];
                    $insert .= "($idPhieu, $id_monan, $soluong, '$ngaylenmon'),";
                }
            }
        }
        $insert = rtrim($insert, ", ");
        $kq = mysqli_query($con,  $insert);
        $p->dongKetNoi($con);
        return $kq;
    }

    


    function InsertPhieu($idtaikhoan, $result, $tongtien, $ngaydat)
    {
        $p = new KetNoiDB();
        $con = $p->moKetNoi($con);
        $insert = "INSERT INTO phieudatmon (`idPhieu`, `idtaikhoan`, `tongsoluong`, `tongtien`, `ngaylenmon`, `ngaydat`) 
  VALUES ";

        foreach ($result as $item) {

            $tongsoluong = $item['soluong'];
            $ngaylenmon = $item['ngaylenmon'];


            $idPhieu  = rand(0, 1000000);
            $idPhieu = $_SESSION['is_login']['idtaikhoan'] . $idPhieu;
            $insert .= "($idPhieu, $idtaikhoan, '$tongsoluong', '$tongtien', '$ngaylenmon', '$ngaydat'),";
        }


        $insert = rtrim($insert, ", ");
        $kq = mysqli_query($con,  $insert);
        $p->dongKetNoi($con);
        return $kq;
    }
    


    




}
?>