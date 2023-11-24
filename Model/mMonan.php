<?php
include_once("ketnoi.php");

class modelMonan
{
    function SelectAllMonan()
    {
        $p = new KetNoiDB();
        $con;

        if ($p->moKetNoi($con)) {
            $query = "SELECT * FROM monan";
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

    function Showchitiet($id)
{
    $p = new KetNoiDB();
    $con;
    
    if ($p->moKetNoi($con)) {
        $query = "SELECT monan.*, chitietnguyenlieu.*, nguyenlieu.tennguyenlieu
        FROM monan
        INNER JOIN chitietnguyenlieu ON monan.id_monan = chitietnguyenlieu.id_monan
        INNER JOIN nguyenlieu ON nguyenlieu.idnguyenlieu = chitietnguyenlieu.idnguyenlieu
        WHERE monan.id_monan =" . $id;
        $result = $con->query($query);
    
        if ($result) {
            $data = array(); // Tạo một mảng để lưu trữ dữ liệu
    
            while ($row = $result->fetch_assoc()) {
                // Lưu thông tin món ăn
                $data['monan']['id_monan'] = $row['id_monan'];
                $data['monan']['tenmonan'] = $row['tenmonan'];
                $data['monan']['gia'] = $row['gia'];
                $data['monan']['hinhanh'] = $row['hinhanh'];
                $data['monan']['mota'] = $row['mota'];
    
                // Lưu thông tin nguyên liệu từ bảng chitietnguyenlieu
                $data['nguyenlieu'][] = array(
                    'idnguyenlieu' => $row['idnguyenlieu'],
                    'tennguyenlieu' => $row['tennguyenlieu'],
                    'soluongsudung' => $row['soluongsudung'],
                    'donvitinh' => $row['donvitinh'],
                    // Các cột khác của bảng chitietnguyenlieu nếu cần
                );
            }
    
            $p->dongKetNoi($con);
            return $data;
        } else {
            // Xử lý lỗi truy vấn
            echo "Lỗi truy vấn: " . $con->error;
        }
    } else {
        return false;
    }
}    

    
/*
    function Selectnguyenlieu()
    {
        $p = new KetNoiDB();
        $con;

        if ($p->moKetNoi($con)) {
            $query = "SELECT *
                        FROM nguyenlieu
                        JOIN chitietnguyenlieu ON nguyenlieu.idnguyenlieu = chitietnguyenlieu.idnguyenlieu
                        JOIN monan ON chitietnguyenlieu.id_monan = monan.id_monan
                     " ;
            $result = $con->query($query);
            if ($result) {
                $row = $result->fetch_assoc();
                $p->dongKetNoi($con);
                return $row;
            } else {
                // Xử lý lỗi truy vấn
                echo "Lỗi truy vấn: " . $con->error;
            }
        } else {
            return false;
        }
    }
*/
    function SelectAllMonanbyLoai($cate)
    {
        $p = new KetNoiDB();
        $con;

        if ($p->moKetNoi($con)) {
            $query = "SELECT * FROM monan WHERE idloaithucdon =" . $cate;
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

    function SelectAllMonanbyMenuAndCate($menu, $cate)
    {
        $p = new KetNoiDB();
        $con;

        if ($p->moKetNoi($con)) {
            $query = "SELECT * FROM monan WHERE idthucdon = " . $menu . " AND idloaithucdon = " . $cate;
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

    function SelectAllMonanbyThucDon($menu)
    {
        $p = new KetNoiDB();
        $con;

        if ($p->moKetNoi($con)) {
            $query = "SELECT * FROM monan WHERE idthucdon =" . $menu;
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
}
?>
