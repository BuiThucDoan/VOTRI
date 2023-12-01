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


    function SelectAllMonanbyLoai($cate)
    {
        $p = new KetNoiDB();
        $con;

        if ($p->moKetNoi($con)) {
            $query = "SELECT *
            FROM thucdon
            JOIN chitietthucdon ON thucdon.idthucdon = chitietthucdon.idthucdon
            JOIN monan ON chitietthucdon.id_monan = monan.id_monan
            WHERE monan.id_loaimonan = $cate" ;
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


    function selectAllMonAnThucdonbyDate($date)
    {
        $p = new KetNoiDB();
        $con;
        if ($p->moKetNoi($con)) {
            $query = "SELECT * FROM thucdon JOIN chitietthucdon ON thucdon.idthucdon = chitietthucdon.idthucdon 
            JOIN monan ON chitietthucdon.id_monan = monan.id_monan WHERE ngaytao = '$date'";
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

    function selectAllMonAnLoaiThucdon($cm)
    {
        $p = new KetNoiDB();
        $con;
        if ($p->moKetNoi($con)) {
            $query = "SELECT *
            FROM loai_thucdon
            JOIN chitietthucdon ON loai_thucdon.idloaithucdon = chitietthucdon.idloaithucdon
            JOIN monan ON chitietthucdon.id_monan = monan.id_monan
            WHERE loai_thucdon.idloaithucdon = '$cm' ";
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

    function selectAllMonAnThucdon()
    {
        $p = new KetNoiDB();
        $con;

        if ($p->moKetNoi($con)) {
            $query = "SELECT * FROM thucdon JOIN chitietthucdon ON thucdon.idthucdon = chitietthucdon.idthucdon 
            JOIN monan ON chitietthucdon.id_monan = monan.id_monan" ;
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

    function SelectAllLoaiThucDon()
    {
        $p = new KetNoiDB();
        $con;
    
        if ($p->moKetNoi($con)) {
            $query = "SELECT * FROM loai_thucdon";
            $result = $con->query($query);
    
            if ($result) {
                $data = array();
    
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
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

    function SelectAllLoaiMonAn()
    {
        $p = new KetNoiDB();
        $con;
    
        if ($p->moKetNoi($con)) {
            $query = "SELECT * FROM loaimonan";
            $result = $con->query($query);
    
            if ($result) {
                $data = array();
    
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
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
    

    function selectSearch($search){
        $p = new KetNoiDB();
        $con;
        
        if ($p->moKetNoi($con)) {
            $query = "SELECT * FROM monan where tenMon LIKE '%$search%' OR gia like '%$search%' OR Mota like '%$search%' ORDER BY gia ASC";
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
