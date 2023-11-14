<?php
	//include controller Company
	include_once("Controller/cLoaiThucDon.php");
	class ViewCateMenu{

	function viewAllCateMenu() {
    $p = new controlCateMenu();
    $tbl = $p->getAllCateMenu();
    if ($tbl) {
        // Kiểm tra kết quả nhận được có dữ liệu không
        if (mysql_num_rows($tbl) > 0) {
            $selectedCate = isset($_GET['cate']) ? $_GET['cate'] : null; // Lấy danh mục được chọn từ tham số GET
            echo "<select onchange='location = this.value;'>";
            echo "<option value='' selected disabled>Chọn danh mục</option>";
            while ($row = mysql_fetch_assoc($tbl)) {
                $isSelected = ($row["idloaithucdon"] == $selectedCate) ? 'selected' : ''; // Kiểm tra danh mục được chọn
                // Hiển thị danh mục trong dropdown và thiết lập selected
                echo "<option value='test.php?cate=" . $row["idloaithucdon"] . "' $isSelected>" . $row["tenloaithucdon"] . "</option>";
				
            }
            echo "<option value='test.php'>Hủy chọn</option>"; // Thêm tùy chọn "Hủy chọn"
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