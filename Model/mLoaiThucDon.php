<?php
include_once("ketnoi.php");

class modelCateMenu
{
    function SelectAllCateMenu()
    {
        $p = new KetNoiDB();
        $con;

        if ($p->moKetNoi($con)) {
            $query = "SELECT * FROM loai_thucdon";
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
