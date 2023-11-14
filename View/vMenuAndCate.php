<?php
// Include controller Company
include_once("Controller/cMonan.php");

class ViewMenuAndCate {
    // Tạo mới đối tượng controller company
    function viewAllMenuAndCate($menu, $cate) {
        $p = new controlMonan();
        $tblMenu = $p->getAllMonanbyMenuAndCate($menu, $cate);
        if ($tblMenu) {
            // Kiểm tra kết quả nhận được có dữ liệu không
            if (mysql_num_rows($tblMenu) > 0) {
                // Duyệt từng dòng dữ liệu trong kết quả nhận được
                while ($row = mysql_fetch_assoc($tblMenu)) {
                    // Hiển thị kết quả nhận được
                    echo "<a href='test.php?menu=" . $row["idthucdon"] . "&cate=" . $row["idloaithucdon"] . "'>" . $row["tenthucdon"] . "</a><br>";
                }
            } else {
                echo "0 result";
            }
        } else {
            echo "Error";
        }
    }
}
?>
