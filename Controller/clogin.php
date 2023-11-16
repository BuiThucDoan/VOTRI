<?php
	include_once("Model/mlogin.php");
class controllogin{
	function getAllLogin($user, $pas)
{
    $p = new modelLogin();
    $tblLogin = $p->selectLogin($user, $pas);

    if (is_array($tblLogin)) {
        foreach ($tblLogin as $item) {
            if ($user == $item['tendangnhap'] && $pas == $item['matkhau']) {
                $_SESSION['login'] = true;
                $_SESSION['is_login'] = array();
                $_SESSION['is_login']['hoten'] = $item['hoten'];
                $_SESSION['is_login']['vaitro'] = $item['vaitro'];
                $_SESSION['is_login']['idtaikhoan'] = $item['idtaikhoan'];
                $_SESSION['is_login']['tenvaitro'] = $item['tenvaitro'];
                $_SESSION['is_login']['tendangnhap'] = $item['tendangnhap'];
                $_SESSION['is_login']['maNV'] = $item['maNV'];
                $_SESSION['is_login']['sdt'] = $item['sdt'];
                $_SESSION['is_login']['email'] = $item['email'];
                $_SESSION['is_login']['ngaytao'] = $item['ngaytao'];
                $_SESSION['is_login']['hinhanh'] = $item['hinhanh'];
                return 1;
            }
        }
    } else {
        // Xử lý trường hợp không có dữ liệu hoặc có lỗi
        // Ví dụ: return -1 để biểu thị lỗi
        return -1;
    }

    return 0;
}

			
	}
?>