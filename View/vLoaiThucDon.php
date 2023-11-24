<?php
//include controller Company
include_once("Controller/cLoaiThucDon.php");

class ViewCateMenu
{

    function viewAllCateMenu()
    {
        $p = new controlCateMenu();
        $tbl = $p->getAllCateMenu();
        if ($tbl) {
            // Kiểm tra kết quả nhận được có dữ liệu không
            if ($tbl->num_rows > 0) {
                $selectedCate = isset($_GET['cate']) ? $_GET['cate'] : null; // Lấy danh mục được chọn từ tham số GET
                echo "<select onchange='location = this.value;'>";
                echo "<option value='' selected disabled>Chọn danh mục</option>";
                while ($row = $tbl->fetch_assoc()) {
                    $isSelected = ($row["idloaithucdon"] == $selectedCate) ? 'selected' : ''; // Kiểm tra danh mục được chọn
                    // Hiển thị danh mục trong dropdown và thiết lập selected
                    echo "<option value='thucdon.php?cate=" . $row["idloaithucdon"] . "' $isSelected>" . $row["tenloaithucdon"] . "</option>";
                }
                echo "<option value='thucdon.php'>Hủy chọn</option>"; 
                echo "</select>";
            } else {
                echo "Không có kết quả.";
            }
        } else {
            echo "Lỗi.";
        }
    }
}
?>
