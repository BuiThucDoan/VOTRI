<?php
include_once("ketnoi.php");

class modelMenu
{
    function SelectAllMenu()
    {
        $p = new KetNoiDB();
        $con;

        if ($p->moKetNoi($con)) {
            $query = "SELECT * FROM thucdon";
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
